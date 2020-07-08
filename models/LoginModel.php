<?php
//session_start();
class LoginModel extends Database
{

    private $conn;

    public function __construct()
    {
        $this->conn = Database::getInstance();
    }

    public function login()
    {
        if (isset($_POST['mail']) && isset($_POST['password'])) {
            //  Récupération de l'utilisateur et de son pass hashé
            $password = $_POST['password'];
            $mail = $_POST['mail'];

            $req = $this->conn->prepare('SELECT * FROM users WHERE mail = :mail');
            $req->execute(array(':mail' => $mail));
            $data = $req->fetch(PDO::FETCH_ASSOC);
            $_SESSION['users'] = $data;

            if (password_verify($password, $data['password'])) {

                var_dump('user');

                var_dump('role');

                if ($_SESSION['users']['role'] == 2) {
                    header('location:../server/index.php');
                } elseif ($_SESSION['users']['role'] == 1) {
                    header('location:../interface.php');
                }
            } else {
                echo 'mauvais login/password';

            }

        }
    }

    public function logOut()
    {
        session_destroy();
        unset($_SESSION);
        header('location:../view/loginForm.php');
    }

    public function register()
    {
        if (isset($_POST['mail']) and isset($_POST['password']) and isset($_POST['name']) && isset($_POST['reponse'])) {
            // Connexion
            $name = $_POST['name'];
            $mail = $_POST['mail'];
            $password = $_POST['password'];
            $reponse = $_POST['reponse'];

            if (filter_var($mail, FILTER_VALIDATE_EMAIL)) {
                $requete = $this->conn->prepare('INSERT INTO users (name,password,mail, reponse) VALUES (?,?,?,?)');
                $hash = password_hash($_POST['password'], PASSWORD_DEFAULT);
                try {
                    $requete->execute(array($name, $hash, $mail, $reponse));
                } catch (Exception $e) {
                    echo "Erreur : " . $e->getCode() . "<br>" . $e->getMessage();
                }
                header('location:../view/loginForm.php');
            }
        }
    }

}

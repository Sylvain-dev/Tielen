<?php

class UserModel{

    private $table_name = 'users';
    private $database;
    
    public function __construct($database)
    {
        $this->database = $database;
    }

    
    public function read()
    {

        $sql = 'SELECT 
       u.id, u.name
    FROM
        ' . $this->table_name .' u';

        $stmt = $this->database->prepare($sql);
        $stmt->execute();

        return $stmt;
    }

    public function create(User $user) {
        $sql = 'INSERT INTO users (name,password,mail,reponse)'.' VALUES (:name,:password,:mail,:reponse)))';

        $stmt = $this->database->prepare($sql);

                    $name = $_POST['name'];
                    $mail = $_POST['mail'];
                    $password = $_POST['password'];
                    $reponse = $_POST['reponse'];
                    
                    $stmt->bindParam(":name", $this->name);
                    $stmt->bindParam(":mail", $this->mail);
                    $stmt->bindParam(":password", $this->password);
                    $stmt->bindParam(":reponse", $this->reponse);
                    
                    $this->id = htmlentities(strip_tags($this->id));
                    $this->name = htmlentities(strip_tags($this->name));
                    
                    $data = array($name, $password, $mail, $reponse);

                    $user = unserialize($data['user']);
        
                      		try{
                                $sql->execute($data);
                              }catch(Exception $e){
                                    echo "Erreur : ".$e->getCode()."<br>".$e->getMessage();
                                }

                     //$sql->execute($data);
                      }
                       
                     //unserialize ($data);

    /*
    public function delete()
    {
        $sql = 'DELETE FROM users WHERE id=:id;' 
        
        //$stmt = $this->database->prepare($sql);

        $this->id = htmlentities(strip_tags($this->id));

        $stmt->bindParam(':id', $this->id);

        if ($stmt->execute()) {
            return true;
        } else {

            print_r('Erreur:' . $stmt->error . '.\n');
            return false;
        }
    }*/

    public function getUserByName() {
        $sql = 'SELECT id FROM users WHERE name=:name';

        $stmt = $this->database->prepare($sql);

        $this->name= htmlentities(strip_tags($this->name));
       

        $stmt->bindParam(":name", $this->name);
        $stmt->execute();
        if ($this->id = $stmt->fetch()['id']) {
            return true;
        } else {
            return false;
        }
    }

    public function get($id)
    {
        $sql = "SELECT id, name, mail FROM users WHERE id = :id";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        
        if ($stmt->rowCount()) {
            return new User($stmt->fetch(PDO::FETCH_ASSOC));
        } else {
            return false;
        }
    }
    
}
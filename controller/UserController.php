<?php

class UserController extends Database{
    public $result;
    private $conn;

    public function __construct(){
        $this->conn = Database::getInstance();
    }

    public function readUsers(){
        $database = new Database();
        $userModel = new UserModel($database);

        $result = $UserModel->read();
        if($result){
            $param['user'] = $result;
        } else {
            $param['error'][] = ['user' => 'Aucun user trouvé'];
        }

        return $param; 
    }

    public function Create($user)
    {
         
        $user = new User($user);
        $database = new Database();
        $userModel = new UserModel($database);
        $userModel->create($user);
        
    }

    public function connectUser(){
        $database = new Database();
        $loginModel = new LoginModel();
        $loginModel->login();
    }

    public function register(){
        $database = new Database();
        $loginModel = new LoginModel;
        $loginModel->create();
    }
    //}
    //public function DeleteUser($result = array()){
    
      //  $UserModel = new UserModel();
        //$user = $UserModel->get->($result["id"]);
         //$id = $UserModel->delete($result);
         
    //}

        
  
    
 }   
    ?>
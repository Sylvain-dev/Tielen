<?php
 session_start();

 include_once 'config/Database.php';
 include_once 'models/MessageModel.php';
 include_once 'bean/Messages/Message.php';
 include_once 'controller/MessageController.php';
 include_once 'models/UserModel.php';
 include_once 'bean/Users/User.php';
 
 $data = [];
 
 $msgController = new MessageController($data);
 
 if (!empty($_POST['content'])) {
     $data['content'] = $msgController->createMessage($_POST);
     
    }else{
        $data['error'][] = ["emptyMessage" => "Vos champs ne sont pas remplies"];
    }
    $data['content'] = $msgController->readAllMessages();
    
include 'view/index.php';


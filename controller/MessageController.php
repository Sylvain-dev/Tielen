<?php

include_once "bean/Messages/Message.php";

class MessageController{
    public $param;
    public function __construct($param = null)
    {
        $this->param = $param;
    }

    
    public function readAllMessages()
    {        
        $database = new Database();
        $messageModel = new MessageModel($database);
    

        $result = $messageModel->read();
        if($result){
            $param['messages'] = $result;
        } else {
            $param['error'][] = ['message' => 'Aucun message trouvé'];
        }

        return $param;
    }
     
    public function createMessage($data){
        $message = new Message($data);
        $database = new Database();
        $messageModel = new MessageModel($database);
        $messageModel->create($message);
    }


    public function deleteMessage($params = array()){

       $MessageModel = new MessagesModel();
       $messages = $MessageModel->get($params["id"]);
       $id = $MessageModel->delete($messages);
       // rediriger avec un header???
        // récupérer le param id
        //$idurl = $_GET['id'];
        // autre possibilité 
        //public static function deleteMessage($id){
        //  if(isset($_SESSION['id'])) && isset($_SESSION['id']){
        //      unset($_SESSION['id'][$id]);
            }
       // }        

    }



?>

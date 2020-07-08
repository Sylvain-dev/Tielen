<?php

class AdminModel extends Database{
   private $CONN;
   public function __construct(){
       $this->CONN = Database::getInstance();
   }
   public function getAllMessages(){
       $stmt = $this->CONN->prepare("SELECT messages.id, id_user, content AS message, users.name AS userName FROM messages INNER JOIN users ON id_user = users.id ORDER BY date DESC");
       $stmt->execute();
       $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
       $result = $stmt->fetchAll();
       return $result;
   }

   public function getAllUsers(){
    $stmt = $this->CONN->prepare("SELECT id, name AS userName, mail FROM users");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $result = $stmt->fetchAll();
    return $result;
   }

}


<?php

include "bean\Messages\Message.php";
class MessageModel {

    private $database;
    private $table_name = 'messages';

    public function __construct($database)
    {
        $this->database = $database;
    }

    public function read()
    {

        $sql = 'SELECT 
                    m.id, m.date, m.content, m.id_user, u.name as name
                FROM messages m 
                INNER JOIN users u ON m.id_user = u.id
                Order By date DESC';

        $stmt = $this->database->prepare($sql);
        $stmt->execute();

        $num = $stmt->rowCount();
        if ($num > 0) {
            $message_array = array();

            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $message_array[] = new Message($row);
            }
            
            return $message_array;
        }
        return false;
    }

    public function read_one()
    {
        $sql = 'SELECT m.id, m.date, m.content, m.id_user FROM  messages m';
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(':id', $this->id);
        $stmt->execute();
                            
        if ($stmt->rowCount() > 0) {
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            $this->date = $row['date'];
            $this->content = $row['content'];
            $this->id_user = $row['id_user'];

            return true;
        } else {
            return false;
        }
    }   
    
    public function create($message)
    {

        $sql = 'INSERT INTO messages 
            VALUES (NULL,:content ,NOW(),:id_user)';

        $stmt = $this->database->prepare($sql);
        //$data = array($content);
       $content = $message->getContent();

       $id_user = ($_SESSION['users']['id']);
        
        $this->date = date('Y-m-d H:i:s');
        //$this->id_user = ($this->user->id);
        $this->content = htmlentities(strip_tags($message->getContent()));

        
        //$stmt->bindParam(":date", $this->date);
        $stmt->bindParam(":content", $this->content);
        $stmt->bindParam(":id_user", $id_user);
        
        //$content = $data->getContent();
        
        
        if ($stmt->execute()) {
            return true;
        } else {

            print_r('Erreur:' . $stmt->error . '.\n');
            return false;
        }
    }
    
    public function update()
    {
        $sql = 'UPDATE messages 
        SET
        content=:content 
        
        WHERE id=:id';

        $stmt = $this->database->prepare($sql);

        
        $this->content = htmlentities(strip_tags($this->content));
        //$this->id_user= htmlentities(strip_tags($this->id_user));
        $this->id = htmlentities(strip_tags($this->id));


        $stmt->bindParam(":content", $this->content);
        $stmt->bindParam(":id", $this->id);
        var_dump($stmt);

        if ($stmt->execute()) {
            return true;
        } else {

            print_r('Erreur:' . $stmt->error . '.\n');
            return false;
        }
    }

        public function delete(){
    
        $sql = 'DELETE FROM 
            messages
            WHERE
               id=:id';
        $stmt = $this->database->prepare($sql);

        $this->id = htmlentities(strip_tags($this->id));
        
        $stmt->bindParam(':id', $this->id);

        if ($stmt->execute()) {
            return true;
        } else {

            print_r('Erreur:' . $stmt->error . '.\n');
            return false;
        }
    }
}
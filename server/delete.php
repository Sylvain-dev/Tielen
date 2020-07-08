<?php

include_once '../config/Database'




$sql = 'DELETE FROM users WHERE (id=:id;)' 
        
$stmt = $this->database->prepare($sql);

$this->id = htmlentities(strip_tags($this->id));

$stmt->bindParam(':id', $this->id);

if ($stmt->execute()) {
    return true;
} else {

    print_r('Erreur:' . $stmt->error . '.\n');
    return false;
}


//$stmt = $this->CONN->prepare("DELETE FROM messages WHERE id = :id")
//$stmt->execute(array(
    //'id' => $id;
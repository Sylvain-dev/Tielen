<?php

class User{
    
    public $id;
    public $name;
    public $mail;

    public function __construct($data){
        if(isset($data['id']) && null != $data['id']) $this->id = $data['id'];
        if(isset($data['name']) && null != $data['name']) $this->name = $data['name'];
        if(isset($data['mail']) && null != $data['mail']) $this->mail = $data['mail'];
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setMail($mail)
    {
        $this->mail = $mail;
    }

    public function getMail()
    {
        return $this->mail;
    }


    public function setId($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

}
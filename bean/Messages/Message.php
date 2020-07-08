<?php


class Message{
    
    private $id;
    private $date;
    private $content;
    private $id_user;
    private $name;

    public function __construct($data){
        if(isset($data['id']) && null != $data['id']) $this->setId($data['id']);
        if(isset($data['date']) && null != $data['date']) $this->date = $data['date'];
        if(isset($data['content']) && null != $data['content']) $this->content = $data['content'];
        if(isset($data['name']) && null != $data['name']) $this->name = $data['name'];
        if(isset($data['id_user']) && null != $data['id_user']) $this->id_user = $data['id_user'];
    }

    public function getUser()
    {
        return $this->id_user;
    }


    public function setId($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setContent($content)
    {
        $this->content = $content;
    }

    public function getContent()
    {
        return $this->content;
    }

    public function getDate()
    {
        return $this->date;
    }
    public function getName()
    {
        return $this->name;
    }

    public function setName()
    {
        return $this->name;
    }
}
<?php

class User
{
    # Chave Primaria # Primary Key
    private $id_user;

    # Atributos # Atributes
    private $name;
    private $password;

    # Chaves Estrangeiras # Foreing Keys
    private $followers;
    private $following;

    public function __construct($id_user, $name, $password, $followers, $following)
    {
        $this->$id_user   = $id_user;
        $this->$name      = $name;
        $this->$password  = $password;
        $this->$followers = $followers ?? array();
        $this->$following = $following ?? array();
    }

    // Get Atribute
    public function getId(){ return $this->$id_user; }
    public function getName(){ return $this->$name; }
    public function getPassword(){ return $this->$password; }

    public function addFollower(User $user){ array_push($this->$followers, $user.getId()); }
    public function addFollowing(User $user){ array_push($this->$following, $user.getId());}
}
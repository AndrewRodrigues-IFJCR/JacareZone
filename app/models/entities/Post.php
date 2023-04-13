<?php

class Post
{
    # Chave Primaria # Primary Key
    private $id_post;

    # Atributos # Atributes
    private $title;
    private $content;
    private $datetime;

    # Chaves Estrangeiras # Foreing Keys
    private $id_user;

    public function __construct($id_post, $title, $content, $datetime, $id_user)
    {
        $this->$id_post  = $id_post;
        $this->$title    = $title;
        $this->$content  = $content;
        $this->$datetime = $datetime ?? new DateTimeZone('America/Sao_Paulo');
        $this->$id_user  = $id_user;
    }
}
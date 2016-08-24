<?php
namespace PlatziPHP
//creacion de entidad
//iniciar primero codeando la funcionalidad
class Post
{
    private $author;
    private $title;
    private $body;
    public function __construct(\Author $author, $title, $body)//\especificnado tipo de variable
    {
        $this->author = $author;
    }
    public function getAuthor(){
        return $this->author->getFirstName();
    }
}
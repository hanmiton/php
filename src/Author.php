<?php
namespace PlatziPHP;

class Author extends User{ //aqui se esta haciendo un heredacion con lextends
    //asi dicho elementeo tiene los mismos datos y metodos de user que no sean private
    //pero si puden usar las que tengan protected y public
    public function getFirstName()
    {
        return $this->password;
    }
}
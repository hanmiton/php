<?php
namespace PlatziPHP;

class Author extends User{ //aqui se esta haciendo un heredacion con lextends
    //asi dicho elementeo tiene los mismos datos y metodos de user que no sean private
    //pero si puden usar las que tengan protected y public
    public function --construct($email, $password, $key){
        parent::__construct($email, $password);
        if ($key != 'AUTOR DE PLATZI'){
            trow new \invalidArgumentException("mensaje");
}
}
    public function getFirstName()
    {
        return $this->password;
    }
}


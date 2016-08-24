<?php
namespace PlatziPHP;
use PlatziPHP\Email; //es para despues no tener que especificar depeues el namesapce
class Email{
    private $address;

    public function __construct($address)
    {
        if(! filter_var($address, FILTER_VALIDATE_EMAIL)){
            throw new \InvalidArgumenteException(
              "invalid email address: [$address]"
            );
        }
        $this->address = $address;
    }
}
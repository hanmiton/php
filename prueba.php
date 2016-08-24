<?php
require_once 'vendor/autoload.php'; //requieriendo un  modulo

$user = new \PlatziPHP\User('fake.email@foo.dev','1234'); //como se instancia un objeto mandansu namesapce

$user->setName('Guido', 'Woda');//utilizando dicha metodo del objeto para poner un nombre
var_dump($user);//para monstra en consola dicho objeto instanciado

echo $user->getFirstName(); //echo funcion que permite imprimri algo en consola
echo $user->getFirstName(); //echo siemrpe espera q se devulva texto
echo PHP_EOL; //EOL end of line

//herencia
//reutilizar lo que esun objeto en otro
//Autor podria heredar de user
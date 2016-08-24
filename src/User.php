<?php //empezando un docuemtno php
//se usan namespace para no tener problemas con mismo nombres
namespace PlatziPHP; //definiendo un namespace
//clase es como la receta para hacer un objeto
//y laimplementacion es como el pltao que se obtiene de la clase
class User{//clase que es la base para crera usuarios
    /**
     * @type string //se especifica que tipo va ser dicha variable
     */
    private $email;//es privado y solo se comparte por mensaje //protected
    protected $contraseña; //protected si puede ser heredado

    public function __construct($email, $password)//definiendo un constructor (email y pasword es lo que se pide para contruir dicho objeto
    {
        $this->email = $email; //$this es la que hace referencia a la propiedad del objeto
        $this->password = $password_hash($password, PASSWORD_DEFAULT); //hash funcion que nos permite no guradar ocntrasñas en texto plano

    }
    //se definne los objetos en archivos distintos
    /**
     * @param $email string //especifica el tipo de parametor que se piensa recibir
     */
    public function setName($email){//agregando una funcion que permite poner datos a los datos privados de dicho objeto
        $this->email = $email;//agregando email que se recibe de toro lado
    }

    /**
     * @return string
     */
    public function getFirstName(){ //fucnino getter para obtener el atributo email de user que es privado
        return $this->email; //retonando dicho parameto
    }
}
<?php
class  UserTest extends PHPUnit_Framework_TestCase{ //extendienod de test para hcer nuestro stest
    /** @test */ // con esto phpunit sabe que esto es un test
    function it_should_be_able_to_construct(){
        $user = new \PlatziPHP\User('fake@email.dev','platzi'));
        $this->assertInstanceOf(\PlatziPHP\User:::class , $user);//ve si dichao user es una instancia class de dicho objeto

        function it_should_have_a_first_name(){
            $this->assertEquals('Guido', $name); //validando que el no mbre sea Guido
            $this->setExpectedException(\invalidArgumentException::class);//para que en la preuba se pide q falle
        }
    }
}

//sobreescribir es escribir lo mismo pero con un hijo


Composer 
	es un administrador de dependencias en php
Paso composer init
	composer init
		inicializar composer
	composer require vendor/packagex.y
		requierindo libreria
	compser install
		instalando librerias
	composer update [vendor/package]
		actualizando una libreria o conjutno de librerias
Nombres de proyectos
	hanmiton/php-laravel
//Editores de texto
	PhpStorm(IDE)
//autoload
"autoload":{
	"psr-4":{
		"PlatziPHP\\"
	}
//objeots
	es un paradigma de programacion
	modelar algo de la vida real
	Objetos es una maquina de software que contiene datos y espone operacines
}
}

Objetos
	Operaciones
		que puede hacee
		como lo hace
		que respondera
	Datos
		que necesita
		con quien colabora
		en que estado esta
		- PUenden tener datos privados que no se deben compartir
//pruebas 
    preparar el contexto de la prueba
    despues ver si eso sucedio
    Define funcionalidad
    Garantiza que funcionalidad sea conrrecta
    Evita futuros problemas
Pruebas
    Prepara(arrange)
        Construir el contexto de la prueb
    Acutar(Act) 
        Ejecutar la aciion que queremos probar
    Verificar (assert)
        evaluar si la preuba dio lo que queriamos
composer requiere phpunit/phpunit --dev
ejecutable de phpunit
./vendor/bin/phpunit

//Patrones de diseño
	esqueletos que se usan en nuestro problema
	//Entidades
		Mas comun y masusado
		Es un objeto que en algun dia se va crear y que desupes del tiempo se lo va identificar aun eso hayan cambios en el 

		Objeto con identidad unica a traves del tiempo
		Parte del modelo de problema(MOdelo de Dominio)
		Mejor candidato a enriquecer
		Objeto con identidad
Objetos de valor
	Su identidad esta basada en el valor de sus atributos
	Tienen comportamiento importante par el dominio
	Quizas antes eran un tipo basico
	Suelen ser inmutables(que no se pueden modificar)
Pruebas
assertInstanceOf //que sea una isntancia de alguna clase
setExpected Exception //cuando queremons ver un error

REsumen
Objetos 
	estado 
	mensajes
	colaboracoin 
	herencia
	responsabilidad
Componser
	dependencias
	autoloadgin
Testing
	definicion
	comprobacion
	matenimeinto
Entidades
	identidad
	modelo del problema
Objetos de valor
	id<=>estado
	inmutables
Data transfer object antipatron(nunka usarlo siempre modelar objetos)
	finalidad transmitir datos de un lugar a otro 

cuadno el codigo es solo codigo php no es necesario cerrar el <?php

si php esta en el contexto de un codigo html se cierr php

 //subiendo aplicacon
 	tener un script que haga los pasos necesarios par subir el codigo
 	el cual es composer install
 	se tiene que subir el script pra subir dicha app y hacer deplyment
 //performace no iteien nada que ver con el tamaño de los arcihvos
 //patrones libros
 	design patterns explain alan shawolend
 	domain driver design
 	implementing driver design
 //encapsulameinto
 	siemrpe modelar un objeto que ofresca un comortamiento pero que encapsule los datos
 //polimorfismo
 //cohecion
 	cuando se diseña objetos que tenga responsabilidades puntuales
 	objeto debe tener solo una unica responsabilidad(noes solo un mensaje)(se tienen los mensajes que son coherentes para su funcionalidad)
 //acoplamiento
 	cuanto se necesita un objeto de otro
 	cuando se desea desacoplar se usa abstracciones
//sobrecarga
	tener un mensaje que puede recibir multiples argumentes y retorno diferente
//sobreescritura
	cuando una clases dle padre es pisada por una clase de la clase hija
//ocultameinto
	tenemso la capacidad de tner cosas privadas dentro de un objeto
//encapsulalmiento
	mensajes con propiedades privadas en su combinacion
//abstraccion e interfaces
	esto se utiliza pra hacer desacoplamiento
//static
	mensajes dentro de una clase(no usarlos)
//interface
	tipos y contratos
	objeto q implente esta interface tienen que implementar los metodos de dicha interface
//ciclo de vida
	constructor (new)
	despues vivo
	destruct
//phpbru gestion de versiones para php
//pdo
	son objetos
	estandar
	conexcion a base de datos 

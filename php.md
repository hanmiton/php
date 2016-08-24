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
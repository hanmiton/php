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
//php y laravel
//que es la web
	Protocolo HTTP
	Lenguaje HTML
	Arquitectura Cliente-Servidor
	Pedir un archivo
	Ruteo de URI
	PHP+Json JSON API + Client-side programming

Modelo Vista Controlador(MVC)
Sepracion de responsabilidades
	Modelo Logica de neogio (modelo de dominio)
	Vista Presentacion Visual
	Controlador Coordina las acciones del usuairo
		Decir quien haga que cosa y reponder al usuario
		100% ligado a pedido de la web y quein lo puede sresolver
Controlador
	Coordinan acciones
		Conocer al que pide y al que lo hace delegar (mediador)
	Se asocia a uno o mas pedidos http
		Verbo
		Request url
	Traduce pedido http mensaje dominio
	Arma la respuesta al pedido
Paquete de laravel
	Illuminate/http
Para corre un servidor de php embebido
	php -S localhost:8000 public/idnex.php
Staticos metodos que estan a nivel de calse se llama con ::

. siver pra concatenar

Vista
	Representacion grafica d ela respuesta
	Separar objetos(PHP) de html
	Poca o ningua necesidad de lógica
extract ($params)
inversion de dependencias
	objeto pide de afuera y alguien se la tiene qeu dar (dependencias mas desacopladas)
router
	es un objeto que nos poermite vinvualr las rutas con conroleres
{id}
	se especifica un parametro dentro de la ruta


Proceso
	Se hace el requests
	Controlador
		Coje le request
		Genera un new vista
		y envia dicha vista
ob_start();//guardamos en un buffer
return ob_get_clean();

Modelo
	Represetna el problema y la solucion implementada
	Separa logica de negocio de la presentacion
	Compone un Modelo de Dominio
Modelado de Coleccioones
	Objetos que represetna una colecicion de otros
	Buscar entre la colecion
	Agregar y quitar
	Filtrar coleccion
Operaciens dentro de objetos
	collapse
	contains
	count
	diff
	each
	every
	fetch
	filter
	etc
pakagist 
	todos los paquetes para php
::
 	token que permite acceder a elementos estáticos, constantes, y sobrescribir propiedades o métodos de una clase.
 Web
 	Protocolo http
 	html(css-js)
 	cliente-servidor
 MVC
 	Patron de arquitectura
 	Separacin de responsabilidad
 Controladores
 	reciben pedido
 	Delegan mensaje
 	Arman la vista
 Vista
 	Repreta la grafica
 	Poca logica
 Modelo
 	Problmea
 	Comunicacion
 	Idioma.jerga
 Colecciones
 	Contiene objs
 	Mensajes mas claros
 Container de laravel
 	crear otros objetos y darle todo lo que necesites
 	gran fabrica de objetos
 Reflexoin
 	metaprogramacion
 Modelo es una red de clases
 Ataques por id en query params
 MVC
 	Modelo (modelo de dominio)
 	Web(controller y vistar que representan entradas y salidas de la web)
 Request 
 	no era el nuestro
 	Metodos statics
 PHP
 	no tiene sobrecarga de contructores
Capa
	web
		entradas 
		salidas
	capa d emodelo de dominio
capas
	Http
		controllers
		views
	Consola
		commands
	api
		controllers
		transormers(convertir objetos en un mensaje json)
Modelo de dominio
	entities
	services
	value object
	events
	exceptions
Infraestrucutra-Datos
	repositorios(bas de datos)
	adapters(APIs)

Arquitectura por capas
	Src
		Domanin
			Autrho.php
			Email.php
			Post.php
			User.php
	domain es donde van las entities que solucinana nuestro problema
	Infrastructure
		fakeDatabase.php
	infraestrucutra es la capa de datos

Patron servicios
	Objetos qeu su rol es hacer algo pero q no estan represetnados como una identidad
	como afinador (accion especifica dentro del codigo)
	coodinadores de dominio
	no tienen estado (stateless)
	Se comunica con infraestrucrua
	responde pedidos de capas upseriores
Bases de datos
	persistencia
	software externo que no va ayudar a persistir los datos
	crear/editar/elimianr datos
	guardar datos entre pedidos
	optimizados para busqueda
	transaccionalidad
nosql
	no se garantiza la consistencia de los datos
PDO-PHPData Objects
	Abstracion de bas de datos
	Modelo de objetos
	Estandar recomendado por la comunidad
pdo
	es para q no importe la base de datos que se usa
Statement
	algo q preparamso y vamos ejecutar

Repositories
	pdo
	orm()
	Encapsula el acceso a datos
	Se modelna como una coleccion
	Separan logica de persistencia

Queries base datos
	no poner $ en las consultas de base de datos
	porq puede darse sql inyeccin
	usar :id
$statement->bindParam(
	':id',
	$id,
	\PDO::PARAM_INT
);

Errores y Excepcines(Exceptions)
	Detiene el flujo norma de la aplicacion
	Comunican que fallo
	Nos permite reaccioanr al error y decidir ocmo continuar
Errores
	no se pueden capturar
framework laravel
	nos da herramientas
	tareas
	concentrarse en que se trata nuestro proyecto

Laravel 
fundamentos
	es un framework moderno de PHP
	Objetivos
		rapidamente
		divertido de usar
		facil
		buenas practicas
		patrones S.O.L.I.D
La base
	composer
		package manager para php uno de los mas grandes que existe
	componentes de symfony

	Swiftmail
	Monolog
	Carbon
	Psr-7
Princpales caracteristicas
	Artisan cli
	controladores
	orm
	migraciones
	blade templates
	Poderoso router
	cache
	eventos
	sutenticacion
	queues
	acl
		contron de permisos para usuarios
	poderos contenedor
		poderos contenedor de dependencias
Ecosistema
	Homestead
		Una maquina virtual para poder usar todas las herrameitnas que nos da laravel
	Supoort
		Libreria de sopoerte
		Manipulacion cadenas
		Colecciones
	Cashier y Socialite
		Cashier es forma sencilla instalar stripe como metodo de pago
		Cliente de conexion outh 2 facebook twitter
	Elixir
		Contenedor que nos da una API
		para usar gulp
	Forge
		Provisionar servidore sdesde cero para lanzar el producto lo mas rapido posible
	Envoyer
		Servicio para tener 0 teimpo de baja cuando lanzamos nuestra aplicacion sin ftp
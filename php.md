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
		Cashier es forma sencilla instalar stripe como metodo de pagok
		Cliente de conexion outh 2 facebook twitter
	Elixir
		Contenedor que nos da una API
		para usar gulp
	Forge
		Provisionar servidore sdesde cero para lanzar el producto lo mas rapido posible
	Envoyer
		Servicio para tener 0 teimpo de baja cuando lanzamos nuestra aplicacion sin ftp
Instalcion laravel
	1. Instalar composer
		API como nosotros como programadores escribmos codiog para nosostros mismo com para otras personas
	2.- composer create-project laravel/laravel --preger-dist
		composer global requiere "laravel/installer=~1.1"
	laraver new platziphp //creando aplicacioens en laravel
	php artisa para ver si la app se encuentra instalada

laravel/laravel
	solo da una estructura
laravel/framework
	donde estan todas las librerais api interna

homestead
	 half apagarla
	 suspend suspender
config
	viene para cache
	view
		rutas de nuestras vistas
	mail
		para usar proveedores de mails
		log se usa pra desarrollo
	database

env
	dot env
		nos deja incluier un arcivho .env donde podemos ver las varialbes de entorno de nuestro servidor
configuracion proyecto

rutas
	metodos http(get,post,put,patch,delete)
	configuracion
		reqeuridos
		opcionales
		regex
	agrupados
	por nombre
controladores
	recibir pedidos y respuestas http
	ayudan organizar codigo
	inyeccion de dependencias
		constructor
		metodo
en php no se puede extender mas de una clase

InicioController@inicio
 con esto llamamos al controller desde llas rutas
Blade
	promueve buanas practicas
controlador
	reciben request
	lanzan response
Blade
	Simple poderos
	ejecuta php
	php en cache
	herencia vistas
Sintaxis
	{{variable}}
	{{{variable_crudo}}}
	@{{javascript}}
	@extend('layout')//extendemos el layout qeu deseamos
	@section('lateral)@stop')
	@if(true)@else@endif
	@foreach($vars as $var)@endforeach
	@unless()
	@yield('content') ('css') ('js') //permite extender en otra vista el tipo de archivos
	@stop para parar la vista que se a importado
:: (metodo estatico)
	usar fachadas o helpers

Elixir

versinaje
	.version('public/css/app.css');

	usando versioesn
		{{elixir('css/app.css')}}
Artisan
	linea de comandos
		crear clase con facilidad
		migraiones
		queues
		cache
		llenar base de datos con datos de prueba
		acceso a la aplicaciones por medio de laconsola
php artisan down
php artisan up
php artisa help make:controller
	//para generar un controlador
		art make:controller nombre.controlador
route:cache 
	solo usar en produccion
artisan route list
	numero los metodos con susrespectivas rutas
php artisa tinker
	permite entrat a la consola de ocmandos
migraciones
	control de versiones de la base de datos
	mapero de campos de base de datos
	facil compartir
	esquema de base de datos
	regresar cambios
art make:migration create_post_table
	
Laraverl
	no es afcil compartir en hosting compartidos

Empezar aprender elixir
	elixir subir archivos minificados
Modelos y eloquent
	Eloquent
		api comun para varias bases de datos
	Cada tabla tiene su modelo
	Operaciones select, insert update delete
	relaciones
		uno a uno 
		uno a mucho
		muchos a muchos
Modelos 
	objetos de elocuent
artisan make:model Post (para la creacin de un modelo)

//perpage = 15
	cuanto se desaea por pagina
$fillable
	protegernos insercion de datos masivos a elocute
usar sequel pro para ver los datos

artisan 
	tinker para hacer preubas
$fillable
	son aquelllos lo que se teine que pasar un parametro para guardar
dd
	para volver los parametros de una forma bonita
Relaciones
	php artisan migrate:rollback
	dropIfExists(si existe lo borra)
php artisan migrate 
	para que regrese toda la base dedatos

haciendo las relaciones

public fucntion posts(){
	return $this->hasMany(Post::class)
}

php artisan migrate:refresh
	hasOne ( uno a uno)

Creacion desde 0 con laravel
	
php artesian php:name Platziphp
factories
	hacer datos de mentiras
Seader
	manipula los datos de una manera inicial

Vistas
return view('home', ['name' => $name]);

entrar arreglos
	@foreach($posts as $post)
		{{ $post->name}}
	@endforeach
eager loading
	with('author')->get()

Vistas con lo menor de logica posible
	route dentro de vista
	{{route('post_show_path', $post-id)}}
gulp --produccion
2 tipos de app hoy en dia
	forge
		para hacer deploy app
laravel autenticacion
	controlador@metodo
$request->only(['email','password'])

Service Container
Control de dependencias
Inyeccin de dependencias
Multiples forams de crear instanias
	Bind
	Singleton
	Instance

	Providers
		Se registran dependencias dentro de un contenedor
			service provider
				dos metodos
					boot
					 va despues del metodo boot
					register
						va antes que todo 
middleware 
	don com cebollas
	cosas que encapsulan el request
	metodos que van antes de que el controlador reciba el reqeust
routeMiddleware
	decir las rutas que se peuden usar antes qeu lleguen la rutas
view composer
	compartir variables a cualqueira de nuestras vistas
compartir datos netre todas las vistas
	siermpe usar la inyeccion de dependencias antes q facaces
expresiones regulares
	->where('id','[1-9]+')//expresiones regulares en rutas
partials
	reutiliacion de vistas para varias ocaciones
	@include('partials.errors')
view composer
	compartir datos globales entre todas las vistas
consutra que es facade
ellocuente 
	active record
doctrine
	data mapper
form request
	como la ultima cpaa antes de llegar al controler
conceptos avanzados de objetos
	
extends herencia
	protedted par que se puedan heredar
abstract 
	cuando hay metodo ligeramente distintos y se desea q la clases hija implemente el metodo
	funcino sin implementacion
	la clase entrera tiene que ser abstract
polimorfismo
	es poder usar objetos que son hijos de algunos otros objetos en el contexto de su padre
interface (implements)

Eventos
	modelan hecho q sucedio
	objetos pueden reaccionar a ellos
	agregar efectos secundarios
	Arquitectur orientada a objetos
mock objeto falso
	evento asociado aun objeto q lo retorna cuando pase dicho evento
instalar vagrant
	vagrant init
		iniciar
	vagrant up
		headless no tiene interface grafica
	vagrant status
	vagrant ssh
		para conectarse a la maquina virtual
	todas las configuracines de infraestrucutra se guardan en la maquina virtual
PuPHPet
	codigo q se necesita en vagrant
bucket
	para el almacenamiento de archivos en amazon
cronjob
	ejecutra tareas dentro de laravel
		ejemplo envia rmensaje a todos los cumpleañeros
			cadamiuto
			dayli
			everyFiveMinutes();
			twinceDayli()
El patrón Decorator responde a la necesidad de añadir dinámicamente funcionalidad a un Objeto. 

falldas
	Las peticiones a frameworks como Laravel son recibidas por:
		rutas
	Patron decoradro en vista nos permite
		separara html logica
	Cual es inconveniente patorn mvc
		mucho codigo contoller
	en laravel segun la convecion de lalves foranesas ¿como se llamarai al a columna que relaciona un producto?
		id_categories
	Cual de estas tareas no deberia ser ejecutad por le controlador
		consulta base de datos
	como escribimos campo tipo teto con laravel
		Input(text)
	laravel los facades nos permite
		.....
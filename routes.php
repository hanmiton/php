<?php

Route::get('/',function(){
	return view('welcome');
});

Route::get('/contacto/{usuario}', function($usurio){
	return 'Hola yo soy' . $usuario . 'contacto';
});

Controladores
	cuando es muy peqeuño es bueno escribir en el archivo de rutas

Route::get('')
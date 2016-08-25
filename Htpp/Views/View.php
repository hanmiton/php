<?php
namespace PlatziPHP\Http\Views;

class View{
	private $tempalte;
	private $params;
	public function __construct($template, array $params = []){
		$this->template = $template;
		$this->params = $params;
	}
	public function render(){
		$content = $this->loadTemplate();
		$response = new Response($content); //creando respuesta con laravel
		return $response;
	}
	private function loadTemplate(){
		$path = dirname(dirname(dirname(__DIR__))) .
		'/resoruces/views';
		$templatePath = "$path/{$this->tempalte}.php"
		return $this->includeTempalteFromFile($templatePath,$this->params)
		if (file_exists($templatePath)){

		}
	}
}
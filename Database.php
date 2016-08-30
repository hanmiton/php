<?php
nameespace PLATZI\Infraestructure;

class Database
{
	public function posts(){
		$pdo = new \PDO('mysql:host=127.0.0.1;dbname=platziphp','guiwoda','guiwoda');

		$statement = $pdo->prepare('SELECT * FROM posts'); //statement es de tipo pdo
		$statement->execute();

		return $statement->fetchAll(); //se le piede que devuelva todo lo que recibe
	}
}

El patrón Decorator responde a la necesidad de añadir dinámicamente funcionalidad a un Objeto. 
<?php

class Conexion{

	static public function conectar(){

		//Instanciamos una clase PDO, eso es mucho mas seguro.
		//PDO(conexion-servidor,usuario,contraseña)
		$link = new PDO("mysql:host=localhost;dbname=pos",
						"root",
						"");

		//Ejecutamos el exec para que todo lo que venga en caracteres latino lo podamos recibir sin problemas, por ej. tildes, eñes, etc.
		$link->exec("set names utf8");

		return $link;

	}
}
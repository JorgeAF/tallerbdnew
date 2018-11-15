<?php 
	function conectarBD()
	{
		$host="host=localhost";
		$port="port=5432";
		$dbname="dbname=ejem";
		$user="user=postgres";
		$password="password=root";
	
		$bd=pg_connect("$host $port $dbname $user $password");
		if (!$bd) {
			echo"Error: ".pg_last_error();
		}else{
			//echo"<h3>Coneccion Exitosa PHP - PostgreSQL<h3><hr>";
			return $bd;
		}

	}





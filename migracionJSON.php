<?php

	function traerTodos() {
		$archivoJSON = file_get_contents("usuarios.json");

		$arrayDeJSONS = explode("\n", $archivoJSON);

		array_pop($arrayDeJSONS);

		$arrayFinal = [];

		foreach ($arrayDeJSONS as $json) {
			$arrayFinal[] = json_decode($json, true);
		}
		
		return $arrayFinal;
	}





	function traerPorMail($mail) {

	
		$usuarios = traerTodos();
		foreach ($usuarios as $usuario) {
			if ($usuario["email"] == $mail) {
				return $usuario;
			}
		}

		return NULL;
	}




	function mysql_connect(){

		$dsn = 'mysql:host=localhost;dbname=sprint3;
		 charset=utf8mb4;port:3306';

		 $db_user = 'root';
		 $db_pass = '';

	    try{
	    	$db=new PDO($dsn,$db_user,$db_pass);
	    	//$query=$db->query("SELECT * from usuario");
	    	//$res = $query->fetchAll(PDO::FETCH_ASSOC);
	    	//var_dump($res);
	    }
	    
	    catch(PDOException $Exception){
			echo$Exception->getmessage();
	    }



	    $query=$db->prepare("INSERT into usuario values(default,:nombre,:apellido,:edad,:email,:password)");
	    //$query->execute(); 

	    $usuarios = traerTodos();

		foreach ($usuarios as $usuario) {
		  //echo "<li>" . $usuario["name"] . "</li>";

		 // $queryUsuarios->execute();
		  //$Usuarios = $queryUsuarios->fetchAll(PDO::FETCH_ASSOC);

		  	
		    $query->bindValue(":nombre", $usuario["nombre"]);
		    $query->bindValue(":apellido", $usuario["apellido"]);
		    $query->bindValue(":edad", $usuario["edad"]);
		    $query->bindValue(":email", $usuario["email"]);
		    $query->bindValue(":password",$usuario["password"]);

		    $query->execute();
		}

	    //el prepare lo haces antes del foreach y se prepara una vez
	    //dentro del foreach vas cambiando solamente los valores del prepare
	    // fijate los bindeos


	    //var_dump($usuarios);

	}

	mysql_connect();
     
     


?>
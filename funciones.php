<?php

	session_start();

	if (!isset($_SESSION["logueado"]) && isset($_COOKIE["logueado"])) {
		$_SESSION["logueado"] = $_COOKIE["logueado"];
	}

	function validarInformacion($informacion) {
		$errores = [];

		foreach ($informacion as $clave => $valor) {
			$informacion[$clave] = trim($valor);
		}


		if (strlen($informacion["nombre"]) == "") {
			$errores["nombre"] = "Ingresar su nombre";
		}

    	if (strlen($informacion["apellido"]) <= 0) {
			$errores["apellido"] = "Ingresar más de 3 caracteres en apellido";
		}

		if ($informacion["edad"] < 18) {
			$errores["edad"] = "Debe tener más de 18 años";
		}


		if ($informacion["email"] == "") {
			$errores["email"] = "El mail está incompleto";
		}
		else if (filter_var($informacion["email"], FILTER_VALIDATE_EMAIL) == false) {
			$errores["email"] = "Ingresar un mail válido";
		}

		if ($informacion["password"] == "") {
			$errores["password"] = "Ingresar una contraseña";
		}

		if ($informacion["cpassword"] == "") {
			$errores["cpassword"] = "Ingrese nuevamente la contraseña";
		}

		if ($informacion["password"] != "" && $informacion["cpassword"] != "" && $informacion["password"] != $informacion["cpassword"]) {
			$errores["password"] = "Las contraseñas no coinciden";
		}


		return $errores;
	}


	function validarLogin($informacion) {
		$errores = [];

		foreach ($informacion as $clave => $valor) {
			$informacion[$clave] = trim($valor);
		}


		if ($informacion["email"] == "") {
			$errores["email"] = "El mail está incompleto";
		}
		else if (filter_var($informacion["email"], FILTER_VALIDATE_EMAIL) == false) {
			$errores["mail"] = "Ingresar un mail válido";
		} else if (traerPorMail($informacion["email"]) == NULL) {
			$errores["mail"] = "El mail no esta registrado";
		}

		$usuario = traerPorMail($informacion["email"]);

		if ($informacion["password"] == "") {
			$errores["password"] = "Ingresar una contraseña";
		} else if ($usuario != NULL) {
			//El usuario existe y puso contraseña
			// Tengo que validar que la contraseño que ingreso sea valida
			if (password_verify($informacion["password"], $usuario["password"]) == false) {
				$errores["password"] = "La contraseña no verifica";
			}
		}




		return $errores;
	}

	function armarUsuario($datos) {
		$usuario = [
			"nombre" => $datos["nombre"],
			"apellido" => $datos["apellido"],
			"email" => $datos["email"],
			"password" => password_hash($datos["password"], PASSWORD_DEFAULT),
			"edad" => $datos["edad"],
		];
		return $usuario;
	}

	function guardarUsuario($usuario) {
		$jsonUsuario = json_encode($usuario);

		file_put_contents("usuarios.json", $jsonUsuario . PHP_EOL, FILE_APPEND);
	}

	function traerTodos() {
		$archivoJSON = file_get_contents("usuarios.json");

		$arrayDeJSONS = explode(PHP_EOL, $archivoJSON);

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

	function loguear($email) {
		$_SESSION["logueado"] = $email;
	}

	function estaLogueado() {
		return isset($_SESSION["logueado"]);
	}

	function usuarioLogueado() {
		if (estaLogueado()) {
			$mail = $_SESSION["logueado"];
			return traerPorMail($mail);
		} else {
			return NULL;
		}

	}

	function logout() {
		session_destroy();
		setcookie("logueado", "", -1);
	}

	function recordame($email) {
		setcookie("logueado", $email, time() + 3600 * 2);
	}

?>

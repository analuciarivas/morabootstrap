<?php

require_once("db.php");

class Validador {
  public function validarInformacion($informacion, DB $db) {
    $errores = [];

  		foreach ($informacion as $clave => $valor) {
  			$informacion[$clave] = trim($valor);
  		}

  		if (strlen($informacion["nombre"]) == "") {
  			$errores["nombre"] = "Ingresar su nombre";
  		}

      	if (strlen($informacion["apellido"]) <= 3) {
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


    function validarLogin($informacion, DB $db) {
  		$errores = [];

  		foreach ($informacion as $clave => $valor) {
  			$informacion[$clave] = trim($valor);
  		}


  		if ($informacion["email"] == "") {
  			$errores["email"] = "El mail está incompleto";
  		}
  		else if (filter_var($informacion["email"], FILTER_VALIDATE_EMAIL) == false) {
  			$errores["email"] = "Ingresar un mail válido";
  		}
      else if ($db->traerPorMail($informacion["email"]) == NULL) {
  			$errores["email"] = "El mail no esta registrado";
  		}

  		$usuario = $db->traerPorMail($informacion["email"]);

  		if ($informacion["password"] == "") {
  			$errores["password"] = "Ingresar una contraseña";
  		}
      else if ($usuario != NULL) {
  			//El usuario existe y puso contraseña
  			// Tengo que validar que la contraseño que ingreso sea valida
  		    if (password_verify($informacion["password"], $usuario["password"]) == false) {
  				$errores["password"] = "La contraseña no verifica";
  			}
  		}




  		return $errores;
  	}

}
 ?>

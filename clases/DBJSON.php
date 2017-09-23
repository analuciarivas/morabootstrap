<?php

require_once("db.php");
require_once("usuario.php");

class DBJSON extends DB {
  private $archivo = "usuarios.json";
  private $jsonUsuario = [];

  public function guardarUsuario(Usuario $usuario) {
    $usuario = [
			"nombre" => $usuario->getNombre(),
			"apellido" => $usuario->getApellido(),
			"email" => $usuario->getEmail(),
			"password" => $usuario->getPassword(),
			"edad" => $usuario->getEdad(),
		];

    $jsonUsuario = json_encode($usuario);

		file_put_contents($this->archivo, $jsonUsuario . PHP_EOL, FILE_APPEND);
	}

  public function traerTodos() {
    $archivoJSON = file_get_contents($this->archivo);

    $arrayDeJSONS = explode(PHP_EOL, $archivoJSON);

    array_pop($arrayDeJSONS);

    $arrayFinal = [];

    foreach ($arrayDeJSONS as $json) {
      $arrayFinal[] = json_decode($json, true);
    }

    return $arrayFinal;
    }
  public function traerPorMail($email) {
    $usuarios = $this->$db->traerTodos();
    foreach ($usuarios as $usuario) {
      if ($usuario["email"] == $mail) {
        return $usuario;
      }
    }

    return NULL;
  }


}






?>

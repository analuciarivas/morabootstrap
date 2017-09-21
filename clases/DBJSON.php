<?php

require_once("db.php");
require_once("usuario.php");

class DBJSON extends DB {
  private $archivo = "usuarios.json";

  public function guardarUsuario(Usuario $usuario) {
// falta hacer
  }
  public function traerTodos() {
// falta hacer
  }
  public function traerPorMail($email) {
// falta hacer
  }
}

?>

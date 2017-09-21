<?php

class Usuario {
  private $id;
  private $nombre;
  Private $apellido;
  private $edad;
  private $email;
  private $password;

  public function __construct($datos) {
		if (isset($datos["id"])) {
			$this->id = $datos["id"];
		  $this->password = $datos["password"];
		}

		else {
		    $this->password = password_hash($datos["password"], PASSWORD_DEFAULT);
		}

		$this->email = $datos["email"];
		$this->nombre = $datos["nombre"];
		$this->apellido = $datos["apellido"];
		$this->edad = $datos["edad"];
	}

	  public function setId($id) {
		    $this->id = $id;
	  }
	  public function getId() {
	    return $this->id;
	  }

	  public function setNombre($nombre){
        $this->nombre = $nombre;
	  }
    public function getNombre(){
      return $this->nombre;
    }

    public function setApellido($apellido){
    	$this->apellido = $apellido;
    }
    public function getApellido(){
    	return $this->apellido;
    }

    public function setEdad($edad) {
    $this->edad = $edad;
    }
	  public function getEdad() {
	    return $this->edad;
	  }

    public function setEmail($email) {
	  $this->email = $email;
	  }

	  public function getEmail() {
	  return $this->email;
	  }

	  public function setPassword($password) {
	  $this->password = $password;
	  }
	  public function getPassword() {
	  return $this->password;
	  }
    
}

?>

<?php
include 'db.php';
class User extends DB{
	private $nombre;
	private $apellido;
	private $grupo;
	private $calificacion1;
	private $calificacion2;
	private $calificacion3;
	private $calificacion4;
    public function userExists($user, $pass){
		$sha1pass = sha1($pass);
        $query = $this->connect()->prepare('SELECT * FROM personas WHERE username = :user AND password = :pass');
        $query->execute(['user' => $user, 'pass' => $pass]);
        if($query->rowCount()){
            return true;
        }else{
            return false;
        }
    }
    public function setUser($user){
        $query = $this->connect()->prepare('SELECT * FROM personas WHERE username = :user');
        $query->execute(['user' => $user]);
        
        foreach ($query as $currentUser) {
            $this->nombre = $currentUser['nombre'];
            $this->username = $currentUser['username'];
			$this->Id = $currentUser['Id'];
			$this->Apellido = $currentUser['Apellido'];
			$this->Profesion = $currentUser['Profesion'];
			$this->Ciudad = $currentUser['Ciudad'];
			$this->Telefono = $currentUser['Telefono'];
			$this->Edad = $currentUser['Edad'];
			$this->Direccion = $currentUser['Direccion'];
			$this->CodigoPostal = $currentUser['CodigoPostal'];
			$this->Correo = $currentUser['username'];
			$this->Contrasena = $currentUser['password'];
        }
    }
    public function getNombre(){
        return $this->nombre;
    }
	public function getId(){
        return $this->Id;
    }
	
	public function getApellido(){
		return $this->Apellido;
	}
	
	public function getProfesion(){
		return $this->Profesion;
	}
	
	public function getCiudad(){
		return $this->Ciudad;
	}
	
	public function getTelefono(){
		return $this->Telefono;
	}
	
	public function getEdad(){
		return $this->Edad;
	}
	
	public function getDireccion(){
		return $this->Direccion;
	}
	
	public function getCodigoPostal(){
		return $this->CodigoPostal;
	}
	
	public function getCorreo(){
		return $this->Correo;
	}
	
	public function getContrasena(){
		return $this->Contrasena;
	}
}
?>
<?php 	
	require_once("../Datos/Conexion.php");	
	class Cliente
	{
		private $rut;
		private $nombre;
		private $apellido_mat;
		private $apellido_pat;
		private $direccion;
		private $correo;
		private $actividad;
		private $clave;

		public function __construct(){}

		public function Cliente($rut,$nombre,$apellido_mat,$apellido_pat,$direccion,$correo,$actividad,$clave){
			$this->rut=$rut;
			$this->nombre=$nombre;
			$this->apellido_mat=$apellido_mat;
			$this->apellido_pat=$apellido_pat;
			$this->direccion=$direccion;
			$this->correo=$correo;
			$this->actividad=$actividad;
			$this->clave=$clave;
		}
		//Accesadores

		public function getRut(){
			return $this->rut;
		}
		public function getNombre(){
			return $this->nombre;
		}
		public function getApellidoMat(){
			return $this->apellido_mat;
		}
		public function geApelldioPat(){
			return $this->apellido_pat;
		}
		public function getDireccion(){
			return $this->direccion;
		}
		public function getCorreo(){
			return $this->correo;
		}
		public function getActividad(){
			return $this->actividad;
		}
		public function getClave(){
			return $this->clave;
		}
		//mutadores
		public function setRut($rut){
			return $this->rut=$rut;
		}
		public function setNombre($nombre){
			return $this->nombre=$nombre;
		}
		public function setApellidoMat($apellido_mat){
			return $this->apellido_mat=$apellido_mat;
		}
		public function setApellidoPat($apellido_pat){
			return $this->apellido_pat=$apellido_pat;
		}
		public function setDireccion($direccion){
			return $this->direccion=$direccion;
		}
		public function setCorreo($correo){
			return $this->correo=$correo;
		}
		public function setActividad($actividad){
			return $this->actividad=$actividad;
		}
		public function setClave($clave){
			return $this->clave=$clave;
		}
		//CUSTOMERS
		public function ingresarCli(){
   		 $objConex=new Conexion();
    	 $sql="INSERT INTO CLIENTE VALUES('".$this->rut."','".$this->nombre."','".$this->apellido_mat."','".$this->apellido_pat."','".$this->direccion."','".$this->correo."','".$this->actividad."','".$this->clave."')";
     	 $resul=$objConex->generarTransaccion($sql);
    	 return $resul;
   		}
	}
?>
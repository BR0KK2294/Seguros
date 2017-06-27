<?php 	
	require_once("../Datos/Conexion.php");	
	class Solicitud
	{
		private $id_prod;
		private $rut_cli;
		private $valorTotal;
		private $aprobada;
		private $rut_us;

		public function __construct(){}

		public function Solicitud($id_prod,$rut_cli,$valorTotal,$aprobada,$rut_us){
			$this->id_prod=$id_prod;
			$this->rut_cli=$rut_cli;
			$this->valorTotal=$valorTotal;
			$this->aprobada=$aprobada;
			$this->rut_us=$rut_us;
		}
		//Accesadores

		public function getIdProd(){
			return $this->id_prod;
		}
		public function getRutCli(){
			return $this->rut_cli;
		}
		public function getValorTotal(){
			return $this->valorTotal;
		}
		public function getAprobada(){
			return $this->aprobada;
		}
		public function getRutUs(){
			return $this->rut_us;
		}
		//mutadores
		public function setIdProd($id_prod){
			return $this->id_prod=$id_prod;
		}
		public function setRutCli($rut_cli){
			return $this->rut_cli=$rut_cli;
		}
		public function setValorTotal($valorTotal){
			return $this->valorTotal=$valorTotal;
		}
		public function setAprobada($aprobada){
			return $this->aprobada=$aprobada;
		}
		public function setRutUs($rut_us){
			return $this->rut_us=$rut_us;
		}
		
		//CUSTOMERS
		public function ingresarSoli(){
   		 $objConex=new Conexion();
    	 $sql="INSERT INTO SOLICITUD VALUES(".$this->id_prod.",'".$this->rut_cli."',".$this->valorTotal.",'".$this->aprobada."','".$this->rut_us."')";
     	 $resul=$objConex->generarTransaccion($sql);
    	 return $resul;
   		}
	}
?>
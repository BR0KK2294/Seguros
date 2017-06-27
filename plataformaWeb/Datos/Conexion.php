<?php
class Conexion
{ private $serv="localhost";
  private $usuario="root";
  private $clave="";
  private $bdatos="bdcris";
  private $conex="";
  
  public function __construct(){}
  
  public function abrirConexion()
  { $this->conex=mysql_connect($this->serv,$this->usuario,$this->clave) or die ('ERROR DE UBICACION DE URL :'.mysql_error());
    mysql_select_db($this->bdatos,$this->conex);
	return $this->conex;  
  }
  public function cerrarConexion()
  {  
     mysql_close($this->conex);
  }
  public function generarTransaccion($sql)
  { $this->abrirConexion();
    $resul=mysql_query($sql,$this->conex) or die ('ERROR DE CONEXION/SENTENCIA :'.mysql_error());  
    //$this->cerrarConexion();
	return $resul;
  }
 }
?>
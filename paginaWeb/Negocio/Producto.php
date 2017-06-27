<?php
require_once("../Datos/Conexion.php");
class Producto
{  private $id;
   private $nombre;
   private $precio;
   private $categoria;
 
   public function __construct(){}
   
   public function Producto($id,$nombre,$precio,$categoria)
   { $this->id=$id;
     $this->nombre=$nombre;
	 $this->precio=$precio;
	 $this->categoria=$categoria;
   }
   //ACCESADORES
   public function getId()          {return $this->id;}
   public function getNombre()       {return $this->nombre;}
   public function getPrecio()       {return $this->precio;}
   public function getCategoria()       {return $this->categoria;}

   //MUTANTES
   public function setId($id){$this->id=$id;}
   public function setNombre($nombre){$this->nombre=$nombre;}
   public function setPrecio($precio){$this->precio=$precio;}
   public function setCategoria($categoria){$this->categoria=$categoria;}

   //NEGOCIO
public function ingresarProducto()
   { $objConex=new Conexion();
     $sql="INSERT INTO PRODUCTO VALUES(".$this->id.",'".$this->nombre."',".$this->precio.",".$this->categoria.")";
     $resul=$objConex->generarTransaccion($sql);
     return $resul;
   }
   
public function listarProducto()
   { $objConex=new Conexion();
     $sql="SELECT * FROM PRODUCTO";
     $matrix=$objConex->generarTransaccion($sql);
     return $matrix;
   }   
  } //clase
?>


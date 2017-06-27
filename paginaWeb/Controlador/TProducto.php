<?php
require_once("../Negocio/Producto.php");

if(isset($_POST["id"]) && $_POST["id"]!="" )
{ $id=$_POST["id"];}
if(isset($_POST["nombre"]) && $_POST["nombre"]!="" )
{ $nombre=$_POST["nombre"];}
if(isset($_POST["precio"]) && $_POST["precio"]!="" )
{ $precio=$_POST["precio"];}
if(isset($_POST["categoria"]) && $_POST["categoria"]!="" )
{ $categoria=$_POST["categoria"];}

if(isset($_POST["OK"]) && $_POST["OK"]=="Ingresar")
{ $objProd=new Producto();
  $objProd->Producto($id,$nombre,$precio,$categoria);
  $resul=$objProd->ingresarProducto();         
}
?>
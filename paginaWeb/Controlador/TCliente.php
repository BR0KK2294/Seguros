<?php
require_once("../Negocio/Cliente.php");

if(isset($_POST["rut"]) && $_POST["rut"]!="" ){
  $rut=$_POST["rut"];
}
if(isset($_POST["nombre"]) && $_POST["nombre"]!="" ){
  $nombre=$_POST["nombre"];
}
if(isset($_POST["apellido_mat"]) && $_POST["apellido_mat"]!="" ){
  $apellido_mat=$_POST["apellido_mat"];
}
if(isset($_POST["apellido_pat"]) && $_POST["apellido_pat"]!="" ){
  $apellido_pat=$_POST["apellido_pat"];
}
if(isset($_POST["direccion"]) && $_POST["direccion"]!="" ){
  $direccion=$_POST["direccion"];
}
if(isset($_POST["correo"]) && $_POST["correo"]!="" ){
  $correo=$_POST["correo"];
}
if(isset($_POST["actividad"]) && $_POST["actividad"]!="" ){
  $actividad=$_POST["actividad"];
}
if(isset($_POST["clave"]) && $_POST["clave"]!="" ){
  $clave=$_POST["clave"];
}

if(isset($_POST["OK"]) && $_POST["OK"]=="Ingresar")
{ $objCli=new Cliente();
  $objCli->Cliente($rut,$nombre,$apellido_pat,$apellido_pat,$direccion,$correo,$actividad,$clave);
  $resul=$objCli->ingresarCli();
  // if ($resul!="") {
  //   header("Location:../Vista/Registro.php");
  // }
  // else
  // {
  //   echo "<script language='javascript'>alert('ERROR:DATOS PERDIDOS, NO ALMACENADOS');
  //               window.location='../Vista/GUIProducto.php'</script>";   
  // }      
}

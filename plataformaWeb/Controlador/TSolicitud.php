<?php
require_once("../Negocio/Solicitud.php");

if(isset($_POST["id_prod"]) && $_POST["id_prod"]!="" )
{ $id_prod=$_POST["id_prod"];}
if(isset($_POST["rut_cli"]) && $_POST["rut_cli"]!="" )
{ $rut_cli=$_POST["rut_cli"];}
if(isset($_POST["valorTotal"]) && $_POST["valorTotal"]!="" )
{ $valorTotal=$_POST["valorTotal"];}
if(isset($_POST["aprobada"]) && $_POST["aprobada"]!="" )
{ $aprobada=$_POST["aprobada"];}
if(isset($_POST["rut_us"]) && $_POST["rut_us"]!="" )
{ $rut_us=$_POST["rut_us"];}

if(isset($_POST["OK"]) && $_POST["OK"]=="Ingresar")
{ $objSol=new Solicitud();
  $objSol->Solicitud($id_prod,$rut_cli,$valorTotal,$aprobada,$rut_us);
  $resul=$objSol->ingresarSoli();         
}
?>
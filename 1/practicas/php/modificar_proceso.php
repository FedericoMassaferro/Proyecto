<?php
include("conexion.php");
  $id=$_REQUEST['ID'];
  $nombres=$_REQUEST['nombreuser'];
  $apellidos=$_REQUEST['apellidosuser'];
  $email=$_REQUEST['emailuser'];
  $movil=$_REQUEST['telefonomovil'];
  $pedido=$_REQUEST['pedido'];
  $query=("UPDATE datos SET nombres='$nombres', apellidos='$apellidos', emailuser='$email', telefonomovil='$movil', telefonofijo='$fijo', pedido='$pedido'WHERE id='$id'");
  $resultado=$conexion->query($query);
  if ($resultado) {
      header("Location: mostrar.php");
  }else {
    echo "</br>Insercion no exitosa";
  }
 ?>

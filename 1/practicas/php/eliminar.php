<?php
include("conexion.php");
  $id=$_REQUEST['id_doctor'];
  $query="DELETE FROM doctores WHERE id_doctor='$id'";
  $resultado=$conexion->query($query);
  if ($resultado) {

      die('<script>
  						alert("Se ha eliminado exitosamente");
              location.href="mostrar.php";
  					</script>');

  }
 ?>

<?php
  include "conexion.php";
  $nombre=$_POST['nombre'];
  $pwd=$_POST['pwd'];
  $encriptar=md5($pwd);
  $email=$_POST['email'];
$sql=mysqli_query($link,"INSERT INTO agregar (nombre,pwd,email) VALUES('$nombre','$encriptar','$email')");
echo $sql;
$ejecucion=mysql_query($sql);
if(!$ejecucion){
  echo "<h2>Registro Completo</h2>
        <h5>Gracias por registrarse en nuestra pagina usted es una persona solidaria</h5>
        <a href='Pagina.html'>Solidaridad 2.0</a>";

}else{
  echo "Se detecto un error durante la ejecucion";
}
?>

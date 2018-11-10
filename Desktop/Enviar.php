<?php
$myhost="localhost";
$myuser="root";
$mypwd="";
$mybd="practicas";

$link = mysql_connect($myhost, $myuser, $mypwd) or die("Error " .mysqli_error($link));
mysql_select_db($mybd,$link);
$nombre=$_POST['nombre'];
$pwd=$_POST['pwd'];
$encriptar=md5($pwd);
$email=$_POST['email'];
$sql = "INSERT INTO agregar (nombre, pwd ,email) ".
     "VALUES ('$nombre', '$encriptar', '$email')";
   $result = mysql_query($sql);
if(!$result){
  echo "Se detecto un error durante la ejecucion";

}else{
echo "<h2>Registro Completo</h2>
      <h5>Gracias por registrarse en nuestra pagina usted es una persona solidaria</h5>
      <a href='Pagina.html'>Solidaridad 2.0</a>";
}
?>

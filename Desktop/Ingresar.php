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
	$sql= "SELECT nombre,pwd from agregar WHERE nombre='$nombre' AND pwd='$encriptar'";
	$resultado = mysql_query($sql);

	while ($fila = mysql_fetch_assoc($resultado)) {
		$name = $fila["nombre"];
		$pass = $fila["pwd"];
		if($name == $nombre && $encriptar == $pass){
			echo "<h2>Ingreso Completo</h2>
			      <h5>Gracias por ingresar en nuestra pagina usted es una persona solidaria</h5>
			      <a href='Pagina.html'>Solidaridad 2.0</a>";
			break;
		}
	}

	mysql_free_result($resultado);

	?>


  <?php
		$conexion=mysqli_connect("localhost", "root", "", "clinica")
    if (isset($_POST['botonAzul'])) {
      if (!empty($_POST['DNI'])) {
        $DNI=$_POST['DNI'];
        $sql="SELECT * FROM paciente WHERE DNI = '$DNI'";
        while ($row=mysqli_num_rows($verificar)) {
          $basedata=$row['DNI']
        }
        if ($dni==$basedata) {
          session_start();
          $_session['sess_user'] = $dni;
          header("location:sacarTurno3.html");
        }
      }
      else{
        header("location:sacarTurno.php?error=No es valido")
      }
    }


	?>

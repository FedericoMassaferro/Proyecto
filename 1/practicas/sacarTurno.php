<html lang="en" dir="ltr">
  <head>
    <!-- Start WOWS segunda section -->
      <link rel="stylesheet" type="text/css" href="efecto img/segunda/engine1/style.css" />
      <script type="text/javascript" src="efecto img/segunda/engine1/jquery.js"></script>
    <!-- End WOWS segunda section -->
    <meta charset="utf-8">
    <link rel="stylesheet" href="style/estilos.css">
    <title>Sacar Turno</title>
    <script>
        var bleep = new Audio();
        bleep.src = "sonido/clinica.mp3"
    </script>
  </head>
  <body>
    <header>
      <div class="logofondo">
          <div class="logo">
            <img src="img/logo.png">
          </div>
          <div class="datos">
            <h4>Horarios</h4>
            <h5>Todos los días - 24hs</h5>
          </div>
          <div class="datos">
            <h4>Guardia 24hs</h4>
            <h5>011 4573-5846</h5>
          </div>
          <div class="datos">
            <h4>Ubicacion</h4>
            <h5>Francisco Acuña de Figueroa 1240,CABA</h5>
          </div>
          <hr>
        <div class="nav">
          <a href="index.html" class="distancia">Inicio</a>
          <a href="#servi" class="distancia">Servicios</a>
          <a href="#insta" class="distancia">Instalaciones</a>
          <a href="#ubi" class="distancia">Ubicacion</a>
          <a href="" class="distancia2">Informacion</a>
        </div>
      </div>
    </header><br>
    <div>
      <h1>Solicitar turno</h1>
    </div>
    <br>
    <br>
    <div class="formulario" style="">
      <form method="post" action="validar.php">
        <div>
          <input type="text" name="DNI" class="form-control" placeholder="Ingrese DNI" minlength="8" maxlength="8" minle>
        </div>
		<div>

		</div>
    <div id="botongrande">
      <button name="botonAzul" type="submit"> <a  onmousedown="bleep.play()">Sacar Turno</a></button>
    </div>
    <div>
      <ol>
        <li>Haga click en "Sacar Turno".</li>
        <li>Complete sus datos.</li>
        <li>Seleccione dia y hora.</li>
      </ol>
	  <div id="seccion">
      <p>Al finalizar, podrá enviar la constancia de turno al correo electrónico registrado o descargarla como PDF.
      </p>
      <p>Es muy importante que complete correctamente sus datos personales y consulte la documentación requerida para cada trámite en la cartilla correspondiente.
      </p>
	  </div>
    </div>
      <?php
      if(isset($_get['error'])){
        echo"<script>alert('".$_get['error']."')</script>";
      }
      ?>
  <!--         <select>
				<option>
				Alergología
				</option>
				<option>
				Cardiología
				</option>
				<option>
				Clinica Medica
				</option>
				<option>
        Dermatología
				</option>
				<option>
				Endocrinología
				</option>
				<option>
				Ginecología
				</option>
				<option>
        Hipertiroidismo
				</option>
				<option>
				Neurología
				</option>
        <option>
				Nutrición
				</option>
				<option>
				Odontología
				</option>
        <option>
				Oncología
				</option>
				<option>
        Otorrinolaringología
				</option>
				<option>
				Pediatría
				</option>
				<option>
        Psicologo
				</option>
				<option>
				Psiquiatría
				</option>
				<option>
        Radiodiagnóstico
				</option>
				<option>
				Reaumatología
				</option>
				<option>
				Traumatología
				</option>
				<option>
        Urología
				</option>
				<option selected="selected">
        Seleccione especialidad del doctor
				</option>
			</select>
-->
</body>
</html>

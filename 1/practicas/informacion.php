<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="shortcut icon" type="image/x-ico" href="img/logo.png">
    <meta charset="utf-8">
    <link rel="stylesheet" href="style/estilos.css">
    <link rel="stylesheet" href="style/mostrar.css">
    <link rel="stylesheet" href="icono/style.css">
    <script src="nav.js"></script>
    <title>Clinica del sur</title>
  </head>
  <body>
    <header>
      <div class="logofondo">
          <div class="logo">
            <img src="img/logo.png">
          </div>
          <div class="datos">
            <h4><span class="icon-clock"></span> Horarios</h4>
            <h5>Todos los días - 24hs</h5>
          </div>
          <div class="datos">
            <h4><span class="icon-plus"></span> Guardia 24hs</h4>
            <h5>011 4573-5846</h5>
          </div>
          <div class="datos">
            <h4><span class="icon-location"></span> Ubicacion</h4>
            <h5>Francisco Acuña de Figueroa 1240,CABA</h5>
          </div>
          <br>  <hr>
          <nav>
            <div class="nav">
              <ul >
                <li class="distancia"><a href="index.html"><h4><span class="icon-home"></span> Inicio</h4></a></li>
                <li class="distancia"><a href="index.html#servi"><h4><span class="icon-users"></span> Servicios</h4></a></li>
                <li class="distancia"><a href="index.html#insta"><h4><span class="icon-office"></span> Instalaciones</h4></a></li>
                <li class="distancia"><a href="index.html#ubi"><h4><span class="icon-location"></span> Ubicacion</h4></a></li>
                <li class="distancia"><a href="#"><h4><span class="icon-file-text2"></span> Informacion</h4></a></li>
                <li class="distancia"><a href="sacarTurno.php"><h4><span class="icon-user-plus"></span> Sacar turno</h4></a></li>
              </ul>
            </div>
          </nav>
      </div>
    </header><br>

    <table>
      <thead>
        <tr>
            <th colspan="7" class="lista">Nuestros profecionales</th>
        </tr>
      </thead>
      <tbody>
        <tr>
        <td>Nombre</td>
          <td>Apellido</td>
          <td>Especialidad</td>
          <td>Horarios</td>
          <td>Dias</td>
        </tr>
        <?php
          include("conexion.php");
          $query=("SELECT * FROM pagina") or die("<h2>Error Cargando los datos</h2>");
          $resultado = $conexion->query($query);
          while($row=$resultado->fetch_assoc()){
            ?>
        <tr>
          <td><?php echo $row['nombre']; ?></td>
          <td><?php echo $row['apellido']; ?></td>
          <td><?php echo $row['especialidad']; ?></td>
          <td><?php echo $row['horarios']; ?></td>
          <td><?php echo $row['dias']; ?></td>
        </tr>
        <?php
      }
    ?>
      </tbody>
    </table><br>
    <div class="text"><br>
        <h2>Prepagas</h2>

          <div class="Prepagas">
            <img src="img/prepagas1.jpg" class="cup_">
          </div>

          <h2>Obras sociales y asociaciones</h2>
          <div class="Prepagas">
            <img src="img/asociaciones.jpg" class="cup_">
          </div>
</body>
</html>

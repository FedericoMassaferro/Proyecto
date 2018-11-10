
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style/mostrar.css">
    <title></title>

    <script language="JavaScript">

function aviso(url){
if (!confirm("ALERTA!! va a proceder a eliminar este registro, si desea eliminarlo de click en ACEPTAR de lo contrario de click en CANCELAR.")) {
return false;
}
else {
document.location = url;
return true;
}
}
</script>
  </head>
  <body  background="img/fondo2.jpg">

    <table>
      <thead>
        <tr>
          <th colspan="1" class="transparent"><a href="nuevo.html">Nuevo</a></th>
          <th colspan="6" style="font-size: 25px; text-align: center;">Lista de Doctores</th>
          <th colspan="1" class="Salir" style="text-align: right;"><a href="index.html">Salir</a></th>

        </tr>
      </thead>
      <tbody>
        <tr>
          <td style="text-align: center;">ID</td>
          <td style="text-align: center;">Apellido</td>
          <td style="text-align: center;">Nombre</td>
          <td style="text-align: center;">Especialidad</td>
          <td style="text-align: center;">Horarios</td>
          <td style="text-align: center;">Dias</td>
          <td style="text-align: center;">Modificar</td>
          <td style="text-align: center;">Eliminar</td>
        </tr>
        <?php
          include("conexion.php");
          $query=("SELECT * FROM doctores") or die("<h2>Error Cargando los datos</h2>");
          $resultado = $conexion->query($query);
          while($row=$resultado->fetch_assoc()){
            ?>
        <tr>
          <td style="text-align: center;"><?php echo $row['id_doctor'] ?></td>
          <td style="text-align: center;"><?php echo $row['apellido'] ?></td>
          <td style="text-align: center;"><?php echo $row['nombre'] ?></td>
          <td style="text-align: center;"><?php echo $row['especialidad'] ?></td>
          <td style="text-align: center;"><?php echo $row['horarios'] ?></td>
          <td style="text-align: center;"><?php echo $row['dias'] ?></td>
          <td style="text-align: center;"><a href="modificar.php?ID=<?php echo $row['id_doctor'];?>" class="modificarblue">Modificar</a></td>
          <td style="text-align: center;">
          <a href="javascript:;" class="eliminar" onclick="aviso('eliminar.php?id_doctor=<?php echo $row['id_doctor'];?>'); return false;">Eliminar</a></td>
        </tr>
        <?php
      }
    ?>
      </tbody>
    </table>
  </body>
</html>

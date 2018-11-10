
<html>
<head>
<link rel="stylesheet" href="style/nuevo.css">
<link rel="stylesheet" href="style/modificar.css">

<title>Muestra oculta</title>


<body background="img/fondo2.jpg" >
<?php
  $id=$_REQUEST['ID'];
  include("conexion.php");
  $query=("SELECT * FROM form WHERE ID='$id'") or die("<h2>Error Cargando los datos</h2>");
  $resultado = $conexion->query($query);
  $row=$resultado->fetch_assoc();
    ?>

     <form class="formulario" action="registromodificar.php" method="post">

       <h1 class="formulario_titulo">Complete el Formulario</h1>
       <div id="close">
         <a href="mostrar.php">
          <img src="img/salir.png" class="x">
         </a>
       </div>
       <script>
           function validar(e) {
           tecla = (document.all) ? e.keyCode : e.which;
           if (tecla==8) return true; //Tecla de retroceso (para poder borrar)
           // dejar la línea de patron que se necesite y borrar el resto
           patron =/[A-Za-z]/; // Solo acepta letras
           te = String.fromCharCode(tecla);
           return patron.test(te);
           }
       </script>
       <label class="formulario_label1" for="nombre">Nombre</label>
       <input class="formulario_input" type="text" name="nombreuser" value="<?php echo $row['Nombre']; ?>" id="nombre" autofocus  onkeypress="return validar(event)" required autocomplete="off"/><br>
       <label class="formulario_label1" for="apellido">Apellido</label>
       <input class="formulario_input" type="text" name="apellidosuser" value="<?php echo $row['Apellido']; ?>" id="apellido" onkeypress="return validar(event)" required autocomplete="off"/><br>
       <label class="formulario_label1" for="email">Email</label>
       <input class="formulario_input" type="email" name="emailuser" id="email" value="<?php echo $row['Email']; ?>" required autocomplete="off"/><br>
       <label class="formulario_label1" for="pass">Repita su email</label>
       <input class="formulario_input" type="email" name="pass" id="pass" value="<?php echo $row['Email']; ?>" required autocomplete="off"/><br>
       <script>
               function valida(e){
               tecla = (document.all) ? e.keyCode : e.which;

               //Tecla de retroceso para borrar, siempre la permite
               if (tecla==8){
                   return true;
               }

               // Patron de entrada, en este caso solo acepta numeros
               patron =/[0-9]/;
               tecla_final = String.fromCharCode(tecla);
               return patron.test(tecla_final);
               }
     </script>
       <label class="formulario_label1" for="tel">Telefono</label>
       <input class="formulario_input" type="text" name="telefonofijo" id="tel" value="<?php echo $row['Telefono'];?>" onkeypress="return valida(event)" maxlength="14" minlength="8" required autocomplete="off"/><br>
       <label class="area_label">Ingrese su pedido</label><br><br>
       <textarea class="textarea" name="pedido"  required autocomplete="off"/><?php echo $row['pedido']; ?></textarea><br><br>
       <input type="submit" value="  Registrarme  "class="tab active" style='cursor: pointer;'>
       <input type="reset" value="  Restablecer  " class="tab" style='cursor: pointer;'>
     </form><br><br>
     <script src="modificar.js"></script>
</body>
</html>

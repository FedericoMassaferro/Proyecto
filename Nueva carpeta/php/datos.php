<?php
include "conexion.php";
    
    if(isset($_POST['boton'])){
        
        $comida=$_POST["c"];
        $abrigo=$_POST["a"];
        $emergencia=$_POST["e"];
        
        
        $sql="INSERT INTO datos(Comida, abrigo, emergencia)VALUES(".$comida.",".$abrigo.",".$emergencia.")";
            $verificar= mysqli_query($link,$sql);
          
            $numrows=mysqli_num_rows($verificar);
	       if($numrows==0){
               
             header("Location: ../pagina3.php");
            }
           else{
               header("Location:../pagina2.php?error=Ocurrió un error inesperado");
           }
        
    }else{
            header("Location:../pagina2.php?error=Ocurrió un error inesperado");
        }
?>
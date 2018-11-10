<?php

include "conexion.php";

    if(isset($_POST["nombre"]) && isset($_POST["pwd"]) && isset($_POST["email"])){
        
    
    
        $Nom=$_POST["nombre"];
        $Con=$_POST["pwd"];
        $Cor=$_POST["email"];

    $verificar=mysqli_query($link, "SELECT * FROM registro WHERE correo='".$Cor."'");    
    
    $numrows=mysqli_num_rows($verificar);
	if($numrows==0){
    $sql = "INSERT INTO registro(Nombre_usuario, Clave, Correo)VALUES('".$Nom."','".$Con."','".$Cor."')";
     echo $sql;   
	$resultado=mysqli_query($link , $sql);


	if($resultado){
        echo"Te registraste correctamente.";
}else
    {
        echo"<script>alert('Fallo.')</script>";
    }
}else
    {
        echo"<script>alert('Este usuario ya existe.')</script>";
    }
}
else{
    echo "<script>alert('No se ha introducido algún campo!!!');</script>";
}


          
    if (mysqli_query($link,$sql))
      {
        echo "<h2> Se cargaron correctamente los datos</h2>";
        header("Location:../pagina4.php");
} 
    else {
    echo "Error: " . $sql . "<br>" . mysqli_error($link);
}
    mysqli_close($link);



?>
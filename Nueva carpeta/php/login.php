<?php
    include "conexion.php";
    
    if(isset($_POST['boton'])){
        
        if(!empty($_POST["correonick"]) && !empty($_POST["pwd"]))
        {
         
            $Nickname=$_POST['correonick'];
            $password=$_POST['pwd'];
            $result_login =mysqli_query($link , "SELECT * FROM registro WHERE Nombre_usuario='".$Nickname."' AND clave='".$password."'");
                        
            
            while($row_user = mysqli_fetch_array($result_login)){
                
                   $dbusername=$row_user['Nombre_usuario'];
                   $dbpassword=$row_user['Clave'];
    }
            
                if($Nickname == $dbusername && $password == $dbpassword)
                {
                   session_start();
                   $_SESSION['sess_user']=$Nickname;

                   header("Location:../pagina2.php");    
                }
                
            } else {
            header("Location:../pagina4.php?error=El mail o la contraseña no coinciden");
            
	       }
 
}         
    
    
?>
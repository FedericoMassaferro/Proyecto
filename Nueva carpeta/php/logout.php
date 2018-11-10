<?php
include"conexion.php";
session_start();
unset($_SESSION['sess_user']);
session_destroy();
header("location:pagina4.php");
?>

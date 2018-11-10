<?php
$myhost="localhost";
$myuser="root";
$mypwd="";
$mybd="practicas";

$link = mysqli_connect($myhost, $myuser, $mypwd, $mybd) or die("Error " .mysqli_error($link));
?>
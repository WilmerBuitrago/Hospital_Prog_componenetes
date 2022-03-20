<?php
function conectar(){


// datos locales

$host="localhost"; //el nombre del servidor
$user="root"; // el usuario de mysql 
$pass="";// password
$dbname="hos";// el nombre de la BD
/// relizamos la conexion a la BD


$link=mysqli_connect($host,$user,$pass) 
  or die("ERROR al conectar la BD".mysqli_error($link));
  //seleccionar la BD
  mysqli_select_db($link,$dbname) 
  or die("ERROR al seleccionar la BD".mysqli_error($link));
return $link;

}







?>
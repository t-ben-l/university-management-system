<?php 


session_start();



$id = $_SESSION["id"] ;
$name = $_SESSION["username"] ;

 


echo $id ." - ". $name;

?>
<?php
require_once "conexion.php";


 
 if (isset($_POST['data_encuesta']) && isset($_POST['id_usuario']) && isset($_POST['id_tema'])) {
    $datos = json_decode($_POST['data_encuesta']);
    $id_tema=$_POST['id_tema'];
$id_usuario=$_POST['id_usuario'];
    foreach ($datos as $dato=>$di) {
       $sql="INSERT INTO `respuestaquiz`( `id_opcion`, `bandera`, `id_pregunta`, `id_tema`, `id_usuario`) VALUES ('$di->value','$di->bandera','$di->id_pregunta','$id_tema','$id_usuario')";

$result=mysqli_query($con,$sql);

    }

     foreach ($datos as $valor=>$v) {
           echo  $v->value;
           echo $v->id_pregunta;

    }
  
} 
?>
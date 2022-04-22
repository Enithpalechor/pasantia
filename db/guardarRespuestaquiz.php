<?php
require_once "conexion.php";
session_start();

 
 if (isset($_POST['data_encuesta']) && isset($_POST['id_usuario']) && isset($_POST['id_tema'])) {
    $datos = json_decode($_POST['data_encuesta']);
    $id_tema=$_POST['id_tema'];
    $correctas=0;
    $incorrectas=0;
$id_usuario=$_SESSION['id_usuario'];
    foreach ($datos as $dato=>$di) {
       $sql="INSERT INTO `respuestaquiz`( `id_opcion`, `bandera`, `id_pregunta`, `id_tema`, `id_usuario`) VALUES ('$di->value','$di->bandera','$di->id_pregunta','$id_tema','$id_usuario')";
if ($di->bandera=='correcto') {
	# code...
	$correctas=$correctas+1;
}
else{$incorrectas=$incorrectas+1;}
$result=mysqli_query($con,$sql);

    }
$sql="INSERT INTO `resultadosquiz`( `correctas`, `incorrectas`, `id_tema`,id_usuario) VALUES ('$correctas','$incorrectas','$id_tema','$id_usuario')";
$result=mysqli_query($con,$sql);

     foreach ($datos as $valor=>$v) {
           echo  $v->value;
           echo $v->id_pregunta;

    }
  
} 
?>
<?php if(isset($_GET["aciertos"])&&isset($_GET["desaciertos"])) {
session_start();
require_once "conexion.php";
$aciertos=$_GET["aciertos"];
$desacie=$_GET["desaciertos"];
$tiem=$_GET["tiempo"];
$id_usuario=$_SESSION["id_usuario"];
$sql="INSERT INTO `resultados`( `aciertos`, `desaciertos`, `id_tema`, `tiempo`, `id_usuario`) VALUES ('$aciertos','$desacie','1','$tiem','$id_usuario')";
$result=mysqli_query($con,$sql);
echo 1;
}
if(isset($_GET["estado"])) {
session_start();
require_once "conexion.php";
$estado=$_GET["estado"];
$id_usuario=$_SESSION["id_usuario"];
$sql="INSERT INTO `juego`( `estado`,    `id_usuario`) 
VALUES ('$estado','$id_usuario')";
$result=mysqli_query($con,$sql);
echo 1;
}
 ?> 
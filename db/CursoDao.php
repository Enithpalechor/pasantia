<?php if (isset($_GET["nombre_curso"])&&isset($_GET["crear"])) {    
    session_start();
    require_once "conexion.php";
    $nombre_curso = $_GET["nombre_curso"];
    $sql = "INSERT INTO `curso`(`nombre_curso`) VALUES ('$nombre_curso')";
    mysqli_query($con, $sql);

    $sql2 = "SELECT max(id_curso) maxi FROM curso;";
    $result2 = mysqli_query($con, $sql2);
    $curso_data = mysqli_fetch_assoc($result2);
    echo $curso_data['maxi'];;
}


if (isset($_GET["nombre_curso"]) && isset($_GET["id_curso"]) && isset($_GET["editar"])) {
    session_start();
    require_once "conexion.php";
    $nombre_curso = $_GET["nombre_curso"];
    $sql = "UPDATE `curso` SET `nombre_curso`='$nombre_curso' WHERE id_curso=" . $_GET["id_curso"];
    $result=mysqli_query($con, $sql);
    echo "hola como estas";
}

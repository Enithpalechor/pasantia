<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Business Casual - Start Bootstrap Theme</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <?php if (isset($_SESSION["bandera"])): ?>
 <script type=""> window.location.href = "paginaprincipal.php";</script>;     
                       
 <?php endif ?>
        <header>
            <h1 class="site-heading text-center text-faded d-none d-lg-block">
                
                <span class="site-heading-lower">Hábitos y Buenas Prácticas  de Seguridad </span>
            </h1>
        </header>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
            <div class="container">
                <a class="navbar-brand text-uppercase fw-bold d-lg-none" href="index.html">Start Bootstrap</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto">
                          <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="index.php">Inicio</a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="about.php">Acerca de</a></li>
                        
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="store.php">Contacto</a></li>
                           <?php if (isset($_SESSION["bandera"])): ?>
                            <?php echo ($_SESSION["bandera"]); ?>
                              <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="logout.php">Finalizar Sesión </a></li>  
                        <?php else: ?>
                          <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="login.php">Ingresar</a></li>    
                        <?php endif ?>
                          </ul>
      
                </div>
            </div>
        </nav>
        <section class="page-section about-heading">
            <div class="container">
                
                
    <div class="d-flex justify-content-center align-items-center flex-column">
        
       
        <div class="card">
            <div class="card-header " style="background-color:#D4DBF9;color:#2A5890;">
              <div class="row">
                <div class="col"><h6>Bienvenidos</h6> <label>Inicia sesión para ingresar</label></div>

                <div class="col row"><div class="col"></div><div class="col"><img style="width: 100px;height: 100px;" src="assets/img/seguridad3.png"></div></div>
              </div>
                
                
            </div>
            <div class="card-body">
                <form action="" method="post">

                    <div class="form-group m-2">
                        <div class="mb-3 row">
                            <label for="" class="col-auto col-form-label">Usuario</label>
                            <input type="text" class="form-control" max="" placeholder="Digite su usuario"
                                name="nombre_de_usuario" maxlength="40" required>
                        </div>
                    </div>
                       <div class="form-group m-2">
                        <div class="mb-3 row">
                            <label for="" class="col-auto col-form-label">Contraseña</label>
                            <input type="password" class="form-control" max="" placeholder="Digite su Contraseña"
                                name="password" maxlength="40" required>
                        </div>

                    </div>
                     
                       
                   
                    <div class="d-grid gap-2">
                        <button type="submit" name="enviar" class="btn "style="background-color:#3452E1;color: white  ">Ingresar</button>
                    </div>
                    <center><a href="register.php">Registrarse</a></center>
                  
                </form>
            </div>
           
        </div>
    </div>
            </div>
        </section>
        <footer class="footer text-faded text-center py-5">
            <div class="container"><p class="m-0 small">Copyright &copy; Your Website 2021</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
<?php   

if(isset($_POST["enviar"])){ 
  $nombre =$_POST["nombre_de_usuario"];
  $password=$_POST["password"];
  require_once "./db/conexion.php";
  $sql = "SELECT * FROM usuarios WHERE nombre_usuario = '$nombre' AND password = '$password'";
    $result = mysqli_query($con,$sql);
    $num_rows = mysqli_num_rows($result);
    if($num_rows>0){
      $user_data = mysqli_fetch_assoc($result);
        $nombres = $user_data['nombres'];
        $_SESSION["nombres"]=$user_data["nombres"];
        $_SESSION["apellidos"]=$user_data["apellidos"];
        $_SESSION["correo"]=$user_data["correo"];
        $_SESSION["institucion"]=$user_data["institucion"];
        $_SESSION["semestre"]=$user_data["semestre"];
        $_SESSION["nombre_usuario"]=$user_data["nombre_usuario"];
        $_SESSION["bandera"]=true;
         $_SESSION["id_usuario"]=$user_data["id"];
      // header("Location: paginaprincipal.php");
         ?>
        <script type=""> window.location.href = "paginaprincipal.php";</script>;
<?php  
    }
    else {

      # code...
    
 ?>
 <script type="">alert("usuario o Contraseña incorrectos")</script>
<?php }}  ?>
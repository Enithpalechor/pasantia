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
 <script type=""> window.location.href = "paginaprincipal.php";
 alert(0
    )
</script>;     
                       
 <?php endif ?>
        <header>
            <h1 class="site-heading text-center text-faded d-none d-lg-block">
                <span class="site-heading-upper text-primary mb-3">A Free Bootstrap Business Theme</span>
                <span class="site-heading-lower">Business Casual</span>
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
                <div class="row">
    <div class="col-2"></div>
    <div class="col-8">
        
       
        <div class="card">
            <div class="card-header" style="background-color:#D4DBF9;color: #2A5890; ">
                <h3>Resgistro de Usuario</h3>
            </div>
            <div class="card-body">
                <form action="" method="post">
                <div class="row">
                    <div class="form-group m-2 col">
                        <div class="mb-3 row">
                            <label for="" class="col-auto col-form-label">Nombres</label>
                            <input type="text" class="form-control" max="" placeholder="Digite su nombre de usuario"
                                name="nombre_de_usuario" maxlength="40" required>
                        </div>
                    </div>
                       <div class="form-group m-2 col">
                        <div class="mb-3 row">
                            <label for="" class="col-auto col-form-label">Apellidos</label>
                            <input type="text" class="form-control" max="" placeholder="Digite sus Apellidos"
                                name="apellidos" maxlength="40" required>
                        </div>

                    </div>
                   </div>
                   <div class="row">
                       <div class="form-group m-2 col">
                        <div class="mb-3 row">
                            <label for="" class="col-auto col-form-label">Correo</label>
                            <input type="text" class="form-control" max="" placeholder="su correo"
                                name="correo" maxlength="40" required>
                        </div>
                    </div>

                       <div class="form-group m-2 col">
                        <div class="mb-3 row">
                            <label for="" class="col-auto col-form-label">Semestre</label>
                           <select name="semestre" required="true" class="form-select" aria-label="Default select example">
  <option selected>Seleccione Semestre</option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
  <option value="8">8</option>
  <option value="9">9</option>
  <option value="10">10</option>
</select>
                        </div>
                    </div>
                    </div>
                    <div class="row">
                       <div class="form-group m-2 col">
                        <div class="mb-3 row">
                            <label for="" class="col-auto col-form-label">Institucion</label>
                            <input type="text" class="form-control" max="" placeholder="Institucion"
                                name="institucion" maxlength="40" required>
                        </div>
                    </div>
                     <div class="form-group m-2 col">
                        <div class="mb-3 row">
                            <label for="" class="col-auto col-form-label">usuario</label>
                            <input type="text" class="form-control" max="" placeholder="Institucion"
                                name="usuario" maxlength="40" required>
                        </div>
                    </div>
                    </div>
                    <div class="row">
                     <div class="form-group m-2 col-6">
                        <div class="mb-3 row">
                            <label for="" class="col-auto col-form-label">password</label>
                            <input type="password" class="form-control" max="" placeholder="Institucion"
                                name="password" maxlength="40" required>
                        </div>
                    </div>
                   </div>
                    <div class="d-grid gap-2 d-flex justify-content-center align-items-center flex-column">
                        <button type="submit" name="enviar" class="btn btn-primary " style="width: 50%;">Resgistrar</button>
                    </div>
                </form>
            </div>
           </div>
        </div>
        <div class="col-2"></div>
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
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>



    </body>
</html>
<?php 

if(isset($_POST["enviar"])){ 
$nombre=$_POST["nombre_de_usuario"];
$apellido=$_POST["apellidos"];
$correo=$_POST["correo"];
$institucion=$_POST["institucion"];
$semestre=$_POST["semestre"];
$usuario=$_POST["usuario"];
$password=$_POST["password"];
require_once "./db/conexion.php";
$sql="INSERT INTO `Usuarios`( `nombres`, `apellidos`, `correo`, `institucion`, `semestre`,nombre_usuario,password) VALUES ('$nombre','$apellido','$correo','$institucion','$semestre','$usuario','$password')";
$result=mysqli_query($con,$sql);



 ?>
 <script type=""> 

Swal.fire({
  title: 'success!',
  text: 'Su registro se ha realizado satisfactoriamente.',
 
  imageWidth: 400,
  imageHeight: 200,
  imageAlt: 'Custom image',
})
setTimeout(function(){
    window.location.href="login.php"
}, 4000);

</script>
 <?php  } ?>

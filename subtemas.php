<?php session_start(); ?>
<?php
$id = $_GET["id_tema"] ?>
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

<<<<<<< HEAD
                <h5 class="card-title">Juega y Aprende <?php $contador++; ?></h5>
              </div>
           </div>
         </div>
        </a>    </div>
        
        <?php if ($contador%2!=0): ?>
    <div class="col-4"></div>  
    <?php endif ?>
        <div class="col-4"> <a style="text-decoration: none;" href="resultadosexamen.php?id_tema=<?php    echo $_GET['id_tema'] ?>&id_usuario=<?php echo $_SESSION['id_usuario'] ?>">
      <div class="card tarjetas" style="background:#F6E1C6;color:black;padding: 1px;   border-radius: 5px;   
     margin-bottom: 5px;font-size: 16px">         
            <div class="row">
              <div class="col">
                <img src="" style="width: 100px;height: 100px;">
              </div>
              <div class="col">
=======
<body>
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
          <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="paginaprincipal.php">Página Principal </a></li>
          <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="about.php">Acerca de</a></li>
>>>>>>> 74eefa74fcce470bc28f120398b22411a0020f75

          <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="store.php">Contacto</a></li>
          <?php if (isset($_SESSION["bandera"])) : ?>
            <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="login.php">Finalizar Sesión </a></li>
          <?php else : ?>
            <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="login.php">Ingresar</a></li>
          <?php endif ?>
        </ul>

      </div>
    </div>
  </nav>
  <section class="page-section about-heading">
    <div class="container">
      <main role="main" class="container">
        <div class="jumbotron">

          <div class="row">
            <?php
            require_once "./db/conexion.php";
            $sql = "SELECT * FROM subtemas where id_tema=$id";
            $result = mysqli_query($con, $sql);
            $contador = 0;
            while ($data = mysqli_fetch_assoc($result)) {
              $contador++;
            ?>

              <div class="col-4">
                <a style="text-decoration: none;" href="contenido.php?id_subtema=<?php echo $data["id_subtema"] ?>&nombre_subtema=<?php echo $data["nombre_subtema"] ?>">
                  <div class="card tarjetas" style="background:#F6E1C6;color:black;padding: 1px;   border-radius: 5px;   
     margin-bottom: 5px;font-size: 16px;">
                    <div class="row">
                      <div class="col">
                        <img src="<?php echo $data["imagen_subtema"] ?>" style="width: 100px;height: 100px;">
                      </div>
                      <div class="col">

                        <span><?php echo $data["nombre_subtema"]; ?></span>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <?php if ($contador % 2 != 0) : ?>
                <div class="col-4"></div>
              <?php endif ?>


            <?php
            }
            ?>
            <div class="col-4"> <a style="text-decoration: none;" href="resultadosjuego.php?id_tema=<?php echo $_GET['id_tema'] ?>">
                <div class="card tarjetas" style="background:#F6E1C6;color:black;padding: 1px;   border-radius: 5px;   
     margin-bottom: 5px;font-size: 16px">
                  <div class="row">
                    <div class="col">
                      <img src="" style="width: 100px;height: 100px;">
                    </div>
                    <div class="col">

                      <h5 class="card-title">Juega y Aprende <?php $contador++; ?></h5>
                    </div>
                  </div>
                </div>
              </a> </div>

            <?php if ($contador % 2 != 0) : ?>
              <div class="col-4"></div>
            <?php endif ?>
            <div class="col-4"> <a style="text-decoration: none;" href="resultadosjuego.php?id_tema=<?php echo $_GET['id_tema'] ?>">
                <div class="card tarjetas" style="background:#F6E1C6;color:black;padding: 1px;   border-radius: 5px;   
     margin-bottom: 5px;font-size: 16px">
                  <div class="row">
                    <div class="col">
                      <img src="" style="width: 100px;height: 100px;">
                    </div>
                    <div class="col">

                      <h5 class="card-title">Evalúate </h5>
                    </div>
                  </div>
                </div>
              </a> </div>
          </div>

        </div>
      </main>
    </div>
  </section>
  <footer class="footer text-faded text-center py-5">
    <div class="container">
      <p class="m-0 small">Copyright &copy; Your Website 2021</p>
    </div>
  </footer>
  <!-- Bootstrap core JS-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Core theme JS-->
  <script src="js/scripts.js"></script>
</body>

</html>
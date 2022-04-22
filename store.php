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
        <header>
            <h1 class="site-heading text-center text-faded d-none d-lg-block">
                 <span class="site-heading-lower">Hábitos y Buenas Practicas  de Seguridad </span>
                
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
                         <?php if (isset($_SESSION["bandera"])): ?>
                              <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="paginaprincipal.php">Página principal </a></li>  
                           
                        <?php endif ?>
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
        <section class="page-section cta">
            <div class="container">
                <div class="row">
                    <div class="col-xl-9 mx-auto">
                        <div class="cta-inner bg-faded text-center rounded">
                            <h2 class="section-heading mb-5">
                                
                                <span class="section-heading-lower">Contactos</span>
                            </h2>
                            <ul class="list-unstyled list-hours mb-5 text-left mx-auto">
                                <li class="list-unstyled-item list-hours-item d-flex">
                                    Teléfono
                                    <span class="ms-auto">3203737333</span>
                                </li>
                                <li class="list-unstyled-item list-hours-item d-flex">
                                    Correo  Electrónico 
                                    <span class="ms-auto">enihpalechor@gmil.com</span>
                                </li>
                                <li class="list-unstyled-item list-hours-item d-flex">
                                    Direccion
                                    <span class="ms-auto">Popayán Cauca </span>
                                </li>
                               
                            </ul>
                           
                            <p class="mb-0">
                                <small><em>Call Anytime</em></small>
                                <br />
                                (320) 3737333
                            </p>
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

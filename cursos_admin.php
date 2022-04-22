<?php
session_start(); ?>


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
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

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
                    <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="config_admin.php">Configuracion</a></li>

                    <?php if (isset($_SESSION["bandera"])) : ?>

                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="logout.php">Finalizar Sesión </a></li>
                    <?php else : ?>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="login.php">Ingresar</a></li>
                    <?php endif ?>
                </ul>

            </div>
        </div>
    </nav>

    <section class="page-section about-heading">
        <!-- Button trigger modal -->
        <div class="row">
            <div class="col"></div>
            <div class="col">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                    Crear nuevo curso
                </button>
            </div>
            <div class="col"></div>

            <div class="col"></div>
        </div>


        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Registro de curso</h5>

                    </div>
                    <div class="modal-body">
                        <input type="text" id="id_curso" hidden>

                        <div class="row">
                            <div class="form-group m-2 col">
                                <div class="mb-3 row">
                                    <label for="" class="col-auto col-form-label">Nombre Curso</label>
                                    <input type="text" class="form-control" max="" placeholder="Digite nombre del curso" id="nombre_curso" name="nombre_curso" maxlength="40" required>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-primary" onclick="registrar()">Guardar</button>
                    </div>
                </div>
            </div>
        </div>
        <br>

        <div class="container">
            <div class="row">
                <div class="col-xl-9 mx-auto">
                    <div class="cta-inner bg-faded text-center rounded">
                        <h2 class="section-heading mb-5">

                            <span class="section-heading-lower">Cursos</span>
                        </h2>
                        <div id="tablacursos"></div>
                    </div>
                </div>
            </div>
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

<script type="text/javascript">
    var flag = 0;
    $(document).ready(function() {

        //es para aparecer en el div
        $('#tablacursos').load('componentes/listCursosComponentes.php');

    });

    function registrar() {
        nombre_curso = document.getElementById('nombre_curso').value;
        console.log(nombre_curso)
        if (nombre_curso == '' || nombre_curso == null) {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'No coinciden las contraseñas!',
            })
        } else {
            console.log("oll")
            document.getElementById('nombre_curso').value = ''
            if (flag == 1) {
                id_curso= document.getElementById('id_curso').value ;
                axios
                    .post("db/CursoDao.php?nombre_curso=" + nombre_curso + "&id_curso=" + id_curso + "&editar=true")
                    .then(function(res) {
                        console.log(res)
                        Swal.fire({
                            icon: 'success',
                            title: 'Exitosamente...',
                            text: 'Actualizacion correctamente!',
                        })
                        setTimeout(function() {
                            window.location.href = "";
                        }, 2000);
                    })
                    .catch(function(err) {
                        console.log(err);
                    })
                    .then(function() {});
            }else{
                guardar(nombre_curso);
            }
            
        }
    }



    function guardar(nombre_curso) {
        axios
            .post("db/CursoDao.php?nombre_curso=" + nombre_curso+"&crear=true")
            .then(function(res) {
                console.log(res.data)
                Swal.fire({
                    icon: 'success',
                    title: 'Exitosamente...',
                    text: 'Agregado correcatmente!',
                })
                setTimeout(function() {
                    window.location.href = "agregartemas.php?id_curso=" + res.data;
                }, 2000);
            })
            .catch(function(err) {
                console.log(err);
            })
            .then(function() {});

        return false;
    }


    function obtener(nombre, id) {
        flag = 1;
        document.getElementById('nombre_curso').value = nombre;
        document.getElementById('id_curso').value = id;
        $('#exampleModal').modal('show')

    }
</script>

<?php
if ($_SESSION["tipo_usuario"] != 1) {
?>
    <script type=""> window.location.href = "paginaprincipal.php";</script>;

<?php
}
?>
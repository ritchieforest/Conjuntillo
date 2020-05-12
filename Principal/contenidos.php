<?php 
session_start();
if ($_SESSION['active']!=true) {
    header('location: index.php');
}

 ?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Services - Brand</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/Article-List.css">
    <link rel="stylesheet" href="assets/css/Dark-NavBar-1.css">
    <link rel="stylesheet" href="assets/css/Dark-NavBar-2.css">
    <link rel="stylesheet" href="assets/css/Dark-NavBar.css">
    <link rel="stylesheet" href="assets/css/Header-Blue.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="assets/css/smoothproducts.css">
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar">
        <div class="container"><a class="navbar-brand logo" href="#">Conjuntillo</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse"
                id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="index.php">Inicio</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="login-alumno.html">Soy alumno</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="login-profesor.php">Soy docente</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <main class="page service-page">
        <section class="clean-block clean-services dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Contenidos</h2>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-4">
                        <div class="card"><img class="card-img-top w-100 d-block" src="assets/img/scenery/introduccion.gif">
                            <div class="card-body">
                                <h4 class="card-title">Introduccion</h4>
                            </div>
                            <div><a class="btn btn-outline-primary btn-sm" href="contenidos_muestra.php?marco=1" >Ver</a></div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="card"><img class="card-img-top w-100 d-block" src="assets/img/scenery/inclusion.jpg">
                            <div class="card-body">
                                <h4 class="card-title">Inclusión</h4>
                            </div>
                            <div><a class="btn btn-outline-primary btn-sm" href="contenidos_muestra.php?marco=2">Ver</a></div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="card"><img class="card-img-top w-100 d-block" src="assets/img/scenery/interseccion.jpg">
                            <div class="card-body">
                                <h4 class="card-title">Intersección</h4>
                            </div>
                            <div><a class="btn btn-outline-primary btn-sm" href="contenidos_muestra.php?marco=3">Ver<br></a></div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="card"><img class="card-img-top w-100 d-block" src="assets/img/scenery/union.jpeg">
                            <div class="card-body">
                                <h4 class="card-title">Union</h4>
                            </div>
                            <div><a class="btn btn-outline-primary btn-sm" href="contenidos_muestra.php?marco=4">Ver<br></a></div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="card"><img class="card-img-top w-100 d-block" src="assets/img/scenery/dif.png">
                            <div class="card-body">
                                <h4 class="card-title">Diferencia</h4>
                            </div>
                            <div><a class="btn btn-outline-primary btn-sm" href="contenidos_muestra.php?marco=6">Ver<br></a></div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="card"><img class="card-img-top w-100 d-block" src="assets/img/scenery/complemento.jpg">
                            <div class="card-body">
                                <h4 class="card-title">Complemento</h4>
                            </div>
                            <div><a class="btn btn-outline-primary btn-sm" href="contenidos_muestra.php?marco=5">Ver<br></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="assets/js/smoothproducts.min.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>
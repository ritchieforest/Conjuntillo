<?php 
session_start();
if ($_SESSION['active']!=true) {
    header('location: index.php');    
}
include 'include_contenidos.php';
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
                    <li class="nav-item" role="presentation"><a class="nav-link" href="index.html">Inicio</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="login-alumno.html">Soy alumno</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="actividades.html">Actividades</a></li>
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
                    <div class="col-md-12 col-lg-12">
                        <?php if (isset($_GET['marco']) && $_GET['marco']==1) {

                         ?>
                        <div class="card"><img class="card-img-top w-100 d-block" src="<?php echo $imagen1; ?>">
                            <div class="card-body">
                                <h4 class="card-title">Introduccion</h4>
                                <spam><?php echo $text1; ?></spam>

                            </div>
                            <div><a class="btn btn-outline-primary btn-sm" href="contenidos_muestra.php?marco=2" >Siguiente Clase</A></div>
                            <?php }  


                            ?>
                        </div>
                        <div class="col-md-12 col-lg-12">
                        <?php if (isset($_GET['marco']) && $_GET['marco']==2) {

                         ?>
                        <div class="card"><img class="card-img-top w-100 d-block" src="<?php echo $imagen2; ?>">
                            <div class="card-body">
                                <h4 class="card-title">Inclusion</h4>
                                <spam><?php echo $text1; ?></spam>

                            </div>
                            <div><a class="btn btn-outline-primary btn-sm" href="contenidos_muestra.php?marco=3" >Siguiente Clase</A>
                            <a class="btn btn-outline-primary btn-sm" href="contenidos_muestra.php?marco=1" >Anterior Clase</A></div>

                            <?php }  


                            ?>
                        </div>
                        <div class="col-md-12 col-lg-12">
                        <?php if (isset($_GET['marco']) && $_GET['marco']==3) {

                         ?>
                        <div class="card"><img class="card-img-top w-100 d-block" src="<?php echo $imagen3; ?>">
                            <div class="card-body">
                                <h4 class="card-title">Interseccion</h4>
                                <spam><?php echo $text1; ?></spam>

                            </div>
                            <div><a class="btn btn-outline-primary btn-sm" href="contenidos_muestra.php?marco=4" >Siguiente Clase</A> 
                             <a class="btn btn-outline-primary btn-sm" href="contenidos_muestra.php?marco=2" >Anterior Clase</A></div>

                            <?php }  
                            ?>
                        </div>
                        <div class="col-md-12 col-lg-12">
                        <?php if (isset($_GET['marco']) && $_GET['marco']==4) {

                         ?>
                        <div class="card"><img class="card-img-top w-100 d-block" src="<?php echo $imagen4; ?>">
                            <div class="card-body">
                                <h4 class="card-title">Union</h4>
                                <spam><?php echo $text1; ?></spam>
                            </div>
                            <div><a class="btn btn-outline-primary btn-sm" href="contenidos_muestra.php?marco=5" >Siguiente Clase</A> 
                            <a class="btn btn-outline-primary btn-sm" href="contenidos_muestra.php?marco=3" >Anterior Clase</A></div>

                            <?php }  
                            ?>
                        </div>
                        <div class="col-md-12 col-lg-12">
                        <?php if (isset($_GET['marco']) && $_GET['marco']==5) {

                         ?>
                        <div class="card"><img class="card-img-top w-100 d-block" src="<?php echo $imagen5; ?>">
                            <div class="card-body">
                                <h4 class="card-title">Complemento</h4>
                                <spam><?php echo $text1; ?></spam>
                            </div>
                            <div><a class="btn btn-outline-primary btn-sm" href="contenidos_muestra.php?marco=5" >Siguiente Clase</A> 
                           <a class="btn btn-outline-primary btn-sm" href="contenidos_muestra.php?marco=4" >Anterior Clase</A></div>

                            <?php }  
                            ?>
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
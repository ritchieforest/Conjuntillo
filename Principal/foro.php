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
        <div class="container"><a class="navbar-brand logo" href="#">Conjuntillo</a><button data-toggle="collapse" data-target="#navcol-1" class="navbar-toggler"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse"
                id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li role="presentation" class="nav-item"><a class="nav-link" href="index.html">Inicio</a></li>
                    <li role="presentation" class="nav-item"><a class="nav-link" href="login-alumno.html">Soy alumno</a></li>
                    <li role="presentation" class="nav-item"><a class="nav-link" href="login-profesor.html">Soy docente</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <main class="page service-page">
        <section class="clean-block clean-services dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Conjuntirijillo</h2>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-4 offset-lg-4">
                        <div class="card">
                            <div class="card-body">
                                
                                <form method="POST">
                                    <div class="form-row">
                                        <div class="col"><i class="fa fa-users"></i></div>
                                        <div class="col-lg-9 offset-lg-0"><input id="Comentario" type="text" class="form-control" name="text" /></div>
                                        <input type="submit" name="comentar">
                                        <?php 
                                            if (isset($_POST['comentar'])) {
                                                $file = fopen("comentarios.txt", "r");
                                                $count=0;
                                                while(!feof($file)) {
                                                    $count=$count+1;
                                                }
                                                fclose($file);  
                                                $file = fopen("comentarios.txt", "a");

                                                fwrite($file, strval($count)."#".$_POST['text'] . PHP_EOL);

                                                fclose($file);
                                            }
                                         ?>
                                    </div>
                                </form>    

                            </div>
                        </div>
                    </div>
                    <?php 
                    $file = fopen("comentarios.txt", "r");
                    while(!feof($file)) {
                        $var=explode('#',fgets($file));
                        if (!empty($var[1])) {

                     ?>
                    <div class="col-md-6 col-lg-4 offset-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="row" id="Raios">
                                    <div class="col-lg-1"><i class="fa fa-user"></i></div>
                                    <div class="col-lg-5 offset-lg-0"><em>Anonimus</em></div>
                                </div><span id="ponerComentario"><?php echo $var[1] ;?></span>
                                    <br>
                                    <hr>
                                    <div class="col-lg-9">
                                        <div class="row">
                                            <?php 
                                                   $file2 = fopen("contestar.txt", "r");
                                                   while(!feof($file2)) {
                                                     $var_res=explode('#',fgets($file2));
                                                     if ($var[0]==$var_res[0]) {
                                                 ?>  
                                            <div class="col-lg-1"><i class="fa fa-user"></i></div>
                                            <div class="col-lg-6 offset-lg-0"><small>Anonimus</small></div>
                                            <div class="row">
                                                  
                                                <div class="col-lg-12"><small><?php echo $var_res[1]; ?></small></div>
                                                          
                                            </div>
                                            <?php }} ?>
                                         </div>   
                                        <form method="POST">
                                            <div class="form-row">
                                                <input style="display: none!important;" type="text" name="valor" value="<?php echo $var[0]; ?>"/>
                                                <div class="col-lg-1"><i class="fa fa-users"></i></div>
                                                <div class="col-lg-10 offset-lg-0"><input id="Comentario" type="text" class="form-control" name="text" placeholder="Responder Comentario" style="font-size: 10px !important;" /></div>
                                                <div class="col-lg-1"><input type="submit" class="btn btn-primary"  name="contestar"  style="width: 90px !important; height: 30px !important; font-size: 10px !important;" value="Responder"></div>   
                                            </div>
                                        </form> 
                                    </div>
                            </div>
                        </div>
                    </div>
                <?php }}
                    fclose($file);
                    fclose($file2); 


                 ?>
                 <?php 
                    if (isset($_POST['contestar'])) {
                        $cantidad=$_POST['valor'];
                        $file = fopen("contestar.txt", "a");
                        fwrite($file, strval($cantidad)."#".$_POST['text'] . PHP_EOL);
                        fclose($file);
                    }
                ?>
                </div>
            </div>
        </section>
    </main>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="assets/js/smoothproducts.min.js"></script>
    <script src="assets/js/theme.js"></script>
    <script type="text/javascript">
        
        /**$(document).ready(function(){
        $("#Comentario").keypress(function(e) {
        //no recuerdo la fuente pero lo recomiendan para
        //mayor compatibilidad entre navegadores.
        var code = (e.keyCode ? e.keyCode : e.which);
        if(code==13){
            var id=$('#Comentario').val();
            //var elem = $(document.createElement('p')).attr('id','parrafo1').html('Lorem ipsum').appendTo('#Raios');
            $('#ponerComentario').html(id);
        }
    });
});
       **/ 


    </script>
</body>
</html>
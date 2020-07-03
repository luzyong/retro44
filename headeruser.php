<?php
session_start();?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Retro44 | Online</title>


    <link href="bootstrap.min.css" rel="stylesheet">

  
    <link href="agency.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="img/logo.png">
   

</head>

<body id="page-top" class="index">
  


    <!-- Barra de navegación -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="../../../../inetpub/wwwroot/retro44/Index.php"><img src="../../../../inetpub/wwwroot/retro44/IMG/logo.png" alt="Chania" width="125" height="125"></a>
            </div>

            
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        
                    </li>
                    <li>
                        <a class="page-scroll" href="../../../../inetpub/wwwroot/retro44/juegosuser.php">Videojuegos</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="../../../../inetpub/wwwroot/retro44/usuario.php"><?php echo $_SESSION['nombre'];?></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="../../../../inetpub/wwwroot/retro44/logout.php">Cerrar Sesión</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="../../../../inetpub/wwwroot/retro44/Contacto.php">Contacto</a>
                    </li>
                </ul>
            </div>
            
        </div>
      
    </nav>

    <!-- Header -->
    <header>
        <div class="container">
            <div class="intro-text">
                
            </div>
        </div>
    </header>


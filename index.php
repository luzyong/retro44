<?php include ("header.php");
//session_start();?>


<div class="container">
    <section id="main" class="row">
        <div class="col-lg-12 text-center">
                    <h1 class="section-heading">Bienvenidos a retro44 <?php echo $_SESSION['nombre'];?></h1>
                    <h3 class="section-subheading text-muted">Gracias por visitar nuestro sitio</h3>
                    </div>
<section id="main" class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      
    </ol>


    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <center><a title="GTA V" href="gtav.php"><img src="IMG/GTA.jpg" alt="Chania" width="500" height="345"></center></a>
      </div>

      <div class="item">
        <center><a title="NFS" href="nfs.php"><img src="IMG/NFS.jpg" alt="Chania" width="500" height="345"></center></a>
      </div>
    
      <div class="item">
        <center><a title="RE7" href="re7.php"><img src="IMG/RE7.jpg" alt="Chania" width="500" height="345"></center></a>
      </div>

      
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

        </div>
    
    </section>  
    </div>
<?php include 'footer.php'?>
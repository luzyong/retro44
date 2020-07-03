<?php include 'header.php';
session_start(); ?>

 <section id="acceder">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Iniciar sesión</h2>
                </div>
            </div>
            <div class="box">
                <div class="col-lg-12 text-center">
                    <form action="INICIOSESION.php" method="get">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Nombre de usuario" name="username">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="E-m@il" name="email">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Contraseña" name="password" >
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" class="btn btn-xl">Iniciar sesíon</button>
                            </div>
                            <?php echo $_SESSION['error']; ?>
                        </div>
                    </form>
                </div>
            </div>
        </div>
	
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>   

	</section>

<?php include 'footer.php'?>


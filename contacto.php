<?php include 'header.php'?>
<div class="col-xs-12 col-sm-12 col-md-12">
    <img src="" alt="" class="img-responsive">
        
        <div class="container">
        <center>
            <h2 class="section-heading">Siguenos</h2>
            <p><div><a href="https://www.facebook.com"  role="button"><img src="IMG/F.jpg" alt="Chania" width="100" height="100"></a></p>
            <p><div><a href="https://www.twitter.com"  role="button"><img src="IMG/TW.jpg" alt="Chania" width="100" height="100"></a></p>
            <p><div ><a href="https://www.instagram.com/badjeds" role="button"><img src="IMG/I.jpg" alt="Chania" width="100" height="100"></a></p>
        </div>
        </div>
        </div>
        </center>
</div>

    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Contáctanos</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Nombre *" name="name" required data-validation-required-message="Por favor escribe tu nombre.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="E-m@il *" name="mail" required data-validation-required-message="Escribe tu correo electrónico.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control" placeholder="Teléfono *" name="tel" required data-validation-required-message="Ingresa tu número telefónico.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Mensaje *" name="mess" required data-validation-required-message="Escribe un mensaje."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" class="btn btn-xl">Enviar Mensaje</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>


<?php include 'footer.php'?>
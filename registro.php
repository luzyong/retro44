<?php  
  include 'header.php';

/*error_reporting(E_ALL ^ E_NOTICE);
    include 'conexion.php';
  
    
    if(isset($_GET['submit'])){
   	$errors=array();
    //NOMBRE
      if($_GET['nombre']==""){
        $errors[]="Nombre vacío<br>";
      }
      $nombre=filter_var($_GET['nombre'], FILTER_SANITIZE_STRING);

       //NOMBRE
      if($_GET['ape']==""){
        $errors[]="Apellido vacío<br>";
      }
      $ape=filter_var($_GET['nombre'], FILTER_SANITIZE_STRING);

      //Email
      if($_GET['email']==""){
        $errors[]="E-mail vacío<br>";
      }
      if(!filter_var($_GET['email'], FILTER_SANITIZE_EMAIL)){
        $errors[]="E-mail no válido <br>";
      }
      $email=$_POST['email'];

	 //Estado
      if(!$_POST['state'] || $_POST['state']=="na"){
      	$errors[]="Selecciona tu Estado <br>";
      }
      $state=filter_var($_POST['state'],FILTER_SANITIZE_STRING);

      //genero
      if (!$_POST['sex']) {
      	$errors [] ="Te faltó el género <br>";
      }
      if($_POST['sex' == "m"]){
      	$sex = "m";
      }
      	else
      		{
      			$sex = "f";
      }

      //terminos
      if(!$_POST['termConditions']){
      	$errors[]="Debes aceptar los términos <br>";
      }


       //si no hay errores


      if(!$errors){
      	$response['status'] = "Succes!!";
      	$response['msg'] = "Registro exitoso, muchas gracias";

      	$conn=new Conexion();
      	$conn -> Conectarse();
      //si hay errores
      }else{
      	$response['status'] = "Error";
      	$response['errors']= $errors;
      }
  }








*/


    ?>


<section id="registro">
<div class="box">
		<h1><center>Registro de usuario</center></h1>
				<form action="INSERTAR2.php" method="get">
		<div class ="form-group">
			<div>
				<input type="text" class="form-control required" name="username" placeholder="Nombre">
			</div>
		</div>
		<div class ="form-group">
			<div>
				<input type="text" class="form-control required" name="ape" placeholder="Apellido">
			</div>
		</div>
		<div class ="form-group">
			<div>
				<input type="text" class="form-control required" name="correo" placeholder="E-m@il">
			</div>
		</div>
				<div class="form-group">
		    		<label class="control-label">Estado: </label>
		        	 <select class="form-control" name="state" id="state">
			          <option value="Aguascalientes">Aguascalientes</option>
			          <option value="Baja California">Baja California</option>
			          <option value="Baja California Sur">Baja California Sur</option>
			          <option value="Campeche">Campeche</option>
			          <option value="Chiapas">Chiapas</option>
			          <option value="Chihuahua">Chihuahua</option>
			          <option value="Coahuila">Coahuila</option>
			          <option value="Colima">Colima</option>
			          <option value="CDMX" selected="CDMX">CDMX</option>
			          <option value="Durango">Durango</option>
			          <option value="Estado de México">Estado de México</option>
			          <option value="Guanajuato">Guanajuato</option>
			          <option value="Guerrero">Guerrero</option>
			          <option value="Hidalgo">Hidalgo</option>
			          <option value="Jalisco">Jalisco</option>
			          <option value="Michoacán">Michoacán</option>
			          <option value="Morelos">Morelos</option>
			          <option value="Nayarit">Nayarit</option>
			          <option value="Nuevo León">Nuevo León</option>
			          <option value="Oaxaca">Oaxaca</option>
			          <option value="Puebla">Puebla</option>
			          <option value="Querétaro">Querétaro</option>
			          <option value="Quintana Roo">Quintana Roo</option>
			          <option value="San Luis Potosí">San Luis Potosí</option>
			          <option value="Sinaloa">Sinaloa</option>
			          <option value="Sonora">Sonora</option>
			          <option value="Tabasco">Tabasco</option>
			          <option value="Tamaulipas">Tamaulipas</option>
			          <option value="Tlaxcala">Tlaxcala</option>
			          <option value="Veracruz">Veracruz</option>
			          <option value="Yucatán">Yucatán</option>
			          <option value="Zacatecas">Zacatecas</option>
		        </select>
		    </div>

		     <div class="form-group">
		        <label>Genero:</label>
		        <div class="radio">
		            <label>
		                   <input type="radio" name="sex" id="male" value="m">
		                   Masculino
		            </label>
		        </div>
		        <div class="radio">
		            <label>
		                   <input type="radio" name="sex" id="female" value="f" checked>
		                   Femenino
		            </label>
		        </div>
		    </div>

		       <hr></hr>
		       <h2 class="section-subheading text-muted"><center>Datos de Cuenta</center></h2>

		     <div class="form-group">
				<input type="text" class="form-control" placeholder="Nombre de usuario" name="name">
             </div>
             	<div class="form-group">
                		<input type="text" class="form-control" placeholder="contraseña" name="password" >
                </div>


		 <div class="form-group">
          	<label>Terminos y Condiciones</label>
         		 <div class="checkbox">
                	<label>
                    	<input type="checkbox" name="termConditions">
                            Acepto terminos y condiciones
                	</label>
          		</div>
    	</div>

      <br><br>
	<br><br>
    	<div class="col-lg-12 text-center">
			<button type="submit" class="btn btn-xl" name="submit">Guardar</button>
		</div>

		</form>
	</div>
	
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

   </section>
<?php include 'footer.php'?>

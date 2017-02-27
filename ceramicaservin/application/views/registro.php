 <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Registrar
                        <strong>Sesión</strong>                       
                    </h2>
                    <hr>
                </div>
                <div class="col-md-6">
                    <img class="img-responsive img-border-left" src="<?php echo base_url();?>img/logi.png" alt="">
                </div>
                 <div class="wrap">
		 	<div class="about-desc">
		     <div class="content">	 	
		      <div class="about-data"> 
		          <div class="row">
		          	<div class="col-md-3">
				
			</div>
			<div class="col-md-4 well inicio">

				<form id="formulario" action="#" method="post" enctype="multipart/form-data" class="form"> 
					<div class="form-group">
				    	<label> Nombre </label>
				    	<input type="text" name="nombre" class="form-control" required>
			    	</div>

					<div class="form-group">
						<label>Email</label>
						<input type="email" name="email" class="form-control" required>
					</div>
					
					<div class="form-group">
						<label>Password</label>
						<input type="password" name="password" class="form-control" required>
					</div>

					<div class="form-group">
						<label for="">Dirección</label>
						<input type="text" name="direccion" class="form-control" required>
					</div>

					<div class="form-group">
						<label for="">Estado</label>
						<input type="text" name = "estado" class="form-control" required>
					</div>

					<div class="form-group">
						<label for="">Codigo Postal</label>
						<input type="number" name = "cp" class="form-control" required>
					</div>

					<div id="respuesta" class="form-group">
                            
                    </div>

					<div class="form-group">
						<label>Avatar</label>
						<input type= "file" class="btn btn-defaul form-control" name="avatar" class="form-control" required/>
					</div>

					<input class="btn btn-success form-control" type="submit" value="Registrar">
					<a href="<?php echo base_url();?>index.php/Micontrolador/logi" title="Iniciar Sesión">Iniciar Sesión</a>
				
				</form>
				
			</div>
			<div class="col-md-3 ">
				
			</div>
		</div>
			

		          	  
		          	<div class="col-md-6">
				  </div>
		          </div>
		 	  </div>
			</div>
			</div>
		  </div>		   			
            </div>
            
        </div>



		//<?php
			//if($_POST){
				//$nombre = $_POST['nombre'];
				//$email = $_POST['email'];
				//$password = $_POST['password'];
				//$direccion = $_POST['direccion'];
				//$estado = $_POST['estado'];
				//$cp = $_POST['cp'];
				
				//print_r ($_FILES['avatar']); //sacar tipo

				//if($_FILES['avatar']['type']=='image/jpeg' or $_FILES['avatar']['type']=='image/png'){
					//$rutaServidor ='upload';
					//$rutaTemporal=$_FILES['avatar']['tmp_name'];

					//$nombreImagen=$_FILES['avatar']['name'];
					//$rutaDestino= $rutaServidor.'/'.$nombreImagen;
//
					//move_uploaded_file($rutaTemporal,$rutaDestino);
				//}


				//$add = new Usuarios();
				//$add-> registro($nombre, $email, $password, $rutaDestino, $direccion, $estado, $cp);

			//}

		//?>
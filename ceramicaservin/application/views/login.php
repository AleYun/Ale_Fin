 <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Iniciar
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
		          	<div class="col-md-4">
		          	  <div class="contact-form">
		          							     <!--<form method="post" action="contact-post.html" class="left_form">-->
		          		
						<?php echo form_open('Usuarios/inicioSes'); ?>
            				<div class="login-box-body">
                				<div class="panel-body">
                   				  <img src="<?php echo base_url();?>img/loginf.png" alt="" />
                				</div>
                				<p class="login-box-msg">Accede a tu cuanta o registate</p>

                			<div class="form-group has-feedback">
                    			<?php echo form_error('email'); ?>
                    			<input type="text" class="form-control" required name="email" placeholder="E-mail">
                    			<p style="color:black"><?php echo $this->session->flashdata('mensaje2')?></p>
                    			<span class="glyphicon glyphicon-user form-control-feedback"></span>
                			</div>
               				 <div class="form-group has-feedback">
                   				<?php echo form_error('password'); ?>
                   				<input type="password" class="form-control" required name="password" placeholder="Password">
                    			<span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    			<p style="color:black"><?php echo $this->session->flashdata('mensaje')?></p>
							</div>
                	<div class="row">

                    	<div class="col-xs-4">
                      	  <button type="submit" name="btnEnviar" aria-hidden="true" class="btn btn-primary btn-block btn-flat">Acceder</button>
                   	 </div><!-- /.col -->
                   <!-- <div class="col-xs-5">
                        <button type="submit" name="btnRegistrar" aria-hidden="true" class="btn btn-primary btn-block btn-flat">Registrarse</button>
                    </div><!-- /.col --> 
                    <?php echo form_close();?>
 

                	</div>

                <br>
		          			
		          			<div class="clear"></div>

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



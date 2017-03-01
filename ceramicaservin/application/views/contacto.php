   <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Ponte en 
                        <strong>Contacto</strong>
                    </h2>
                    <hr>
                </div>
                <div class="col-md-8">
                    <!-- Embedded Google Map using an iframe - to select your location find it on Google maps and paste the link as the iframe src. If you want to use the Google Maps API instead then have at it! -->
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3749.439543703471!2d-100.50680818562877!3d19.99005882779948!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d2d641a67af3e3%3A0x439c337358d9f9b3!2sCeramica+Servin!5e0!3m2!1sen!2smx!4v1484965563724" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
                <div class="col-md-4">
                    <p>Teléfono:
                        <strong>01 421 474 1246</strong>
                    </p>
                    <p>Email:
                        <strong><a href="mailto:info@ceramicaservin.com">info@ceramicaservin.com</a></strong>
                    </p>
                    <p>Dirección:
                        <strong>3481 Melrose Place
                            <br>Beverly Hills, CA 90210</strong>
                    </p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>

        <div class="row">
            <div class="box">
                <?php
                            if(!$this->session->userdata('nombre')){
                         ?>

                          <div class="contact-form">
                            <div class="row">
                                <div class="col-md-6">
                                    <h3 style="color:#0B0B61">Para dejar tu comentario es necesario ser usuario.</h3>
                                    <h3 style="color:#0B0B61; text-align:center;"><a href="<?php echo base_url();?>index.php/Micontrolador/logi">Iniciar sesión</a></h3>
                                    <p style="color:#0B0B61">Si aún no eres usuario de nosotros, contáctanos y con gusto te atenderemos.</p>
                                    <p style="color:#0B0B61">Forma parte de nuestra empresa, siendo uno de nuestros clientes y obten muchos beneficios. Enterarte de nuestras ofertas, además de utilizar nuestro carrito de compras y dejandonos tu opinión o sugerencias, además de muchos beneficios más.</p>
                                </div>
                                <div class="col-md-6">
                                    <img src="<?php echo base_url();?>img/ini.jpg" alt="" />
                                </div>
                            </div>
                             <div class="clear"></div>
                          </div>
                         <?php
                            }else{
                         ?>
                         <div class="col-lg-12">
                            <hr>
                            <h2 class="intro-text text-center">Dejanos un
                            <strong>Mensaje</strong>
                            </h2>
                            <hr>
                            <p>Nuestro taller ofrece diferentes servicios, si desea que le informemos acerca de nuestros trabajos o algo que usted tenga duda o en mente, nos tiene a su disposición.</p>
                            <br>
                            <div class="contact-form">
                               <div class="left_form">
                                 <?php echo form_open('Comentarios/addComentario');?>
                                 <?php //echo $mensaje; ?>
                                    <div class="form-group col-lg-4">
                                        <span><label>Nombre del Usuario</label></span>
                                        <?php echo form_error('nombre','<div class = "error">','</div>');?>
                                        <span><input type="text" class="form-control" id="name" name="nombre" required="" value="<?php echo $this->session->userdata('nombre')?>" placeholder="nombre"></span>
                                    </div>
                                    <div class="form-group col-lg-4">
                                        <span><label>Email</label></span>
                                        <?php echo form_error('email','<div class = "error">','</div>');?>
                                        <span><input type="email" class="form-control" id="email" name="email" required="" value="<?php echo $this->session->userdata('email')?>"" placeholder="Email">
                                        <p class="help-block"></p></span>
                                        <?php echo form_error('email'); ?>
                                    </div>
                                    <div class="form-group col-lg-9">
                                        <span><label>Mensaje</label></span>
                                        <?php echo form_error('mensaje','<div class = "error">','</div>');?>
                                        <span><textarea class="form-control" rows="10" cols="100" id="mensaje" name="mensaje" required="" value="<?= set_value('mensaje'); ?>" placeholder="Mensaje" maxlength="500" style="resize:none"></textarea></span>
                                        <?php echo form_error('mensaje'); ?>
                                    </div>
                                    </form>
                                    </div>
                                </div>
                            </div>

                           <div class="form-group col-lg-12">
                                <input type="hidden" name="usuario" value="<?php echo $this->session->userdata('idUsuario')?>">
                                <button type="submit" class="btn btn-default" onclick="return confirm('Su mensaje sera enviado')">Enviar</button>
                                <?php echo form_close(); ?>
                            </div>
                                <div class="clear"></div>
                          </div>
                         <?php
                            }
                         ?>
                    </div> 
            </div>
        </div>

    </div>
</div>    
    <!-- /.container -->
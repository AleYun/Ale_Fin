 <div class="brand">Javier Servín Cerámica</div>
    <div class="address-bar">Desde: 1981</div>

    <!-- Navigation -->
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Javier Servín Cerámica</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
                <a class="navbar-brand" href="index.html">Javier Servín Cerámica</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="<?php echo base_url();?>index.php/Micontrolador/index">Inicio</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url();?>index.php/Micontrolador/nosotros">Nosotros</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url();?>index.php/Micontrolador/proceso">Proceso</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url();?>index.php/Micontrolador/galeria">Galería</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url();?>index.php/Micontrolador/cabanas">Cabañas</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url();?>index.php/Micontrolador/contacto">Contacto</a>
                    </li>

                      <?php
                         if($this->session->userdata('nombre')){
                            if ($this->session->userdata('privilegios') == 1) {

                        ?>
                            <li><a href="<?php echo base_url();?>index.php/Admin">Panel Administrador</a></li>
                        <?php   
                            }
                        }
                        ?>
                         <?php
                         if($this->session->userdata('nombre')){
                            if ($this->session->userdata('privilegios') == 0) {
                        ?>
                            <li><a href="<?php echo base_url();?>index.php/Micontrolador/carrito">Carrito</a></li>
                         <?php
                            }

                        }
                         ?>
                                     

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
<section class="content">
  <div class="box box-primary"><br>
          <div class="row">
                  <div class="col-md-9">
                  <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header" style="text-align:center">PANEL DE CONTROL</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                  </div>
                  <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header" style="text-align:center">Bienvenid@ Administrador <?php echo $this->session->userdata('nombre');?></h1>
                    </div>
                    <!-- /.col-lg-12 -->
                  </div>
                  <br><br>


                  <div class="row">
                    <div class="col-md-3">
                      <div class="pull-left image">
                        <img src="<?php echo base_url();?>Estilosback/dist/img/clientes.png">
                      </div>
                     <div class="box-footer">
                        <li><a href="<?php echo base_url();?>index.php/Admin/usuarios"><button type="submit" class="btn btn-primary">Administrar Usuarios</button>
                     </div>
                    </div>
                      
                    

                    <div class="col-md-3">
                      <div class="pull-left image">
                        <img src="<?php echo base_url();?>Estilosback/dist/img/ventas.png">
                      </div>
                      <div class="box-footer">
                        <li><a href="<?php echo base_url();?>index.php/Admin/ventas"><button type="submit" class="btn btn-primary">Administrar Ventas</button>
                     </div>
                    </div>
                  

                    <div class="col-md-3">
                      <div class="pull-left image">
                        <img src="<?php echo base_url();?>Estilosback/dist/img/productos.png">
                      </div>
                      <div class="box-footer">
                        <li><a href="<?php echo base_url();?>index.php/Admin/productos"><button type="submit" class="btn btn-primary">Administrar Productos</button>
                     </div>
                    </div>
                    

                    <div class="col-md-3">
                      <div class="pull-left image">
                        <img src="<?php echo base_url();?>Estilosback/dist/img/categorias.png">
                      </div>
                      <div class="box-footer">
                        <li><a href="<?php echo base_url();?>index.php/Admin/categoria"><button type="submit" class="btn btn-primary">Administrar Categorias</button>
                     </div>
                    </div>
                    <div class="col-lg-12">
                        <h1 class="page-header"></h1>
                    </div>
                  </div>
                  <br><br>


                  <div class="row">
                    <div class="col-md-3">
                      <div class="pull-left image">
                        <img src="<?php echo base_url();?>Estilosback/dist/img/comentarios.png" alt="User Image">
                      </div>
                      <div class="box-footer">
                        <li><a href="<?php echo base_url();?>index.php/Admin/comentarios"><button type="submit" class="btn btn-primary">Administrar Comentarios</button>
                     </div>
                    </div>


                    <!--<div class="col-md-3">
                      <div class="pull-left image">
                        <img src="<?php echo base_url();?>Estilosback/dist/img/cerrarsesion.png" alt="User Image">
                      </div>
                      <div class="box-footer">
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="submit" class="btn btn-primary" >Cerrar Sesión</button>
                     </div>
                    </div>-->

                  </div>
                  <br><br>
                        

                  </div><!-- /.box box-primary -->
                  <div class="col-lg-3">
                      <!-- Calendar -->
                      <div class="box box-solid bg-blue-gradient">
                        <div class="box-header">
                          <i class="fa fa-calendar"></i>
                          <h3 class="box-title">Calendario</h3>
                        </div><!-- /.box-header -->
                        <div class="box-body no-padding" >
                          <div id="calendar" style="width: 100%"></div>
                        </div><!-- /.box-body -->
                      </div><!-- /.box -->

                      <!-- Calendar -->

                  </div><!-- right col -->


            </div>
  </div>
</section>
<section class="content">
          <div class="row">
            <!-- left column -->
            <div class="col-md-10">
              <!-- general form elements -->
              <div class="box box-primary">

                <div class="with-border">
                  <div class="row">
                    <div class="box-header with-border">
                      <div class="col-md-offset-5 col-md-10">
                        <h1 class="box-title"><dt>Agregar Productos</dt></h1>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- form start 
                <?php //echo form_open_multipart(//'Productos/addProducto');?>-->
                <form action="<?php echo base_url();?>index.php/Productos/addProducto" enctype="multipart/form-data" method="post">
                  <div class="box-body">
                    <div class="form-group">
                        <label>Imagen:</label>
                        <input class="" type="file" name="userfile">
                    </div>
                    <div class="form-group">
                        <label>Nombre:</label>
                        <input class="form-control" type="text" name="nombrePro" placeholder="Nombre del producto" required>
                    </div>
                    <div class="form-group">
                        <label>Descripción del Producto:</label>
                        <input class="form-control" type="text" name="descriPro" placeholder="Descripción del producto" required>
                    </div>
                    <div class="form-group">
                        <label>Código del producto:</label>
                        <input class="form-control" type="number" name="codigo" placeholder="Código del producto" required>
                    </div>
                    <div class="form-group">
                        <label>Precio del Producto:</label>
                        <input class="form-control" type="number" name="precio" placeholder="Introduce el precio del producto" required>
                    </div>
                    <div class="form-group">
                        <label>Stock:</label>
                        <input class="form-control" type="number" name="stock" placeholder="Productos en existencia" required>
                    </div>


                    <div class="with-border">
                      <div class="row">
                        <div class="col-md-3">
                          <div class="form-group">
                            <label>Categoría:</label>
                            <select class="" name="categoria">
                              <option selected="selected">Seleccione una categoría</option>
                              <?php
                                       if(isset($cat)){
                                          foreach ($cat as $c){
                                            echo    "<option value='$c->idCategoria'>" . $c->nombreCate . "</option>";
                                                 }
                                          }else{
                                              echo "sin registros";
                                          }
                                          ?>
                            </select>
                          </div>
                        </div>
                      
                            <div class="col-md-9">
                              <div class="box-footer"><br>
                                <button><a href="<?php echo base_url();?>index.php/Admin/agregarcategoria"><span class="glyphicon glyphicon-plus"></span>Agregar Categoría</a></button>
                              </div>
                            </div>
                      </div>
                    </div>
                    <!--
                    <div class="form-group">
                        <label>Escribe de nuevo tu Contraseña:</label>
                        <input class="form-control" type="password2" name="password2" placeholder="Introduce nuevamente el password del cliente" required>
                    </div>-->
                  </div><!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Enviar</button>
                  </div>
                </form>
              </div><!-- /.box -->
            </div>
        </div>
</section>
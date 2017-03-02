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
                        <h1 class="box-title"><dt>Actualizar Usuario</dt></h1>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- form start -->
                <?php echo form_open('Usuarios/upUsuario');?>
                <?php foreach($user as $u){ ?>

                  
                  <input type="hidden" name ="idUsuario" value="<?php echo $u->idUsuario; ?>">
                  <div class="box-body">
                    <div class="form-group">
                        <label>Imagen:</label>
                        <input class="form-control" type="file" name="avatar" value="<?php echo $u->avatar; ?>" required>
                    </div>
                    <div class="form-group">
                        <label>Nombre:</label>
                        <input class="" type="text" name="nombre" value="<?php echo $u->nombre; ?>">
                    </div>
                    <div class="form-group">
                        <label>E-mail:</label>
                        <input class="form-control" type="text" name="email" value="<?php echo $u->email; ?>" required>
                    </div>
                    <div class="form-group">
                        <label>Contraseña:</label>
                        <input class="form-control" type="password" name="password" value="<?php echo $u->password; ?>" required>
                    </div>
                    <div class="form-group">
                        <label>Dirección:</label>
                        <input class="form-control" type="text" name="direccion" value="<?php echo $u->direccion; ?>" required>
                    </div>
                    <div class="form-group">
                        <label>Teléfono:</label>
                        <input class="form-control" type="number" name="telefono" value="<?php echo $u->telefono; ?>" required>
                    </div>
                    <div class="form-group">
                        <label>Estado:</label>
                        <input class="form-control" type="text" name="estado" value="<?php echo $u->direccion; ?>" required>
                    </div>
                    <div class="form-group">
                        <label>Código Postal:</label>
                        <input class="form-control" type="number" name="cpostal" value="<?php echo $u->cpostal; ?>" required>
                    </div>
                    
                    
                  </div>
              </div>
            </div>

                        
          </div>
        </div>    

                
                    <!--<div class="form-group">
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
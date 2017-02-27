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
                        <h1 class="box-title"><dt>Agregar Usuario</dt></h1>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- form start -->
                <?php echo form_open('Usuarios/addUsuario');?>
                  <div class="box-body">
                    <div class="form-group">
                        <label>Imagen:</label>
                        <input class="" type="file" name="avatar">
                        <?php echo form_error('avatar'); ?>
                    </div>
                    <div class="form-group">
                        <label>Nombre:</label>
                        <input class="form-control" type="text" name="nombre" placeholder="Introduce nombre del usuario" required>
                        <?php echo form_error('nombre'); ?>
                    </div>
                    <div class="form-group">
                        <label>E-mail:</label>
                        <input class="form-control" type="text" name="email" placeholder="Introduce e-mail del usuario" required>
                        <?php echo form_error('email'); ?>
                    </div>
                    <div class="form-group">
                        <label>Contraseña:</label>
                        <input class="form-control" type="password" name="password" placeholder="Introduce password del usuario" required>
                        <?php echo form_error('password'); ?>
                    </div>
                    <div class="form-group">
                        <label>Dirección:</label>
                        <input class="form-control" type="text" name="direccion" placeholder="Introduce la direccion del usuario" required>
                        <?php echo form_error('direccion'); ?>
                    </div>
                    <div class="form-group">
                        <label>Teléfono:</label>
                        <input class="form-control" type="number" name="telefono" placeholder="Introduce teléfono del usuario" required>
                        <?php echo form_error('telefono'); ?>
                    </div>
                    <div class="form-group">
                        <label>Estado:</label>
                        <input class="form-control" type="text" name="estado" placeholder="Introduce el estado del usuario" required>
                        <?php echo form_error('estado'); ?>
                    </div>
                    <div class="form-group">
                        <label>Código Postal:</label>
                        <input class="form-control" type="number" name="cpostal" placeholder="Introduce códogo postal del usuario" required>
                        <?php echo form_error('cpostal'); ?>
                    </div>
                    
                         <?php
                            if(isset($user)){
                                foreach ($user as $u){
                                  echo "<tr><td>" . $u->idUsuario . "</td>" .
                                       "<td>" . $u->nombre . "</td>" .
                                       "<td>" . $u->email . "</td>" .
                                       "<td>" . $u->password . "</td>" .
                                       "<td>" . $u->direccion . "</td>" .
                                       "<td class='hidden-xs hidden-sm hidden-md'>" . $u->telefono . "</td>" .
                                       "<td>" . $u->estado . "</td>" .
                                       "<td class='hidden-xs hidden-sm hidden-md'>" . $u->codigopostal . "</td>";
                            }
                              }else{
                                   echo "sin registros";
                                    }
                                  ?>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                                       
                      
                    
                  </div><!-- /.box-body -->
                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Enviar</button>
                  </div>
                </form>
              </div><!-- /.box -->
            </div>
        </div>
</section>
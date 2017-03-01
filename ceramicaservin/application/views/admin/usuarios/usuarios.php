<section class="content">
          <div class="row">
            <!-- left column -->
            <div class="col-md-12">
              <!-- general form elements -->
              <div class="box box-primary">

                <div class="with-border">
                  <div class="row">
                    <div class="box-header with-border">
                      <div class="col-md-offset-5 col-md-10">
                        <h1 class="box-title"><dt>Usuarios Registrados</dt></h1>
                      </div>
                    </div>
                  </div>
                </div><!-- /.with-border -->

                <table class="table table-responsive table-striped table-bordered table-hover table-condensed">
                                        <tr>
                                            <td colspan="4"><a href="agregarusuarios"><button type='button' class='btn btn-primary btn-xs'>Agregar nuevo usuario</button></a></td>
                                            <td colspan="4"><a href="<?php echo base_url();?>index.php/Admin">
                                            <!---<button type='button' class='btn btn-primary btn-xs'>Registro de Direcciones</button></a></td> -->
                                        </tr>
                                        <tr>
                                            <td colspan="4"> </td>
                                        </tr>
                                        <tr style="color:blue;">
                                            <td><strong>Imagen</strong></td>
                                            <td><strong>Nombre</strong></td>
                                            <td><strong>E-mail</strong></td>
                                            <td class="hidden-xs hidden-sm"><strong>Contraseña</strong></td>
                                            <td class="hidden-xs hidden-sm"><strong>Dirección</strong></td>
                                            <td class="hidden-xs hidden-sm hidden-md"><strong>Teléfono</strong></t>
                                            <td class="hidden-xs hidden-sm"><strong>Estado</strong></td>
                                            <td class="hidden-xs hidden-sm hidden-md"><strong>Código Postal<strong></td>
                                            <td class="hidden-xs hidden-sm"><strong>Privilegios<strong></td>
                                            <td colspan="2"><strong>Acciones</strong></td>
                                        </tr>
                                    <?php
                                    
                                    if(isset($user)){
                                    foreach ($user as $u){
                                        echo    "<tr><td>" . $u->avatar . "</td>" .
                                                "<td>" . $u->nombre . "</td>" .
                                                "<td>" . $u->email . "</td>" .
                                                "<td>" . $u->password ."</td>". 
                                                "<td class='hidden-xs hidden-sm'>" . $u->direccion . "</td>" .
                                                "<td class='hidden-xs hidden-sm hidden-md'>" . $u->telefono . "</td>" .
                                                "<td class='hidden-xs hidden-sm'>" . $u->estado . "</td>" .
                                                "<td class='hidden-xs hidden-sm'>" . $u->cpostal . "</td>" .
                                                
                                               // "<td><button type='button' class='btn btn-primary btn-xs' data-toggle='modal' data-target='#$c->iddireccion'> Dirección</button> </td>".
                                                "<td class='hidden-xs hidden-sm'>";

                                                $privilegios = ($u->privilegios == 0) ? "usuario" : "administrador"; 
                                                echo "<a href='../Usuarios/upPrivilegios/$u->idUsuario/$u->privilegios'>$privilegios</a></td>";

                                                echo "<td class='hidden-xs hidden-sm'><a href='../Usuarios/actualizarusuarios/$u->idUsuario'>Modificar</a></td>".
                                                        "<td class='hidden-md hidden-lg'><a href='../Usuarios/actualizarusuarios/$u->idUsuario'><img src='<?php echo base_url();?>images/act.png'></a></td>".
                                                    "<td class='hidden-xs hidden-sm'><a href='../Usuarios/delUsuario/$u->idUsuario'>Eliminar</a></td>".
                                                        "<td class='hidden-md hidden-lg'><a href='../Usuarios/delUsuario/$u->idUsuario'><img src='<?php echo base_url();?>images/act.png'></a></td>";


                                    
                                            /*echo "<td class='hidden-xs'><a href='frmUpUsuario/$c->idusuario'>Modificar</a></td>".
                                                     "<td class='hidden-xs'><a href='frmUpUsuario/$c->idusuario'><button class='btn btn-info visible-xs hidden-lg hidden-md hidden-sm' type='submit'>
                                                <span>M</span></button></a></td>"
                                                    . "<td><a href='delUsuario/$c->idusuario'>Eliminar</a></td></tr>";*/
                                        }
                                    }else{
                                        echo "sin registros";
                                    }
                                
                                    ?>
                </table>
              </div><!-- /.box box-primary -->
            </div>
        </div>
</section>
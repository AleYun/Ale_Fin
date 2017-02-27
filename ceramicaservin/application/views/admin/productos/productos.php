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
                        <h1 class="box-title"><dt>Productos Registrados</dt></h1>
                      </div>
                    </div>
                  </div>
                </div><!-- /.with-border -->

                <table class="table table-responsive table-striped table-bordered table-hover table-condensed">
                                        <tr>
                                            <td colspan="5"><a href="agregarproductos"><button type='button' class='btn btn-primary btn-xs'>Agregar nuevo producto</button></a></td>
                                            <td colspan="4"><a href="<?php echo base_url();?>index.php/Admin/categoria"><button type='button' class='btn btn-primary btn-xs'>Registro de Categorías</button></a></td>
                                        </tr>
                                        <tr style="color:blue;">
                                            <td><strong>Imagen</strong></td>
                                            <td><strong>Nombre</strong></td>
                                            <td><strong>Descripción</strong></td>
                                            <td><strong>Código</strong></td>
                                            <td><strong>Precio Lista</strong></td>
                                            <td class="hidden-xs hidden-sm"><strong>Stock<strong></td>
                                            <td class="hidden-xs hidden-sm"><strong>Categoría<strong></td>
                                            <td colspan="2"><strong>Acciones</strong></td>
                                        </tr>
                                    <?php
                                    
                                    if(isset($producs)){
                                    foreach ($producs as $p){
                                        echo    "<tr><td><img src=' echo base_url();'images/img/''>" . $p->imagen . "</td>" .
                                                "<td>" . $p->nombrePro . "</td>" .
                                                "<td>" . $p->descriPro . "</td>" .
                                                "<td>" . $p->codigo . "</td>" .
                                                "<td>" ."$ ". $p->precio .".00"."</td>".
                                                "<td>" . $p->stock ."</td>".
                                                "<td>" . $p->nombrecategoria ."</td>";
                                                /*
                                                "<td class='hidden-xs hidden-sm'>";
                                                $statu = ($p->status == 0) ? "inactivo" : "activo"; 
                                                echo "<a href='../Proveedores/upStatus/$p->idclientes/$p->status'>$statu</a></td><td class='hidden-xs hidden-sm'>";

                                                $privilegio = ($p->privilegios == 0) ? "usuario" : "administrador"; 
                                                echo "<a href='../Proveedores/upPrivilegios/$p->idclientes/$p->privilegios'>$privilegio</a></td>";
                                                */

                                                echo "<td class='hidden-xs hidden-sm'><a href='../Productos/actualizarproductos/$p->idProducto'>Modificar</a></td>".
                                                        "<td class='hidden-md hidden-lg'><a href='../Productos/actualizarproductos/$p->idProducto'><img src='<?php echo base_url();?>images/act.png'></a></td>".
                                                    "<td class='hidden-xs hidden-sm'><a href='../Productos/delProducto/$p->idProducto'>Eliminar</a></td>".
                                                        "<td class='hidden-md hidden-lg'><a href='../Productos/delProducto/$p->idProducto'><img src='<?php echo base_url();?>images/act.png'></a></td>";
                                    
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
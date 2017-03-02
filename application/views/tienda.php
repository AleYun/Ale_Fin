 <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Tienda
                        <strong>Servín</strong>
                    </h2>
                    <hr>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Realiza
                        <strong>Tus compras</strong>                        
                    </h2>
                    <hr>
            </div>
 
            <div class="container_12">
                <div class="grid_6" id="articulos_muestra">
                    <?php
                    foreach ($productos as $productos) {
                     ?>
                        <?= form_open(base_url() . 'tienda/insert') ?>
                        <div class="grid_2" id="prod_individual">
                          <div class="grid_2 alpha"><img src="<?=base_url('imagenes/' . $producto->imagen)?> "></div>
                         <div class="grid_2" id="nombre"><?=$producto->nombre?></div>
                         <br>
 
                            <div class="grid_2">Cantidad
                                <select name="qty">
                                   <option value="1">1</option>
                                   <option value="2">2</option>
                                   <option value="3">3</option>
                               </select>
                         </div>
                         <br>
 
                         <div class="grid_2" id="precio"><label>Precio</label><?=$producto->precio?></div>
                <br>
                         <?= form_hidden('id', $productos->id) ?>
                         <?= form_submit('action', 'Agregar al carrito') ?>
                     </div>
                     <?= form_close() ?>
                     <?php } ?>
             </div>
 
 
                 <?php
                    //si el carrito contiene productos los mostramos
                    if ($carrito = $this->cart->contents()) {
                     ?>
                     <div class="grid_6" id="contenidoCarrito">
                            <div class="grid_7" id="head_cart">
                                <div class="grid_2">Nombre</div>
                                <div class="grid_1">Precio</div>
                                <div class="grid_1">Cantidad</div>
                                <div class="grid_1">Eliminar</div>
                                <div class="grid_1">Restar</div>
                            </div>
                            <?php
                            foreach ($carrito as $item) {
                               ?>
                               <div class="grid_7" id="productos_carrito">
                                                 <div class="grid_2"><?= ucfirst($item['name']) ?></div>
 
                                 <?php
                                 $nombres = array('nombre' => ucfirst($item['name']));
                                 $precio = array();
                                 $precio = $item['price'];
                                    ?>
 
                                 <div class="grid_1"><?= number_format($item['price'] * $item['qty'], 2, ',', '.') ?></div>
                                    <div class="grid_1"><?= $item['qty'] ?></div>
 
                                    <div class="grid_1"><?= anchor(base_url('tienda/eliminar_producto/' . $item['rowid']),              'Eliminar') ?></div>
                                    <div class="grid_1"><?= anchor(base_url('tienda/restar_producto/' . $item['rowid']), 'Restar') ?></div>
                             </div>
                             <?php
                         }
 
                         ?>
                            <div class="grid_7" id="total">
                                <div class="grid_7" id="total_price">
                                 <strong>Total: </strong><?=number_format($this->cart->total(), 2, ',', '.');?> euros.
                             </div>
                             <div class="grid_7" id="pagar"><?= anchor(base_url('tienda/paypal'), 'Pagar con paypal')?></div>
                             <div class="grid_7"
                                     id="vaciar_carrito"><?= anchor(base_url('tienda/vaciar_carrito'), 'Vaciar carrito')?></div>
                         </div>
                     </div>
                     <?php
                 }
                 ?>
 
         
            </div>

        </div>
        </div>
</div>
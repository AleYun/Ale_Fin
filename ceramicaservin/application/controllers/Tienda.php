<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tienda extends CI_controller{

	public function __construct(){
	$this->load->database('default');
	$this->load->helper(array(('url','form'));
	$this->load->library(array('cart', 'session'));
	$this->load->model('Tienda_model');
	}

	public function index(){
		$data = array('titulo'=>'Tienda con paypal', 'productos' => $this->Tienda_model->productos());
		$data->load->view('tienda', $data);
	}

	public function paypal(){
		$config['business'] = '';//email que debe cobrar los productos
        $config['cpp_header_image'] = ''; //Url de una imagen de 750 px ancho por 90 px de alto
        $config['return'] = base_url('Tienda/success');//donde nos retorna si todo sale bien con los datos
        $config['cancel_return'] = base_url('Tienda');si el usuario cancela desde paypal
        $config['notify_url'] = base_url('Tienda/data_paypal_post'); //IPN Post, en return hacemos esto
        $config['production'] = false; //Poner en falso para utilizar sandbox, true para paypal
        $config['discount_rate_cart'] = 10; //Si queremos aplicar descuento
        $config["invoice"] = rand(1000,10000); //El id de la factura, por supuesto hay que poner otro
 
        $this->load->library('paypal', $config);
 
        $carrito = $this->cart->contents();
 
        foreach($carrito as $rows)
        {
            $this->paypal->add($rows['name'],$rows['price'],$rows['qty']);
        }
 
        $this->paypal->pay();
	}

	public function insert()
    {
        $idProducto = $this->input->post('idProducto');
        $productos = $this->Tienda_model->producto_id($id);
        $cantidad = $this->input->post('qty');
 
        $carrito = $this->cart->contents();
 
        foreach ($carrito as $item) {
            if ($item['id'] == $id) {
                $cantidad = $cantidad + $item['qty'];
            }
        }
 
 
        $insert = array(
            'idProducto' => $id,
            'qty' => $cantidad,
            'price' => $productos->precio,
            'name' => $productos->nombrePro
        );
 
        $this->cart->insert($insert);
 
        redirect(base_url('Tienda'));
    }
 
    public function eliminar_producto($rowid)
    {
 
        $productos = array(
            'rowid' => $rowid,
            'qty' => 0
        );
 
        $this->cart->update($productos);
 
        redirect(base_url('Tienda'));
    }
 
    public function restar_producto($rowid)
    {
 
        $carrito = $this->cart->contents();
 
        foreach ($carrito as $item) {
            if ($item['rowid'] == $rowid && $item['qty'] > 0) {
                $qty = $item['qty'];
                $cantidad = $qty - 1;
                $precio = $item['price'] * $qty;
                $nombrePro = $item['name'];
            }
        }
 
        $productos = array(
            'rowid' => $rowid,
            'qty' => $cantidad,
            'price' => $precio,
            'name' => $nombrePro
        );
 
        $this->cart->update($productos);
 
        redirect(base_url('Tienda'));
    }
 
    public function vaciar_carrito()
    {
        $this->cart->destroy();
        redirect(base_url('Tienda'));
    }
 
    public function success()
    {
        $this->cart->destroy();
        print_r($_POST);
    }
}
}
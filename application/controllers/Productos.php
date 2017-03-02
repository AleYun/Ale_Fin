<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Productos extends CI_controller{
	
	public function __construct(){
		parent::__construct();
		$this->load->model('Productos_model');
	}


	public function getProductos($id=null){
		$data['producs']=$this->Productos_model->getProductos($id);
		$this->load->view('admin/plantilla',$data);
	} 


	public function addProducto(){
		$i = $this->input->post('imagen');
		$n = $this->input->post('nombre');
		$de = $this->input->post('descri');
		$c = $this->input->post('codigo');
		$p = $this->input->post('precio');
		$s = $this->input->post('stock');
		$cat = $this->input->post('categoria');

		$this->Productos_model->addProducto($i_mod, $n, $de, $c, $p, $s, $cat);
		redirect('Admin/productos');



	}

	public function actualizarproductos($id){
		$data['producs'] = $this->Productos_model->getProductos($id);
		$data['content'] = 'admin/productos/actualizarproductos';
		$data['nombre'] = $this->session->userdata('producs');
           $data['id'] = $this->session->userdata('id');
            $data['producs'] = $this->Productos_model->getProductos($id);
            $data['cat']=$this->Productos_model->getcategorias();
		$this->load->view('admin/plantilla', $data);
	}

	public function upProducto(){
		$id = $this->input->post('idProducto');
		$i = $this->input->post('imagen');
		$n = $this->input->post('nombre');
		$de = $this->input->post('descri');
		$c = $this->input->post('codigo');
		$p = $this->input->post('precio');
		$s = $this->input->post('stock');
		$cat = $this->input->post('categoria');


		$this->Productos_model->upProducto($id, $i, $n, $de, $c, $p, $s, $cat);

		redirect('Admin/productos');
	}

	public function delProducto($id){
        $this->Productos_model->delProducto($id);
        
        redirect('Admin/productos');
    }

}

?>
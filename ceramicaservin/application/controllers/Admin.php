<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct(){
		parent::__construct();
		$this->load->model('Usuarios_model');
		$this->load->model('Comentarios_model');
		$this->load->model('Ventas_model');
		$this->load->model('Productos_model');
		$this->load->model('Categoria_model');	
		$this->load->model('Detalleventas_model');		
		//$this->load->model('Ventas_model');
	}

	/*public function index() {
        $data['titulo'] = 'Inicio';
        $data['contenido'] = 'index';
        $data['nombre'] = '';
        $this->load->view('admin/plantilla', $data);
    }*/
	
	public function index(){
		$config   =  array ( 
        'start_day'     =>  'domingo' , 
        'month_type'    =>  'largo' , 
        'day_type'      =>  'corto' 
		);
		$data['calendario'] = $this->load->library('calendar', $config);
		$this->benchmark->mark("inicio");
		$data['contenido'] = 'admin/inicio';
		$data['nombre'] = $this->session->userdata('usuario');
          $data['id'] = $this->session->userdata('id');
		$this->load->view('admin/plantilla', $data);
		$this->benchmark->mark("fin");
	}

	public function usuarios(){
		$data['contenido'] = 'admin/usuarios/usuarios';
		$data['nombre'] = $this->session->userdata('nombre');
            $data['id'] = $this->session->userdata('id');
        $data['user']=$this->Usuarios_model->getUsuarios();
		$this->load->view('admin/plantilla', $data);
	}
	public function agregarusuarios(){
		$data['contenido'] = 'admin/usuarios/agregarusuarios';
		$data['nombre'] = $this->session->userdata('usuario');
            $data['id'] = $this->session->userdata('id');
        //$data['dir']=$this->Direccion_model->addDireccion($e, $ci, $co, $col, $ca, $num);
		$this->load->view('admin/plantilla', $data);
	}
	public function actualizarusuario(){
		$data['contenido'] = 'admin/productos/actualizarusuario';
		$data['nombre'] = $this->session->userdata('usuario');
            $data['id'] = $this->session->userdata('id');

		$this->load->view('admin/plantilla', $data);
	}

	public function ventas(){
		$data['contenido'] = 'admin/ventas/ventas';
		$data['nombre'] = $this->session->userdata('usuario');
            $data['id'] = $this->session->userdata('id');
        $data['vents']=$this->Ventas_model->getVentas();
        $data['detalle']=$this->Detalleventas_model->getDetalleventas();
		$this->load->view('admin/plantilla', $data);
	}

	public function productos(){
		$data['contenido'] = 'admin/productos/productos';
		$data['nombre'] = $this->session->userdata('usuario');
        $data['id'] = $this->session->userdata('id');
        //$data['imagen'] = $i_mod;
        $data['producs']=$this->Productos_model->getProductos();
		$this->load->view('admin/plantilla', $data);
	}
	public function agregarproductos(){
		$data['contenido'] = 'admin/productos/agregarproductos';
		$data['nombre'] = $this->session->userdata('usuario');
            $data['id'] = $this->session->userdata('id');
            $data['cat']=$this->Productos_model->getcategorias();
		$this->load->view('admin/plantilla', $data);
	}
	public function actualizarproductos(){
		$data['contenido'] = 'admin/productos/actualizarproductos';
		$data['nombre'] = $this->session->userdata('usuario');
            $data['id'] = $this->session->userdata('id');
		$this->load->view('admin/plantilla', $data);
	}




	public function categoria(){
		$data['contenido'] = 'admin/categoria/categoria';
		$data['nombre'] = $this->session->userdata('usuario');
        $data['id'] = $this->session->userdata('id');
        $data['cat']=$this->Categoria_model->getCategorias();
		$this->load->view('admin/plantilla', $data);
	}
	public function agregarcategoria(){
		$data['contenido'] = 'admin/categoria/agregarcategoria';
		$data['nombre'] = $this->session->userdata('usuario');
        $data['id'] = $this->session->userdata('id');
        $data['cat']=$this->Categoria_model->getcategorias();
        //$data['proveedor']=$this->Productos_model->getproveedores();
		$this->load->view('admin/plantilla', $data);
	}




	public function comentarios(){
		$data['contenido'] = 'admin/comentarios/comentarios';
		$data['nombre'] = $this->session->userdata('usuario');
            $data['id'] = $this->session->userdata('id');
        $data['coments']=$this->Comentarios_model->getComentarios();
		$this->load->view('admin/plantilla', $data);
	}
	public function agregarcomentarios(){
		$data['contenido'] = 'admin/comentarios/agregarcomentarios';
		$data['nombre'] = $this->session->userdata('usuario');
            $data['id'] = $this->session->userdata('id');
		$this->load->view('admin/plantilla', $data);
	}
}



?>
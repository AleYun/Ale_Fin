<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Micontrolador extends CI_Controller
{
	public function __construct() {
        parent::__construct();
        $this->load->model('Categoria_model');
        $this->load->model('Productos_model');
        $this->load->model('Usuarios_model');
    }

    public function index(){
    	$data['contenido'] = 'inicio';
        $data['title'] = 'Página de inicio';
    	$this->load->view('plantilla', $data);
    }

    public function admin(){

        if ($this->session->userdata('login')) {
            $data['contenido'] = 'inicio';
            $data['nombre'] = $this->session->userdata('nombre');
            $this->load->view('plantilla', $data);
        }else{
            $this->index();
        }
    }

    public function usuario(){

        if ($this->session->userdata('login')) {
            $data['contenido'] = 'inicio';
            $data['nombre'] = $this->session->userdata('nombre');
            $this->load->view('plantilla', $data);
        }else{
            $this->index();
        }
    }

    public function nosotros(){
    	$data['contenido'] = 'nosotros';
        $data['title'] = 'Página de la empresa';
    	$this->load->view('plantilla', $data);
    }

    public function proceso(){
    	$data['contenido'] = 'proceso';
    	$this->load->view('plantilla', $data);
    }

    public function galeria(){
    	$data['contenido'] = 'galeria';
    	$this->load->view('plantilla', $data);
    }

     public function cabanas(){
        $data['contenido'] = 'cabanas';
        $this->load->view('plantilla', $data);
    }

    public function contacto(){
    	$data['contenido'] = 'contacto';
    	$this->load->view('plantilla', $data);
    }

    public function registro(){
        $data['contenido'] = 'registro';
        $this->load->view('plantilla', $data);
    }  

    public function logi(){
      $data['contenido'] = 'login';
        $this->load->view('plantilla', $data);
}
	
}
<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Ventas extends CI_controller{
	
	public function __construct(){
		parent::__construct();
		$this->load->model('Ventas_model');
	}


	public function getVentas($id=null){
		$data['vents']=$this->Ventas_model->getVentas($id);
		$this->load->view('admin/plantilla',$data);
	} 
	public function addVenta(){
		$f = $this->input->post('fecha');
		$m = $this->input->post('montofinal');

		$this->Ventas_model->addVenta($n, $m, $u, $p, $s);
		redirect('Micontrolador/ventas');

	}


	public function delVenta($id){
        $this->Ventas_model->delVenta($id);
        
        redirect('Micontrolador/ventas');	
    }
}

?>
<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Comentarios extends CI_controller{
	
	public function __construct(){
		parent::__construct();
		$this->load->model('Comentarios_model');
	}


	public function getComentarios($id=null){
		$data['coments']=$this->Comentarios_model->getComentarios($id);
		$this->load->view('admin/plantilla',$data);
	} 
	public function addComentario(){
		$this->form_validation->set_error_delimiters('<div style="color:red">', '</div>');
		if ($this->form_validation->run('contacto') == FALSE) {
			

			$data['contenido'] = 'contacto';
			$data['title'] = 'Página de contacto';

			$this->load->view('plantilla', $data);
		}else{

			$n = $this->input->post('nombre');
			$e = $this->input->post('email');
			$m = $this->input->post('mensaje');
			$us = $this->input->post('usuario');

			$this->Comentarios_model->addComentario($n, $e, $m, $us);
			redirect('Micontrolador/contacto');

		}
	}

	public function delComentario($id){
        $this->Comentarios_model->delComentario($id);
        
        redirect('Admin/comentarios');
    }

    public function upStatus($id, $statu){
		$statu = ($statu == 0) ? 1 : 0;

		$this->Comentarios_model->upStatus($id, $statu);

		redirect('Admin/comentarios');
	}
}

?>
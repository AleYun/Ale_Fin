<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Usuarios extends CI_controller
{
	
	public function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('Usuarios_model');
	}

	public function index(){
		$this->load->view('login');
	}

	public function inicioSes(){
		$this->form_validation->set_rules('email', 'Email', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		if ($this->form_validation->run()==TRUE) {
			$e = $this->input->post('email');
			$p = $this->input->post('password');	
			$user=$this->Usuarios_model->login($e,$p);
			if ($user==TRUE) {
				$da=$this->Usuarios_model->dato($e);

				$user_array = array(

					'nombre' => $da->idUsuario,
					'email' => $e,
					'password' => $p,
					'direccion' => $d,
					'telefono' => $t,
					'estado' => $es,
					'cpostal' => $c,
					'login' => TRUE,
					'privilegios' => $da->privilegios
					);

				$this->session->set_userdata($user_array);
				if ($da->privilegios== 1) {
					redirect('Micontrolador/admin');
				}
				if ($da->privilegios== 0) {
					redirect('Micontrolador/usuario');
				}
				}else{
					$data['nombre'] = $this->session->userdata('');
					$data['contenido'] = 'inicio';
       				$data['title'] = 'Página de inicio';
    				$this->load->view('plantilla', $data);
    			}
				}else{
					$data['nombre'] = $this->session->userdata('');
					$data['contenido'] = 'inicio';
       				$data['title'] = 'Página de inicio';
    				$this->load->view('plantilla', $data);
				}
	}

	public function logout(){
		$user_array = array('login' => FALSE);
		$this->session->set_userdata($user_array);
		$data['nombre'] = '';
		$data['contenido'] = 'inicio';
       	$data['title'] = 'Página de inicio';
       	$this->load->view('plantilla', $data);

	}

	public function registro(){
		$this->load->view('plantilla/registro', $data);
	}


	public function getUsuarios($id=null){
		$data['user']=$this->Usuarios_model->getUsuarios($id);
		$this->load->view('admin/plantilla',$data);
	}

	public function frmUsuario(){
		$this->load->view('frmUsuario');
	}

	public function addUsuario(){
		$n = $this->input->post('nombre');
		$e = $this->input->post('email');
		$p = $this->input->post('password');
		$d = $this->input->post('direccion');
		$t = $this->input->post('telefono');
		$es = $this->input->post('estado');
		$c = $this->input->post('cpostal');

		$this->Usuarios_model->addUsuario($n, $e, $p, $d, $t, $es, $c);
		
		redirect('Admin/usuarios'); 
	}

	public function actualizarusuarios($id){
		$this->load->model('Usuarios_model');
		$data['content'] = 'admin/usuarios/actualizarusuarios';
		$data['nombre'] = $this->session->userdata('usuario');
		$data['id'] = $this->session->userdata('id');
		$data['usuario'] = $this->Usuarios_model->getUsuarios($id);
		$this->load->view('admin/plantilla', $data);
	}

	public function upUsuario(){
		$id = $this->load->post('idUsuario');
		$n = $this->load->post('nombre');
		$e = $this->load->post('email');
		$p = $this->load->post('password');
		$d = $this->load->post('direccion');
		$t = $this->load->post('telefono');
		$es = $this->load->post('estado');
		$c = $this->load->post('cpostal');
		$a = $this->load->post('avatar');

		$this->Usuarios_model->upUsuario($id, $n, $e, $p, $d, $t, $es, $c, $a);

		redirect('Admin/usuarios');

	}

	public function delUsuario($id){
		$this->Usuarios_model->delUsuario($id);
		redirect('Admin/usuarios');
	}

	public function upPrivilegios($id, $privilegios){
		$privilegios = ($privilegios == 0) ? 1 : 0;
		$this->Usuarios_model->upPrivilegios($id, $privilegios);
		redirect('Admin/usuarios');
	}

	public function log(){
		$this->form_validation->set_error_delimiters('<div style="color:red"','</div>');
		if ($this->form_validation->run('login') == FALSE) {
			$data['contenido'] = 'login';
			$data['title'] = 'Iniciar Sesión';
			$this->load->view('plantilla', $data);
		}else{
			$e = $this->input->post('email');
			$p = $this->input->post('password');

			$usuario = $this->Usuarios_model->login($e, $p);
			if ($usuario) {
				$arreglo_usuario = array(
								'idUsuario' => $usuario->idUsuario,
								'avatar' => $usuario->avatar,
								'nombre' => $usuario->nombre,
								'email' => $usuario->email,
								'password' => $usuario->password,
								'direccion' => $usuario->direccion,
								'telefono' => $usuario->telefono,
								'estado' => $usuario->estado,
								'cpostal' => $usuario->cpostal,
								'privilegios' => $usuario->privilegios,
								'autentificado' =>TRUE
				);
				$this->session->set_userdata($arreglo_usuario);
				redirect('Usuarios/logueado');
			}else{
				redirect('Micontrolador/login');
			}
		}
	}

	public function logueado(){
		if ($this->session->userdata('autentificado')) {
			$confing = array(
			'start_day'   =>  'domingo',
			'month_type'  =>  'largo',
			'day_type'	  =>  'corto', 
			);
			$data['calendario'] = $this->load->library('calendar', $confing);
			$data['content'] = 'admin/inicio';
			redirect('Micontrolador');
		}else{
			redirect('usuario/index');
		}
	}

	public function cerrarSesion(){
		$arreglo_usuario = array('autentificado' => FALSE);
		$this->session->set_userdata($arreglo_usuario);
		$this->session->sess_destroy();
		redirect('Micontrolador/logi');
	}
}
?>
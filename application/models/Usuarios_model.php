<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Usuarios_model extends CI_Model{
	
	public function __construct(){
		parent::__construct();
	}

	public function login($e,$p){
		$this->db->select('password');
		$this->db->from('usuarios');
		$this->db->where('email', $e);

		$sql = $this->db->get();
		return $sql->row();
		
	}

	public function dato($e){
		$this->db->from('usuarios');
		$this->db->where('email', $e);
		$sql = $this->db->get();
		return $sql->row();
	}



	public function getUsuarios($id = null){
	$this->db->select('*');
	$this->db->from('usuarios');
	$this->db->where('idUsuario > 1');

	if ($id != null) {
		$this->db->where('idUsuario', $id);
	}
	$sql = $this->db->get();

	if ($sql->num_rows() > 0) {
		return $sql->result();
	}
	}


	public function loging($e, $p){
			$this->db->select('*');
	        $this->db->from('usuarios');
	        $this->db->where('email', $e);
	        $sql=$this->db->get();
	        

	        if ($sql->num_rows() > 0) {
		        	$this->db->select('*');
			        $this->db->from('usuarios');
			        $this->db->where('email', $e);
			        $this->db->where('password', $p);
			        $sql=$this->db->get();
			        if ($sql->num_rows() > 0) {

			        	return $sql = $sql->row();

			        } else {
			        	$this->session->set_flashdata('mensaje','<div style="color:red">La contraseña introducida es incorrecta</div>'); 
			        }

			} else {
				$this->session->set_flashdata('mensaje2','<div style="color:red">El email introducido es incorrecto</div>'); 
			}
			
		}

		public function addUsuario($n, $e, $p, $d, $t, $es, $c){
			$data = array(
					'idUsuario'=>0,
					'nombre'=>$n,
					'email'=>$e,
					'password'=>$p,
					'direccion'=>$d,
					'telefono'=>$t,
					'estado'=>$es,
					'cpostal'=>$c
					
					
				);

			return $this->db->insert('usuarios',$data);

		}


		public function upUsuario($id, $n, $e, $p, $d, $t, $es, $c, $a){
			$data = array(
					'nombre'=>$n,
					'email'=>$e,
					'password'=>$p,
					'direccion'=>$d,
					'telefono'=>$t,
					'estado'=>$es,
					'cpostal'=>$c,
					'avatar'=>$a
				);

			$this->db->where('idUsuario', $id);
			return $this->db->update('usuarios',$data);

		}

		 public function delUsuario($id){
    //DELETE FROM Usuario WHERE $idcliente = $id
        $this->db->where('idUsuario', $id);
        return $this->db->delete('usuarios');
    }

		/*public function upStatus($id, $privilegio){
			$data = array(
					'status'=>$privilegio
				);

			$this->db->where('idclientes', $id);
			return $this->db->update('clientes', $data);
		}*/

		public function upPrivilegios($id, $privilegios){
			$data = array(
					'privilegios'=>$privilegios
				);

			$this->db->where('idUsuario', $id);
			return $this->db->update('usuarios', $data);
		}
	}
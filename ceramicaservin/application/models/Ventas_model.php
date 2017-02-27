<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Ventas_model extends CI_Model{
		public function __construct(){
			parent::__construct();
		}

		public function getVentas($id = null){
        $this->db->select('*');
        //$this->db->from('ventas');
        $this->db->from('ventas','usuarios', 'detalleventas');
        $this->db->join('usuarios', 'usuarios.idUsuario = ventas.idUsuario');
        $this->db->join('detalleventas', 'detalleventas.idVentas = ventas.idVentas');

        if($id != null){
            $this->db->where('idVentas', $id);
        }
        $sql = $this->db->get();   
        
        if($sql->num_rows() > 0){
            return $sql->result();
        }
    }

		public function addVenta($f, $m){
			$data = array(
					'idVentas'=>0,
					'fecha'=>$f,
					'montoFinal'=>$m
				);

			return $this->db->insert('ventas',$data);

		}


		public function upVenta($id, $f, $m){
			$data = array(
					
					'fecha'=>$f,
					'montoFinal'=>$m
				);

			$this->db->where('idVentas', $id);
			return $this->db->update('ventas',$data);

		}

		 public function delVenta($id){
    //DELETE FROM Usuario WHERE $idproveedor = $id
        $this->db->where('idVentas', $id);
        return $this->db->delete('ventas');
    	}

	}
?>
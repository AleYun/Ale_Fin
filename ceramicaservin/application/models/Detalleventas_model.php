<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Detalleventas_model extends CI_Model{
		public function __construct(){
			parent::__construct();
		}

		public function getDetalleventas($id = null){
        $this->db->select('*');
        //$this->db->from('ventas');
        $this->db->from('detalleventas', 'ventas','productos');
        $this->db->join('ventas', 'ventas.idVentas = detalleventas.idVentas');
        $this->db->join('productos', 'productos.idProducto = detalleventas.idProducto');
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
					'fechaVenta'=>$f,
					'montofinal'=>$m
				);

			return $this->db->insert('ventas',$data);

		}


		public function upVenta($id, $f, $m){
			$data = array(
					
					'fechaVenta'=>$f,
					'montofinal'=>$m
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
<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Compras_model extends CI_Model{
		public function __construct(){
			parent::__construct();
		}

		public function getCompras($id = null){
        $this->db->select('*');
        //$this->db->from('ventas');
        $this->db->from('compras','usuarios', 'detalleventas');
        $this->db->join('usuarios', 'usuarios.idUsuario = compras.idUsuario');
        $this->db->join('detalleventas', 'detalleventas.idCompra = compras.idCompra');

        if($id != null){
            $this->db->where('idCompra', $id);
        }
        $sql = $this->db->get();   
        
        if($sql->num_rows() > 0){
            return $sql->result();
        }
    }

		public function addCompra($fc, $mc, $rf){
			$data = array(
					'idCompra'=>0,
					'fechaCompra'=>$fc,
					'montoCompra'=>$mc,
					'refpago'=>$rf
				);

			return $this->db->insert('compras',$data);

		}


		public function upCompra($id, $fc, $mc, $rf){
			$data = array(
					
					'fechaCompra'=>$f,
					'montoCompra'=>$m,
					'refpago'=>$rf
				);

			$this->db->where('idCompra', $id);
			return $this->db->update('compras',$data);

		}

		 public function delCompra($id){
    //DELETE FROM Usuario WHERE $idproveedor = $id
        $this->db->where('idCompra', $id);
        return $this->db->delete('compras');
    	}

	}
?>
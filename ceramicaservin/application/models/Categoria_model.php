<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Categoria_model extends CI_Model{
		public function __construct(){
			parent::__construct();
		}

		public function getCategorias($id = null){
        $this->db->select('*');
        $this->db->from('categoria');
        if($id != null){
            $this->db->where('idCategoria', $id);
        }
        $sql = $this->db->get();   
        
        if($sql->num_rows() > 0){
            return $sql->result();
        }
    }
		public function addCategoria($n, $d){
			$data = array(
					'idCategoria'=>0,
					'nombreCate'=>$n,
					'descripCate'=>$d
					
				);

			return $this->db->insert('categoria',$data);

		}


		public function upCategoria($id, $n, $d){
			$data = array(
					'nombreCate'=>$n,
					'descripCate'=>$d
				);

			$this->db->where('idCategoria', $id);
			return $this->db->update('categoria',$data);

		}

		 public function delCategoria($id){
    //DELETE FROM Usuario WHERE $idproveedor = $id
        $this->db->where('idCategoria', $id);
        return $this->db->delete('categoria');
    }
	}
?>
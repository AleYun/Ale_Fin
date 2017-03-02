<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Productos_model extends CI_Model{
		public function __construct(){
			parent::__construct();
		}

		public function getProductos($id = null){
        $this->db->select('*');
        $this->db->from('productos','categoria');
        $this->db->join('categoria', 'categoria.idCategoria = productos.idCategoria');
        if($id != null){
            $this->db->where('idProducto', $id);
        }
        $sql = $this->db->get();   
        
        if($sql->num_rows() > 0){
            return $sql->result();
        }
    }

		
		public function addProducto($i_mod, $n, $de, $c, $p, $s, $cat){
			$data = array(
					'idProducto'=>0,
					'imagen'=>$i_mod,
					'nombrePro'=>$n,
					'descriPro'=>$de,
					'codigo'=>$c,
					'precio'=>$p,
					'stock'=>$s,
					'idcategoria'=>$cat
					
				);

			return $this->db->insert('productos',$data);

		}


		public function upProducto($id, $i, $n, $de, $c, $p, $s, $cat){
			$data = array(
					'imagen'=>$i,
					'nombrePro'=>$n,
					'descriPro'=>$de,
					'codigo'=>$c,
					'precio'=>$p,
					'stock'=>$s,
					'idcategoria'=>$cat
				);

			$this->db->where('idProducto', $id);
			return $this->db->update('productos',$data);

		}

		 public function delProducto($id){
    //DELETE FROM Usuario WHERE $idproveedor = $id
        $this->db->where('idProductos', $id);
        return $this->db->delete('productos');
    }

		/*public function upStatus($id, $privilegio){
			$data = array(
					'status'=>$privilegio
				);

			$this->db->where('idproveedores', $id);
			return $this->db->update('productos', $data);
		}

		public function upPrivilegios($id, $privilegios){
			$data = array(
					'privilegios'=>$privilegios
				);

			$this->db->where('idproveedores', $id);
			return $this->db->update('productos', $data);
		}*/


    public function getcategorias(){
		$this->db->select('*');
        $this->db->from('categoria');
        $sql = $this->db->get();   
        
        if($sql->num_rows() > 0){
            return $sql->result();
        }
	}

	}
?>
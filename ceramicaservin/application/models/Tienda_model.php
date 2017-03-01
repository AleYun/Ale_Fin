<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Created by JetBrains PhpStorm.
 * User: isra
 * Date: 24/02/13
 * Time: 12:54
 * To change this template use File | Settings | File Templates.
 */
class Tienda_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
 
    public function productos()
    {
        $query = $this->db->get('productos');
        return $query->result();
    }
 
    public function producto_id($id) {
 
        $this->db->where('idProducto', $id);
        $item = $this->db->get('productos');
 
        return $item->row();
    }
}
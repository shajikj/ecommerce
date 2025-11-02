<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order_model extends CI_Model {

    public function getAllOrders() {
        return $this->db->get('orders')->result_array();
    }

    public function getOrderById($id) {
        return $this->db->get_where('orders', ['id' => $id])->row_array();
    }

    public function addOrder($data) {
        return $this->db->insert('orders', $data);
    }

    public function deleteOrder($id) {
        return $this->db->delete('orders', ['id' => $id]);
    }
}  

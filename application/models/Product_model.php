<?php
class Product_model extends CI_Model {

    public function getAllProducts()// this function retrieves all products form the database
    {
        return $this->db->get('products')->result_array();
    }

    public function addProduct($data)// this function adds a new product
    {
        return $this->db->insert('products', $data);
    }

    public function getProductById($id)// this function retrieves a product by its id
    {
        return $this->db->get_where('products', ['id' => $id])->row_array();
    }

    public function updateProduct($id, $data)// this function updates a product by its id
    {
        $this->db->where('id', $id);
        return $this->db->update('products', $data);
    }  

    public function deleteProduct($id)//  this function deletes a product by its id
    {
        $this->db->where('id', $id);
        return $this->db->delete('products');
    }

    
}

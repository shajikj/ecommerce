<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('Product_model');
        $this->load->library('session');
        $this->load->helper(['url', 'form']);
        if (!$this->session->userdata('admin_logged_in')) {
            redirect('adminlogin');
        }
    }

    public function index()
    {
        redirect('admin/products');
        redirect('admin/products');
        redirect('admin/products');
    }

    public function products()
    {
        $data['products'] = $this->Product_model->getAllProducts();
        $this->load->view('admin/header');
        $this->load->view('admin/products_list', $data);
        $this->load->view('admin/footer');
    }

    public function add_product()
    {
        if ($this->input->post()) {
            $data = [
                'name' => $this->input->post('name'),
                'price' => $this->input->post('price'),
                'image' => 'assets/images/' . $_FILES['image']['name']
            ];

            // Upload image
            $config['upload_path'] = './assets/images/';
            $config['allowed_types'] = 'jpg|jpeg|png';
            $this->load->library('upload', $config);
            $this->upload->do_upload('image');

            $this->Product_model->addProduct($data);
            redirect('admin/products');
        } else {
            $this->load->view('admin/header');
            $this->load->view('admin/add_product');
            $this->load->view('admin/footer');
        }
    }

    public function edit_product($id)
    {
        $data['product'] = $this->Product_model->getProductById($id);

        if ($this->input->post()) {
            $update = [
                'name' => $this->input->post('name'),
                'price' => $this->input->post('price')
            ];

            if (!empty($_FILES['image']['name'])) {
                $config['upload_path'] = './assets/images/';
                $config['allowed_types'] = 'jpg|jpeg|png';
                $this->load->library('upload', $config);
                $this->upload->do_upload('image');
                $update['image'] = 'assets/images/' . $_FILES['image']['name'];
            }

            $this->Product_model->updateProduct($id, $update);
            redirect('admin/products');
        } else {
            $this->load->view('admin/header');
            $this->load->view('admin/edit_product', $data);
            $this->load->view('admin/footer');
        }
    }

    public function delete_product($id)
    {
        $this->Product_model->deleteProduct($id);
        redirect('admin/products');
    }

    public function orders()
    {
        $this->load->model('Order_model');
        $data['orders'] = $this->Order_model->getAllOrders();
        $this->load->view('admin/header');
        $this->load->view('admin/orders_list', $data);
        $this->load->view('admin/footer');
    }

    public function delete_order($id)
    {
        $this->load->model('Order_model');
        $this->Order_model->deleteOrder($id);
        redirect('admin/orders');
    }


}

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function __construct()//  constructor to load model, library and helper
    {
        parent::__construct();
        $this->load->model('Product_model');// load product model
        $this->load->library('cart');// load cart library
        $this->load->helper('url');// load url helper
    }


    public function index()
    {
        $data['products'] = $this->Product_model->getAllProducts();// get all products from product model
        $this->load->view('frontend/header');// load header view
        $this->load->view('frontend/home', $data);// load home view with products data
        $this->load->view('frontend/footer');//load footer view
    }

    public function product($id)
    {
        $data['product'] = $this->Product_model->getProductById($id);// get product details by id
        if (empty($data['product'])) {// check if product exists
            show_404(); // show error if invalid id
        }

        $this->load->view('frontend/header');
        $this->load->view('frontend/product_detail', $data);
        $this->load->view('frontend/footer');
    }

    public function add_to_cart($id)
    {
        $product = $this->Product_model->getProductById($id);

        if ($product) {
            $data = array(
                'id' => $product['id'],
                'qty' => 1,
                'price' => $product['price'],
                'name' => $product['name'],
                'image' => $product['image']
            );

            $this->cart->insert($data);
            redirect('home/cart');
        } else {
            show_404();
        }
    }

    public function cart()
    {
        $this->load->view('frontend/header');
        $this->load->view('frontend/cart');
        $this->load->view('frontend/footer');
    }

    public function remove($rowid)
    {
        $this->cart->remove($rowid);
        redirect('home/cart');
    }

    public function checkout()
    {
        if ($this->cart->total_items() <= 0) {
            redirect('home/cart');
        }

        $this->load->view('frontend/header');
        $this->load->view('frontend/checkout');
        $this->load->view('frontend/footer');
    }

    public function place_order()
    {
        if ($this->cart->total_items() <= 0) {
            redirect('home/cart');
        }

        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $phone = $this->input->post('phone');
        $total = $this->cart->total();

        // Save order
        $order_data = array(
            'customer_name' => $name,
            'customer_email' => $email,
            'customer_phone' => $phone,
            'total' => $total
        );

        $this->db->insert('orders', $order_data);
        $order_id = $this->db->insert_id();

        // Save each cart item
        foreach ($this->cart->contents() as $item) {
            $order_item = array(
                'order_id' => $order_id,
                'product_id' => $item['id'],
                'product_name' => $item['name'],
                'quantity' => $item['qty'],
                'price' => $item['price'],
                'subtotal' => $item['subtotal']
            );
            $this->db->insert('order_items', $order_item);
        }

        // Clear cart
        $this->cart->destroy();

        redirect('home/order_success');
    }

    public function order_success()
    {
        $this->load->view('frontend/header');
        $this->load->view('frontend/order_success');
        $this->load->view('frontend/footer');
    }

    public function orders()
    {
        $data['orders'] = $this->db->get('orders')->result_array();

        $this->load->view('admin/header');
        $this->load->view('admin/orders', $data);
        $this->load->view('admin/footer');
    }

    public function order_details($order_id)
    {
        // Get order info
        $data['order'] = $this->db->get_where('orders', ['id' => $order_id])->row_array();
        // Get order items
        $data['items'] = $this->db->get_where('order_items', ['order_id' => $order_id])->result_array();

        $this->load->view('admin/header');
        $this->load->view('admin/order_details', $data);
        $this->load->view('admin/footer');
    }


}

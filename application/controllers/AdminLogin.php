<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminLogin extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Admin_model');
        $this->load->library('session');
        $this->load->helper(['url', 'form']);
    }

    public function index() {
        $this->load->view('admin/login');
    }

    public function auth() {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $admin = $this->Admin_model->check_login($username, $password);

        if ($admin) {
            $this->session->set_userdata('admin_logged_in', true);// 
            redirect('admin/products');// Redirect to admin products page upon successful login
        } else {
            $data['error'] = 'Invalid username or password';
            $this->load->view('admin/login', $data);
        }
    }

    public function logout() {
        $this->session->unset_userdata('admin_logged_in');
        redirect('adminlogin');
    }
}

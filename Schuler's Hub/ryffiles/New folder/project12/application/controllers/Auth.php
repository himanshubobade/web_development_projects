<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct()
        {
         parent::__construct();
         $this->load->model('Form_model');
             $this->load->library(array('form_validation','session'));
                 $this->load->helper(array('url','html','form'));
                 $this->admin_id = $this->session->userdata('admin_id');
        }

        public function index()
    {
        $data['err_data'] = "";
        $this->load->view('admin/login',$data);
    }

    public function post_login()
        {
 
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
 
        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
        $this->form_validation->set_message('required', 'Enter %s');
 
        if ($this->form_validation->run() === FALSE)
        {  
            $data['err_data'] = "";
            $this->load->view('admin/login');
        }
        else
        {   
            $data = array(
               'username' => $this->input->post('email'),
               'password' => $this->input->post('password'),
 
             );
   
            $check = $this->Form_model->auth_check($data);
            
            if($check != false){
 
                 $admin = array(
                 'admin_id' => $check->id
                );
  
            $this->session->set_userdata($admin);
 
             redirect( base_url('hello-admin') ); 
            }
            $data['err_data'] = "Invalid username or password";
           $this->load->view('admin/login',$data);
        }
         
    } 

    public function post_login_user()
        {
 
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
 
        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
        $this->form_validation->set_message('required', 'Enter %s');
 
        if ($this->form_validation->run() === FALSE)
        {  
            $data['err_data'] = "";
            $this->load->view('login');
        }
        else
        {   
            $data = array(
               'email' => $this->input->post('email'),
               'password' => md5($this->input->post('password')),
 
             );
   
            $check = $this->Form_model->auth_check_user($data);
            
            if($check != false){
 
                 $user = array(
                 'user_id' => $check->id
                );
  
            $this->session->set_userdata($user);
 
             redirect( base_url() ); 
            }
            $data['err_data'] = "Invalid username or password";
           $this->load->view('login',$data);
        }
         
    } 


    public function logout(){
    $this->session->sess_destroy();
    redirect(base_url('hello-admin/login'));
   } 

   public function logout_ca(){
    $this->session->sess_destroy();
    redirect(base_url('login'));
   } 
   




}
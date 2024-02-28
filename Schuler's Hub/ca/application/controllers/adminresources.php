<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class adminresources extends CI_Controller {

	public function __construct()
        {
         parent::__construct();
        $this->load->database();
        $this->load->model('Add_model', 'add');
         $this->load->model('Form_model');
         $this->load->model('Read_model');
         $this->load->model('adminresources_model');
             $this->load->library(array('form_validation','session'));
                 $this->load->helper(array('url','html','form'));
                 $this->admin_id = $this->session->userdata('admin_id');
        }
 
	public function admin_resources()
	{
		if(empty($this->admin_id))
     		{
        		redirect(base_url('hello-admin/login'));
          	}
		
		#$data['error'] = "";
		#$data['coursesarray'] = $this->Read_model->courses();
		#$data['coursedetails'] = $this->Read_model->courseById($id);
		$this->load->view('admin/include/header');
		$this->load->view('admin/adminresources');
		$this->load->view('admin/include/footer');
    }
}
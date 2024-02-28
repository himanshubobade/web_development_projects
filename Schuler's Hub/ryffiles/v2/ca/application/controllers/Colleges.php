<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Colleges extends CI_Controller {

	public function __construct()
        {
         parent::__construct();
        $this->load->model('Add_model', 'add');
         $this->load->model('Form_model');
         $this->load->model('Read_model');
             $this->load->library(array('form_validation','session'));
                 $this->load->helper(array('url','html','form'));
                 $this->admin_id = $this->session->userdata('admin_id');
        }
 
	public function colleges($id=false)
	{
		if(empty($this->admin_id))
     		{
        		redirect(base_url('hello-admin/login'));
          	}
		
		$data['error'] = "";
		$data['collegesarray'] = $this->Read_model->colleges();
		$data['collegedetails'] = $this->Read_model->collegeById($id);
		$this->load->view('admin/include/header');
		$this->load->view('admin/add-colleges',$data);
		$this->load->view('admin/include/footer');
	}
	public function colleges_add()
	{
		$name  = $this->input->post('name'); 

		$data = $this->add->add_colleges($name);
		if($data==1)
		{
				redirect( base_url('hello-admin/colleges/') ); 
		}
		else
		{		$data['error'] = "Failed to Add Campus Ambasador";
				$this->load->view('admin/include/header');
				$this->load->view('admin/colleges',$data);
				$this->load->view('admin/include/footer');
		}
	}
	public function colleges_edit($id)
	{
		if(empty($this->admin_id))
     		{
        		redirect(base_url('hello-admin/login'));
          	}
		
		$data['error'] = "";
		$data['collegesarray'] = $this->Read_model->colleges();
		$this->load->view('admin/include/header');
		$this->load->view('admin/add-colleges',$data);
		$this->load->view('admin/include/footer');
	}
 
	public function colleges_update()
	{
		$name  = $this->input->post('name'); 
		$collegeid  = $this->input->post('collegeid'); 

		$data = $this->add->update_colleges($name,$collegeid);
		if($data==1)
		{
				redirect( base_url('hello-admin/colleges/') ); 
		}
		else
		{		$data['error'] = "Failed to Add College";
				$this->load->view('admin/include/header');
				$this->load->view('admin/colleges',$data);
				$this->load->view('admin/include/footer');
		}
	}
	public function colleges_delete($id)
	{ 
		$data = $this->add->delete_colleges($id);
		if($data==1)
		{
				redirect( base_url('hello-admin/colleges/') ); 
		}
		else
		{		$data['error'] = "Failed to Add College";
				$this->load->view('admin/include/header');
				$this->load->view('admin/colleges',$data);
				$this->load->view('admin/include/footer');
		}
	}
  
}
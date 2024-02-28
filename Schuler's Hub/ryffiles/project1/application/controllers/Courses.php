<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Courses extends CI_Controller {

	public function __construct()
        {
         parent::__construct();
        $this->load->database();
        $this->load->model('Add_model', 'add');
         $this->load->model('Form_model');
         $this->load->model('Read_model');
             $this->load->library(array('form_validation','session'));
                 $this->load->helper(array('url','html','form'));
                 $this->admin_id = $this->session->userdata('admin_id');
        }
 
	public function courses($id=false)
	{
		if(empty($this->admin_id))
     		{
        		redirect(base_url('hello-admin/login'));
          	}
		
		$data['error'] = "";
		$data['coursesarray'] = $this->Read_model->courses();
		$data['coursedetails'] = $this->Read_model->courseById($id);
		$this->load->view('admin/include/header');
		$this->load->view('admin/add-courses',$data);
		$this->load->view('admin/include/footer');
	}
	public function courses_add()
	{
		$name  = $this->input->post('name'); 

		$data = $this->add->add_courses($name);
		if($data==1)
		{
				redirect( base_url('hello-admin/courses/') ); 
		}
		else
		{		$data['error'] = "Failed to Add Campus Ambasador";
				$this->load->view('admin/include/header');
				$this->load->view('admin/courses',$data);
				$this->load->view('admin/include/footer');
		}
	}
	public function courses_edit($id)
	{
		if(empty($this->admin_id))
     		{
        		redirect(base_url('hello-admin/login'));
          	}
		
		$data['error'] = "";
		$data['coursesarray'] = $this->Read_model->courses();
		$this->load->view('admin/include/header');
		$this->load->view('admin/add-courses',$data);
		$this->load->view('admin/include/footer');
	}
 
	public function courses_update()
	{
		$name  = $this->input->post('name'); 
		$collegeid  = $this->input->post('collegeid'); 

		$data = $this->add->update_courses($name,$collegeid);
		if($data==1)
		{
				redirect( base_url('hello-admin/courses/') ); 
		}
		else
		{		$data['error'] = "Failed to Add College";
				$this->load->view('admin/include/header');
				$this->load->view('admin/courses',$data);
				$this->load->view('admin/include/footer');
		}
	}
	public function courses_delete($id)
	{ 
		$data = $this->add->delete_courses($id);
		if($data==1)
		{
				redirect( base_url('hello-admin/courses/') ); 
		}
		else
		{		$data['error'] = "Failed to Add College";
				$this->load->view('admin/include/header');
				$this->load->view('admin/courses',$data);
				$this->load->view('admin/include/footer');
		}
	}
  
}
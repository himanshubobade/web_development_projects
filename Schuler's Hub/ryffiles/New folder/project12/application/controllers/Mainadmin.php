<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mainadmin extends CI_Controller {

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



	public function index()
	{	if(empty($this->admin_id))
     		{
        		redirect(base_url('hello-admin/login'));
          	}
		$this->db->select('*');
		$this->db->from('campusambassador');
		$query = $this->db->get();
		$campusambassador = $query->row();
	
		$data['numrowsca'] = $this->Read_model->cacount();
		$data['numrowscatask'] = $this->Read_model->cataskcount();
		$data['numrowscatakeaction'] = $this->Read_model->catakeactioncount();
		$data['numrowscountryambassador'] = $this->Read_model->countryambassadorcount();
		
		/*$this->db->select('TOP 5');
		$this->db->from('reports');
		$query = $this->db->get();
		$reports = $query->row();
		$data['taskarray'] = $this->Read_model->top_5reports();*/


		$this->load->view('admin/include/header');
		$this->load->view('admin/index',$data);
		$this->load->view('admin/include/footer');
	}
	public function states()
	{
		if(empty($this->admin_id))
			{
				redirect(base_url('hello-admin/login'));
			}
		$countryarray = $this->input->post('country');
		if(!empty($countryarray)){ 
		$countryarray = explode(',',$countryarray);
		  $return = array();
		foreach($countryarray as $country){
		$this->db->select('*');
		$this->db->from('states');
		$this->db->where('country_id', $country);
		$query = $this->db->get();  
		  if($query->num_rows() > 0) {
			foreach($query->result_array() as $row) {
			  $return[$row['id']] = $row['name'];
			}
		  } 
		}
		  echo json_encode($return);  
		} 
	}
	public function cities()
	{
		if(empty($this->admin_id))
			{
				redirect(base_url('hello-admin/login'));
			}
		$statearray = $this->input->post('state');
		if(!empty($statearray)){ 
		$statearray = explode(',',$statearray);
		  $return = array();
		foreach($statearray as $state){
		$this->db->select('*');
		$this->db->from('cities');
		$this->db->where('state_id', $state);
		$query = $this->db->get();  
		  if($query->num_rows() > 0) {
			foreach($query->result_array() as $row) {
			  $return[$row['id']] = $row['name'];
			}
		  } 
		}
		  echo json_encode($return);  
		} 
	  
	}
	public function campus_ambasadors()
	{
		if(empty($this->admin_id))
		{
			redirect(base_url('hello-admin/login'));
		}
		$data['details'] = $this->Read_model->read_ca();
		$this->load->view('admin/include/header');
		$this->load->view('admin/ca',$data);
		$this->load->view('admin/include/footer');

	}
	public function add_campus_ambasadors()
	{
		if(empty($this->admin_id))
		{
			redirect(base_url('hello-admin/login'));
		}
		$data['error'] = "";
		$data['collegesarray'] = $this->Read_model->colleges();
		$data['coursesarray'] = $this->Read_model->courses();
		$data['countriesarray'] = $this->Read_model->countries();
		$data['statesarray'] = $this->Read_model->states("101");
		$this->load->view('admin/include/header');
		$this->load->view('admin/add-ca',$data);
		$this->load->view('admin/include/footer');

	}

	public function add_country_ambasadors()
	{
		if(empty($this->admin_id))
		{
			redirect(base_url('hello-admin/login'));
		}
		$data['error'] = "";
		$data['collegesarray'] = $this->Read_model->colleges();
		$data['coursesarray'] = $this->Read_model->courses();
		$data['countriesarray'] = $this->Read_model->countries();
		$data['statesarray'] = $this->Read_model->states("101");
		$this->load->view('admin/include/header');
		$this->load->view('admin/add-countryambassador',$data);
		$this->load->view('admin/include/footer');

	}

	public function tasks()
	{
		if(empty($this->admin_id))
		{
			redirect(base_url('hello-admin/login'));
		}
		$data['details'] = $this->Read_model->read_task();
		$this->load->view('admin/include/header');
		$this->load->view('admin/task',$data);
		$this->load->view('admin/include/footer');
	}

	public function add_tasks()
	{
		if(empty($this->admin_id))
		{
			redirect(base_url('hello-admin/login'));
		}
		$data['error'] = "";
		$this->load->view('admin/include/header');
		$this->load->view('admin/add-ca-task',$data);
		$this->load->view('admin/include/footer');
	}

	public function actions()
	{
		if(empty($this->admin_id))
		{
			redirect(base_url('hello-admin/login'));
		}
		$data['details'] = $this->Read_model->read_task();
		$this->load->view('admin/include/header');
		$this->load->view('admin/catakeaction',$data);
		$this->load->view('admin/include/footer');
	}

	public function add_action()
	{
		if(empty($this->admin_id))
		{
			redirect(base_url('hello-admin/login'));
		}
		$data['error'] = "";
		$this->load->view('admin/include/header');
		$this->load->view('admin/add-ca-action',$data);
		$this->load->view('admin/include/footer');
	}

	public function login()
	{
		$this->load->view('admin/login');
	}

	public function submissions()
	{
		if(empty($this->admin_id))
		{
			redirect(base_url('hello-admin/login'));
		}
		$this->db->select('*');
		$this->db->from('the_report');
		$this->db->where('flag',0);
		$this->db->join('ca_task', 'the_report.user_id = ca_task.id'); 
		$query = $this->db->get();
		$task_submissions =  $query->result();
		$data['details'] = $task_submissions;
		$this->load->view('admin/include/header');
		$this->load->view('admin/submission',$data);
		$this->load->view('admin/include/footer');
	}
  
}



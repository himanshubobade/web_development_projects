<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CaTask extends CI_Controller {

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
                 $this->user_id = $this->session->userdata('user_id');
        }
 
	public function states($countryid)
	{
		if(empty($this->admin_id))
			{
				redirect(base_url('hello-admin/login'));
			}
		if(!empty($countryid)){ 
		$this->db->select('*');
		$this->db->from('states');
		$this->db->where('country_id', $countryid);
		$query = $this->db->get();  
		  $return = array();
		  if($query->num_rows() > 0) {
			foreach($query->result_array() as $row) {
			  $return[$row['id']] = $row['name'];
			}
		  } 
		  echo json_encode($return); 
		} 
	}
	public function cities($stateid)
	{
		if(empty($this->admin_id))
			{
				redirect(base_url('hello-admin/login'));
			}
		if(!empty($stateid)){ 
		$this->db->select('*');
		$this->db->from('cities');
		$this->db->where('state_id', $stateid);
		$query = $this->db->get();  
		  $return = array();
		  if($query->num_rows() > 0) {
			foreach($query->result_array() as $row) {
			  $return[$row['id']] = $row['name'];
			}
		  } 
		  echo json_encode($return); 
		} 
	}
	public function catasks()
	{
		if(empty($this->admin_id))
		{
			redirect(base_url('hello-admin/login'));
		}
			$this->db->select('*');
		$this->db->from('ca_task');   
		$query = $this->db->get();
		  $campusambassador =  $query->result();
		
		$data['tasksarray'] = $campusambassador;
		$this->load->view('admin/include/header');
		$this->load->view('admin/task',$data);
		$this->load->view('admin/include/footer');

	}
	public function add_catasks()
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
		$this->load->view('admin/add-ca-task',$data);
		$this->load->view('admin/include/footer');

	}  
  public function ca_task_submit()
	{ 
		$college = $this->input->post('college') ?: array();
		$course = $this->input->post('course') ?: array();
		$country = $this->input->post('country') ?: array();
		$state = $this->input->post('state') ?: array();
		$city = $this->input->post('city') ?: array();
		$insertarray = array();
		$insertarray['title'] = $this->input->post('title'); 
		$insertarray['description'] = $this->input->post('description'); 
		$insertarray['points'] = $this->input->post('points');  
		$insertarray['link'] = $this->input->post('link') ?: ''; 
		$insertarray['college'] = !empty($college) ? implode(',',$college) : ''; 
		$insertarray['course'] = !empty($course) ? implode(',',$course) : ''; 
		$insertarray['country'] = !empty($country) ? implode(',',$country) : '';  
		$insertarray['state'] = !empty($state) ? implode(',',$state) : '';  
		$insertarray['city'] = !empty($city) ? implode(',',$city) : '';  
		$insertarray['year'] = $this->input->post('year') ?: ''; 
		$insertarray['status'] = '1'; 
		$ambasadors = $this->Read_model->ambasadorslist($insertarray);
		if(!empty($ambasadors)){
		$insertarray['ambasadors'] = implode(',',$ambasadors); 
		} 
		$config = array(
        'upload_path' => "./uploads",
        'allowed_types' => "gif|jpg|png|jpeg",
        'overwrite' => FALSE,
        'encrypt_name' => TRUE,
        'max_size' => "2048000",
        'max_height' => "10240",
        'max_width' => "10240"
        );

        $this->upload->initialize($config);
        $this->load->library('upload', $config);

        if($this->upload->do_upload('userfile'))
        {
        	$upload_array = $this->upload->data();
        	$file_name = $upload_array['file_name'];
        	$insertarray['file'] =  $file_name;
		}
      
   
		if($this->db->insert('ca_task', $insertarray))
		{
				redirect( base_url('hello-admin/ca-tasks') ); 
		}
		else
		{	
			$data['error'] = "Failed to Add Campus Ambasador";
			$this->load->view('admin/include/header');
			$this->load->view('admin/add-ca-task',$data);
			$this->load->view('admin/include/footer');
		}
	} 
	public function edit_ca_task($id=false)
	{
		if(empty($this->admin_id))
		{
			redirect(base_url('hello-admin/login'));
		}
			$this->db->select('*');
		$this->db->from('ca_task');
		$this->db->where('id',$id);    
		$query = $this->db->get();
		$catask = $query->row(); 
		$data['error'] = "";
		$data['catask'] = $catask; 
		$data['collegesarray'] = $this->Read_model->colleges();
		$data['coursesarray'] = $this->Read_model->courses();
		$data['countriesarray'] = $this->Read_model->countries();
		$data['statesarray'] = $this->Read_model->states($catask->country);
		$data['citiesarray'] = $this->Read_model->cities($catask->state); 
		$this->load->view('admin/include/header');
		$this->load->view('admin/edit-ca-task',$data);
		$this->load->view('admin/include/footer');

	} 
  public function ca_task_update()
	{ 
		$cataskid = $this->input->post('cataskid'); 
		$college = $this->input->post('college') ?: array();
		$course = $this->input->post('course') ?: array();
		$country = $this->input->post('country') ?: array();
		$state = $this->input->post('state') ?: array();
		$city = $this->input->post('city') ?: array();
		$insertarray = array();
		$insertarray['title'] = $this->input->post('title'); 
		$insertarray['description'] = $this->input->post('description'); 
		$insertarray['points'] = $this->input->post('points');  
		$insertarray['link'] = $this->input->post('link') ?: ''; 
		$insertarray['college'] = !empty($college) ? implode(',',$college) : ''; 
		$insertarray['course'] = !empty($course) ? implode(',',$course) : ''; 
		$insertarray['country'] = !empty($country) ? implode(',',$country) : '';  
		$insertarray['state'] = !empty($state) ? implode(',',$state) : '';  
		$insertarray['city'] = !empty($city) ? implode(',',$city) : '';  
		$insertarray['year'] = $this->input->post('year') ?: ''; 
		$insertarray['status'] = '1'; 
		$ambasadors = $this->Read_model->ambasadorslist($insertarray);
		if(!empty($ambasadors)){
		$insertarray['ambasadors'] = implode(',',$ambasadors); 
		} 
		$config = array(
        'upload_path' => "./uploads",
        'allowed_types' => "gif|jpg|png|jpeg",
        'overwrite' => FALSE,
        'encrypt_name' => TRUE,
        'max_size' => "2048000",
        'max_height' => "10240",
        'max_width' => "10240"
        );

        $this->upload->initialize($config);
        $this->load->library('upload', $config);

        if($this->upload->do_upload('userfile'))
        {
        	$upload_array = $this->upload->data();
        	$file_name = $upload_array['file_name'];
        	$insertarray['file'] =  $file_name;
		}
      
		$this->db->where('id', $cataskid);
		
		if($this->db->update('ca_task', $insertarray)) 
		{
				redirect( base_url('hello-admin/ca-tasks') ); 
		}
		else
		{	
			$data['error'] = "Failed to Add Campus Ambasador";
			$this->load->view('admin/include/header');
			$this->load->view('admin/edit-ca-tasks/'.$cataskid,$data);
			$this->load->view('admin/include/footer');
		}
	} 
	public function delete_ca_tasks($id)
	{ 
	$query = "delete from `ca_task` where id = {$id}";
  		if($this->db->query($query))
		{
			redirect(base_url('hello-admin/ca-tasks'));  
		}
		else
		{		$data['error'] = "Failed to delete College";
				$this->load->view('admin/include/header');
				$this->load->view('admin/ca-tasks',$data);
				$this->load->view('admin/include/footer');
		}
	}
	/* user login */
	public function ambassodor_tasks()
	{
		if(empty($this->user_id))
     		{
        		redirect(base_url('login'));
          	}
		$campusambasador = $this->user_id;
		$ambasadors = $this->Read_model->campusambasador($campusambasador);
		$data['campusambasador'] = $ambasadors;
		
        $data['details'] = $this->Read_model->read_task($campusambasador);  
		$this->load->view('include/header',$data);
		$this->load->view('task',$data);
		$this->load->view('include/footer');
	}
	public function submit_report()
	{
		if(empty($this->user_id)){
			
			redirect(base_url('login'));
		} 	
		$campusambasador = $this->user_id;
		$ambasadors = $this->Read_model->campusambasador($campusambasador);
		$data['campusambasador'] = $ambasadors; 
        $data['error'] ="";
        $data['details'] = $this->Read_model->read_task($campusambasador);
		$this->load->view('include/header',$data);
		$this->load->view('submit',$data);
		$this->load->view('include/footer');
	}
	public function task_submit_report()
	{
		$task  = $this->input->post('task');
$campusambasador = $this->user_id;
$date = date('Y-m-d H:i:s');
		$config = array(
        'upload_path' => "./uploads",
        'allowed_types' => "gif|jpg|png|jpeg",
        'overwrite' => FALSE,
        'encrypt_name' => TRUE,
        'max_size' => "2048000",
        'max_height' => "10240",
        'max_width' => "10240"
        );

        $this->upload->initialize($config);
        // $this->load->library('reportfiles', $config);

        if($this->upload->do_upload())
        {
        	$upload_array = $this->upload->data();
        	$file_name = $upload_array['file_name'];
        	$file_url = '../uploads/'.$file_name;
			
			   $query = "INSERT INTO `reports`(`task_id`, `file_url`, `user_id`, `created_on`) VALUES ('{$task}','{$file_url}','{$campusambasador}','{$date}')";
        	 if($this->db->query($query))
			{
					redirect( base_url('submit-report') ); 
			}
			else
			{		$data['error'] = "Failed to Add Task";
					$this->load->model('Read_model');
					$ambasadors = $this->Read_model->campusambasador($campusambasador);
					$data['campusambasador'] = $ambasadors; 
					$data['details'] = $this->Read_model->read_task($campusambasador);
					$this->load->view('include/header',$data);
					$this->load->view('submit',$data);
					$this->load->view('include/footer');
			}

        }
        else
        {
        			$data['error'] = $this->upload->display_errors();
        			$this->load->model('Read_model');
					$ambasadors = $this->Read_model->campusambasador($campusambasador);
					$data['campusambasador'] = $ambasadors; 
					$data['details'] = $this->Read_model->read_task($campusambasador);
					$this->load->view('include/header',$data);
					$this->load->view('submit',$data);
					$this->load->view('include/footer');
        }
	}
	public function submissions()
	{
		if(empty($this->admin_id))
		{
			redirect(base_url('hello-admin/login'));
		}
		
		$this->db->select('*');
		$this->db->from('reports');
		$this->db->where('flag',0);
		$this->db->join('campusambassador', 'reports.user_id = campusambassador.id'); 
		$query = $this->db->get();
		$task_submissions =  $query->result(); 
		$data['tasksubmissions'] = $task_submissions;
		$this->load->view('admin/include/header');
		$this->load->view('admin/submission',$data);
		$this->load->view('admin/include/footer');
	}
	
	
}
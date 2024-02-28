<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CampusAmbassodor extends CI_Controller {

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
 
	public function campus_ambasadors($id=false)
	{
		if(empty($this->admin_id))
     		{
        		redirect(base_url('hello-admin/login'));
          	}
		
		$data['error'] = "";
		$data['campusambasadorsarray'] = $this->Read_model->read_ca(); 
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
		$data['statesarray'] = $this->Read_model->states('101'); 
		$this->load->view('admin/include/header');
		$this->load->view('admin/add-ca',$data);
		$this->load->view('admin/include/footer');
	}
	public function campus_ambasadors_submit()
	{
		$insertarray = array();
		$insertarray['name'] = $this->input->post('name'); 
		$insertarray['email'] = $this->input->post('email'); 
		$insertarray['mobile'] = $this->input->post('mobile'); 
		$insertarray['password'] = md5($this->input->post('password')); 
		$insertarray['college'] = $this->input->post('college') ?: ''; 
		$insertarray['course'] = $this->input->post('course') ?: ''; 
		$insertarray['year'] = $this->input->post('year') ?: ''; 
		$insertarray['country'] = $this->input->post('country' ?: ''); 
		$insertarray['state'] = $this->input->post('state') ?: ''; 
		$insertarray['city'] = $this->input->post('city') ?: ''; 
		$insertarray['residence'] = $this->input->post('residence') ?: ''; 
		$insertarray['facebook'] = $this->input->post('facebook') ?: ''; 
		$insertarray['linkedin'] = $this->input->post('linkedin') ?: ''; 
		$insertarray['instagram'] = $this->input->post('instagram') ?: ''; 
		$insertarray['twitter'] = $this->input->post('twitter') ?: ''; 
		$insertarray['document'] = '';
		$insertarray['resume'] = '';
		$insertarray['status'] = '1';
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

        if($this->upload->do_upload('document'))
        {
        	$upload_array = $this->upload->data();
        	$file_name = $upload_array['file_name'];
        	$insertarray['document'] =  $file_name;
		}
        if($this->upload->do_upload('resume'))
        {
        	$upload_array = $this->upload->data();
        	$file_name = $upload_array['file_name'];
        	$insertarray['resume'] =  $file_name;
		}
   
		if($this->db->insert('campusambassador', $insertarray))
		{
				redirect( base_url('hello-admin/campus-ambasadors') ); 
		}
		else
		{		$data['error'] = "Failed to Add Campus Ambasador";
				$this->load->view('admin/include/header');
				$this->load->view('admin/campus-ambasadors',$data);
				$this->load->view('admin/include/footer');
		}
	}
	
	public function edit_campus_ambasadors($id=false)
	{
		if(empty($this->admin_id))
     		{
        		redirect(base_url('hello-admin/login'));
          	}
		$this->db->select('*');
		$this->db->from('campusambassador');
		$this->db->where('id',$id);    
		$query = $this->db->get();
		$campusambassador = $query->row();
		$data['error'] = "";
		$data['campusambasador'] = $campusambassador;
		$data['collegesarray'] = $this->Read_model->colleges();
		$data['coursesarray'] = $this->Read_model->courses();
		$data['countriesarray'] = $this->Read_model->countries();
		$data['statesarray'] = $this->Read_model->states($campusambassador->country);
		$data['citiesarray'] = $this->Read_model->cities($campusambassador->state);
		$this->load->view('admin/include/header');
		$this->load->view('admin/edit-ca',$data);
		$this->load->view('admin/include/footer');
	}
 
	public function update_campus_ambasadors()
	{
		$insertarray = array();
		$campusambasador = $this->input->post('campusambasador'); 
		$insertarray['name'] = $this->input->post('name'); 
		$insertarray['email'] = $this->input->post('email'); 
		$insertarray['mobile'] = $this->input->post('mobile'); 
		$password  =  $this->input->post('password');
		if(!empty($password)){
		$insertarray['password'] = md5($password);
		}
		$insertarray['college'] = $this->input->post('college') ?: ''; 
		$insertarray['course'] = $this->input->post('course') ?: ''; 
		$insertarray['year'] = $this->input->post('year') ?: ''; 
		$insertarray['country'] = $this->input->post('country' ?: ''); 
		$insertarray['state'] = $this->input->post('state') ?: ''; 
		$insertarray['city'] = $this->input->post('city') ?: ''; 
		$insertarray['residence'] = $this->input->post('residence') ?: ''; 
		$insertarray['facebook'] = $this->input->post('facebook') ?: ''; 
		$insertarray['linkedin'] = $this->input->post('linkedin') ?: ''; 
		$insertarray['instagram'] = $this->input->post('instagram') ?: ''; 
		$insertarray['twitter'] = $this->input->post('twitter') ?: ''; 
		$insertarray['document'] = '';
		$insertarray['resume'] = '';
		$insertarray['status'] = '1';
		$insertarray['description'] = $this->input->post('description'); 
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

        if($this->upload->do_upload('document'))
        {
        	$upload_array = $this->upload->data();
        	$file_name = $upload_array['file_name'];
        	$insertarray['document'] =  $file_name;
		}
        if($this->upload->do_upload('resume'))
        {
        	$upload_array = $this->upload->data();
        	$file_name = $upload_array['file_name'];
        	$insertarray['resume'] =  $file_name;
		}
		$this->db->where('id', $campusambasador);
		
		if($this->db->update('campusambassador', $insertarray))
		{
			 redirect(base_url('hello-admin/campus-ambasadors')); 
		}
		else
		{		
			$data['error'] = "Failed to Add Campus Ambasador";
			$this->load->view('admin/include/header');
			$this->load->view('admin/campus-ambasadors',$data);
			$this->load->view('admin/include/footer');
		}
	}
	public function delete_campus_ambasadors($id)
	{ 
	$query = "delete from `campusambassador` where id = {$id}";
  		if($this->db->query($query))
		{
			redirect(base_url('hello-admin/campus-ambasadors'));  
		}
		else
		{		$data['error'] = "Failed to delete College";
				$this->load->view('admin/include/header');
				$this->load->view('admin/campus-ambasadors',$data);
				$this->load->view('admin/include/footer');
		}
	}
	
	public function update_campusambasadors()
	{
		$insertarray = array();
		$campusambasador = $this->input->post('campusambasador'); 
		$insertarray['name'] = $this->input->post('name'); 
		/* $insertarray['email'] = $this->input->post('email'); 
		$insertarray['mobile'] = $this->input->post('mobile'); */ 
	
		$insertarray['college'] = $this->input->post('college') ?: ''; 
		$insertarray['course'] = $this->input->post('course') ?: ''; 
		$insertarray['year'] = $this->input->post('year') ?: ''; 
		$insertarray['country'] = $this->input->post('country' ?: ''); 
		$insertarray['state'] = $this->input->post('state') ?: ''; 
		$insertarray['city'] = $this->input->post('city') ?: ''; 
		$insertarray['residence'] = $this->input->post('residence') ?: ''; 
		$insertarray['facebook'] = $this->input->post('facebook') ?: ''; 
		$insertarray['linkedin'] = $this->input->post('linkedin') ?: ''; 
		$insertarray['instagram'] = $this->input->post('instagram') ?: ''; 
		$insertarray['twitter'] = $this->input->post('twitter') ?: ''; 
		$insertarray['document'] = '';
		$insertarray['resume'] = '';
		$insertarray['status'] = '1';
		$insertarray['description'] = $this->input->post('description');
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

        if($this->upload->do_upload('document'))
        {
        	$upload_array = $this->upload->data();
        	$file_name = $upload_array['file_name'];
        	$insertarray['document'] =  $file_name;
		}
        if($this->upload->do_upload('resume'))
        {
        	$upload_array = $this->upload->data();
        	$file_name = $upload_array['file_name'];
        	$insertarray['resume'] =  $file_name;
		}
		$this->db->where('id', $campusambasador);
		
		if($this->db->update('campusambassador', $insertarray))
		{
			 redirect(base_url('/')); 
		}
		else
		{		
			$data['error'] = "Failed to Add Campus Ambasador";
			$this->load->view('include/header',$data);
		$this->load->view('welcome_message',$data);
		$this->load->view('include/footer');
		}
	}
	
	public function update_password(){
		$insertarray = array();
		$campusambasador = $this->input->post('campusambasador'); 
		$data['campusambasador'] = $this->Read_model->campusambasador($campusambasador);
			$password  =  $this->input->post('password');
			$confirm_password  =  $this->input->post('confirm_password');
			if($password===$confirm_password){
				
		if(!empty($password)){
		$insertarray['password'] = md5($password);
	
		$this->db->where('id', $campusambasador);
		
		if($this->db->update('campusambassador', $insertarray))
		{
			 redirect(base_url('/')); 
		}
		else
		{		
			$data['passerror'] = "Failed to Add Campus Ambasador";
			
		}
			}else {		
			$data['passerror'] = "Please try again";
			
			}
			}else {		
			$data['passerror'] = "Invalid password try again";
			
		}
		if(!empty($data['passerror'])){
		$this->load->view('include/header',$data);
		$this->load->view('welcome_message',$data);
		$this->load->view('include/footer');
		}
	}
  
}
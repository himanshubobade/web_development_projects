<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CountryAmbassodor extends CI_Controller {

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
 
	public function country_ambasadors($id=false)
	{
		if(empty($this->admin_id))
     		{
        		redirect(base_url('hello-admin/login'));
          	}
		
		$data['error'] = "";
		$data['countryambasadorsarray'] = $this->Read_model->read_countryambassador(); 
		$this->load->view('admin/include/header');
		$this->load->view('admin/countryambasador',$data);
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
		$data['statesarray'] = $this->Read_model->states('101'); 
		$this->load->view('admin/include/header');
		$this->load->view('admin/add-countryambassador',$data);
		$this->load->view('admin/include/footer');
	}
	public function country_ambasadors_submit()
	{
		$insertarray_ = array();
		$insertarray_['name'] = $this->input->post('name'); 
		$insertarray_['email'] = $this->input->post('email'); 
		$insertarray_['mobile'] = $this->input->post('mobile'); 
		$insertarray_['password'] = md5($this->input->post('password')); 
		$insertarray_['college'] = $this->input->post('college') ?: ''; 
		$insertarray_['course'] = $this->input->post('course') ?: ''; 
		$insertarray_['year'] = $this->input->post('year') ?: ''; 
		$insertarray_['country'] = $this->input->post('country' ?: ''); 
		$insertarray_['state'] = $this->input->post('state') ?: ''; 
		$insertarray_['city'] = $this->input->post('city') ?: ''; 
		$insertarray_['residence'] = $this->input->post('residence') ?: ''; 
		$insertarray_['facebook'] = $this->input->post('facebook') ?: ''; 
		$insertarray_['linkedin'] = $this->input->post('linkedin') ?: ''; 
		$insertarray_['instagram'] = $this->input->post('instagram') ?: ''; 
		$insertarray_['twitter'] = $this->input->post('twitter') ?: ''; 
		$insertarray_['document'] = '';
		$insertarray_['resume'] = '';
		$insertarray_['status'] = '1';
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
        	$insertarray_['document'] =  $file_name;
		}
        if($this->upload->do_upload('resume'))
        {
        	$upload_array = $this->upload->data();
        	$file_name = $upload_array['file_name'];
        	$insertarray_['resume'] =  $file_name;
		}
   
		if($this->db->insert('countryambassador', $insertarray_))
		{
				redirect( base_url('hello-admin/country-ambasadors') ); 
		}
		else
		{		$data['error'] = "Failed to Add Campus Ambasador";
				$this->load->view('admin/include/header');
				$this->load->view('admin/country-ambasadors',$data);
				$this->load->view('admin/include/footer');
		}
	}
	
	public function edit_country_ambasadors($id=false)
	{
		if(empty($this->admin_id))
     		{
        		redirect(base_url('hello-admin/login'));
          	}
		$this->db->select('*');
		$this->db->from('countryambassador');
		$this->db->where('id',$id);    
		$query = $this->db->get();
		$countryambassador = $query->row();
		$data['error'] = "";
		$data['countryambasador'] = $countryambassador;
		$data['collegesarray'] = $this->Read_model->colleges();
		$data['coursesarray'] = $this->Read_model->courses();
		$data['countriesarray'] = $this->Read_model->countries();
		$data['statesarray'] = $this->Read_model->states($countryambassador->country);
		$data['citiesarray'] = $this->Read_model->cities($countryambassador->state);
		$this->load->view('admin/include/header');
		$this->load->view('admin/edit-countryambassador',$data);
		$this->load->view('admin/include/footer');
	}
 
	public function update_country_ambasadors()
	{
		$insertarray_ = array();
		$countryambasador = $this->input->post('countryambasador'); 
		$insertarray_['name'] = $this->input->post('name'); 
		$insertarray_['email'] = $this->input->post('email'); 
		$insertarray_['mobile'] = $this->input->post('mobile'); 
		$password  =  $this->input->post('password');
		if(!empty($password)){
		$insertarray_['password'] = md5($password);
		}
		$insertarray_['college'] = $this->input->post('college') ?: ''; 
		$insertarray_['course'] = $this->input->post('course') ?: ''; 
		$insertarray_['year'] = $this->input->post('year') ?: ''; 
		$insertarray_['country'] = $this->input->post('country' ?: ''); 
		$insertarray_['state'] = $this->input->post('state') ?: ''; 
		$insertarray_['city'] = $this->input->post('city') ?: ''; 
		$insertarray_['residence'] = $this->input->post('residence') ?: ''; 
		$insertarray_['facebook'] = $this->input->post('facebook') ?: ''; 
		$insertarray_['linkedin'] = $this->input->post('linkedin') ?: ''; 
		$insertarray_['instagram'] = $this->input->post('instagram') ?: ''; 
		$insertarray_['twitter'] = $this->input->post('twitter') ?: ''; 
		$insertarray_['document'] = '';
		$insertarray_['resume'] = '';
		$insertarray_['status'] = '1';
		$insertarray_['description'] = $this->input->post('description'); 
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
        	$insertarray_['document'] =  $file_name;
		}
        if($this->upload->do_upload('resume'))
        {
        	$upload_array = $this->upload->data();
        	$file_name = $upload_array['file_name'];
        	$insertarray_['resume'] =  $file_name;
		}
		$this->db->where('id', $countryambasador);
		
		if($this->db->update('countryambassador', $insertarray_))
		{
			 redirect(base_url('hello-admin/country-ambasadors')); 
		}
		else
		{		
			$data['error'] = "Failed to Add Country Ambasador";
			$this->load->view('admin/include/header');
			$this->load->view('admin/country-ambasadors',$data);
			$this->load->view('admin/include/footer');
		}
	}
	public function delete_country_ambasadors($id)
	{ 
	$query = "delete from `countryambassador` where id = {$id}";
  		if($this->db->query($query))
		{
			redirect(base_url('hello-admin/country-ambasadors'));  
		}
		else
		{		$data['error'] = "Failed to delete College";
				$this->load->view('admin/include/header');
				$this->load->view('admin/country-ambasadors',$data);
				$this->load->view('admin/include/footer');
		}
	}
	
	public function update_countryambasadors()
	{
		$insertarray_ = array();
		$countryambasador = $this->input->post('countryambasador'); 
		$insertarray_['name'] = $this->input->post('name'); 
		/* $insertarray['email'] = $this->input->post('email'); 
		$insertarray['mobile'] = $this->input->post('mobile'); */ 
	
		$insertarray_['college'] = $this->input->post('college') ?: ''; 
		$insertarray_['course'] = $this->input->post('course') ?: ''; 
		$insertarray_['year'] = $this->input->post('year') ?: ''; 
		$insertarray_['country'] = $this->input->post('country' ?: ''); 
		$insertarray_['state'] = $this->input->post('state') ?: ''; 
		$insertarray_['city'] = $this->input->post('city') ?: ''; 
		$insertarray_['residence'] = $this->input->post('residence') ?: ''; 
		$insertarray_['facebook'] = $this->input->post('facebook') ?: ''; 
		$insertarray_['linkedin'] = $this->input->post('linkedin') ?: ''; 
		$insertarray_['instagram'] = $this->input->post('instagram') ?: ''; 
		$insertarray_['twitter'] = $this->input->post('twitter') ?: ''; 
		$insertarray_['document'] = '';
		$insertarray_['resume'] = '';
		$insertarray_['status'] = '1';
		$insertarray_['description'] = $this->input->post('description');
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
        	$insertarray_['document'] =  $file_name;
		}
        if($this->upload->do_upload('resume'))
        {
        	$upload_array = $this->upload->data();
        	$file_name = $upload_array['file_name'];
        	$insertarray_['resume'] =  $file_name;
		}
		$this->db->where('id', $countryambasador);
		
		if($this->db->update('countryambassador', $insertarray_))
		{
			 redirect(base_url('/')); 
		}
		else
		{		
			$data['error'] = "Failed to Add Country Ambasador";
			$this->load->view('include/header',$data);
		$this->load->view('welcome_message',$data);
		$this->load->view('include/footer');
		}
	}
	
	public function update_password(){
		$insertarray_ = array();
		$countryambasador = $this->input->post('countryambasador'); 
		$data['countryambasador'] = $this->Read_model->countryambasador($countryambasador);
			$password  =  $this->input->post('password');
			$confirm_password  =  $this->input->post('confirm_password');
			if($password===$confirm_password){
				
		if(!empty($password)){
		$insertarray_['password'] = md5($password);
	
		$this->db->where('id', $countryambasador);
		
		if($this->db->update('countryambassador', $insertarray_))
		{
			 redirect(base_url('/')); 
		}
		else
		{		
			$data['passerror'] = "Failed to Add Country Ambasador";
			
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
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct()
        {
         parent::__construct();
         $this->load->model('Form_model');
         $this->load->model('Read_model');
             $this->load->library(array('form_validation','session'));
                 $this->load->helper(array('url','html','form'));
                 $this->user_id = $this->session->userdata('user_id');
        }


	public function index()
	{
		if(empty($this->user_id))
     		{
        		redirect(base_url('login'));
          	}
			$id= $this->user_id; 
		$this->db->select('*');
		$this->db->from('campusambassador');
		$this->db->where('id',$id);    
		$query = $this->db->get();
		$campusambassador = $query->row();
		$data['error'] = "";
		$data['passerror'] = "";
		$data['campusambasador'] = $campusambassador; 
		$data['collegesarray'] = $this->Read_model->colleges();
		$data['coursesarray'] = $this->Read_model->courses();
		$data['countriesarray'] = $this->Read_model->countries();
		$data['statesarray'] = $this->Read_model->states($campusambassador->country);
		$data['citiesarray'] = $this->Read_model->cities($campusambassador->state);

		$data['numrowsca'] = $this->Read_model->cacount();
		$data['numrowscatask'] = $this->Read_model->cataskcount();
		$data['numrowscountryambassador'] = $this->Read_model->countryambassadorcount();
		
		$this->load->view('include/header',$data);
		$this->load->view('welcome_message',$data);
		$this->load->view('include/footer');
	} 

	public function login()
	{	$data['err_data'] = "";
		$this->load->view('login',$data);
	}
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class caresources extends CI_Controller {

    public function __construct()
        {
        parent::__construct();
        $this->load->database();
        $this->load->model('Add_model', 'add');
        $this->load->model('Form_model');
        $this->load->model('Read_model');
        $this->load->model('caresources_model');
        $this->load->library(array('form_validation','session'));
        $this->load->helper(array('url','html','form'));
        $this->admin_id = $this->session->userdata('admin_id');
        $this->user_id = $this->session->userdata('user_id');
        }


    public function ca_resources()
	{
		$this->db->select('*');
		$this->db->from('reports');   
		$query = $this->db->get();
		$campusambassador =  $query->result();
		
        $data['tasksarray'] = $campusambassador;
        #echo $campusambassador;
		$this->load->view('include/header');
		$this->load->view('caresources');
        $this->load->view('include/footer');
        

    }
}
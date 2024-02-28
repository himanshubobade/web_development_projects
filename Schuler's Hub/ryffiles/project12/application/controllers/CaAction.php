<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CaAction
 extends CI_Controller {

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

        public function ca_takeaction()
        {
            if(empty($this->admin_id))
            {
                redirect(base_url('hello-admin/login'));
            }
            $this->db->select('*');
            $this->db->from('ca_action');   
            $query = $this->db->get();
            $campusambassador =  $query->result();
            
            $data['actionsarray'] = $campusambassador;
            $this->load->view('admin/include/header');
            $this->load->view('admin/catakeaction',$data);
            $this->load->view('admin/include/footer');
    
        }

        public function add_catakeaction()
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
    
    public function ca_takeaction_submit()
	{ 
	
		$insertarray = array();
		$insertarray['title'] = $this->input->post('title'); 
		$insertarray['description'] = $this->input->post('description'); 
		$insertarray['point'] = $this->input->post('points');  
		$insertarray['link'] = $this->input->post('link') ?: ''; 
	
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
	
			if($this->upload->do_upload('userimage'))
			{
				$upload_array = $this->upload->data();
				$image_name = $upload_array['image_name'];
				$insertarray['image'] =  $image_name;
			}
   
		if($this->db->insert('ca_action', $insertarray))
		{
				redirect( base_url('hello-admin/ca-actions') ); 
		}
		else
		{	
			$data['error'] = "Failed to Add Campus Ambasador";
			$this->load->view('admin/include/header');
			$this->load->view('admin/add-ca-action',$data);
			$this->load->view('admin/include/footer');
		}
    } 
    
    public function edit_ca_takeaction($id=false)
	{
		if(empty($this->admin_id))
		{
			redirect(base_url('hello-admin/login'));
		}
			$this->db->select('*');
		$this->db->from('ca_action');
		$this->db->where('id',$id);    
		$query = $this->db->get();
		$caaction = $query->row(); 
		$data['error'] = "";
		$data['caactions'] = $caaction; 
		
		$this->load->view('admin/include/header');
		$this->load->view('admin/edit-ca-action',$data);
		$this->load->view('admin/include/footer');

    }
    
    public function ca_takeaction_update()
	{ 
		$caactionid = $this->input->post('caactionid'); 
	
		$insertarray = array();
		$insertarray['title'] = $this->input->post('title'); 
		$insertarray['description'] = $this->input->post('description'); 
		$insertarray['point'] = $this->input->post('point');  
		$insertarray['link'] = $this->input->post('link') ?: ''; 
		 
		
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
	
			if($this->upload->do_upload('userimage'))
			{
				$upload_array = $this->upload->data();
				$image_name = $upload_array['image_name'];
				$insertarray['image'] =  $image_name;
			}
      
		$this->db->where('id', $caactionid);
		
		if($this->db->update('ca_action', $insertarray)) 
		{
				redirect( base_url('hello-admin/ca-actions') ); 
		}
		else
		{	
			$data['error'] = "Failed to Add Campus Ambasador";
			$this->load->view('admin/include/header');
			$this->load->view('admin/edit-ca-action/'.$caactionid,$data);
			$this->load->view('admin/include/footer');
		}
	} 
	public function delete_ca_actions($id)
	{ 
	$query = "delete from `ca_task` where id = {$id}";
  		if($this->db->query($query))
		{
			redirect(base_url('hello-admin/ca-actions'));  
		}
		else
		{		$data['error'] = "Failed to delete College";
				$this->load->view('admin/include/header');
				$this->load->view('admin/ca-takeaction',$data);
				$this->load->view('admin/include/footer');
		}
    }
    
    public function ambassodor_actions()
	{
		if(empty($this->user_id))
     		{
        		redirect(base_url('login'));
          	}
		$campusambasador = $this->user_id;
		$ambasadors = $this->Read_model->campusambasador($campusambasador);
		$data['campusambasador'] = $ambasadors;
		
        $data['details'] = $this->Read_model->read_action($campusambasador);  
		$this->load->view('include/header',$data);
		$this->load->view('catakeaction',$data);/////"action"
		$this->load->view('include/footer');
	}
	//////////////////////////////////////////
	///////////changes be careful////////////
	/////////////////////////////////////////
	public function submit_actionreport()
	{
		if(empty($this->user_id)){
			
			redirect(base_url('login'));
		} 	
		$campusambasador = $this->user_id;
		$ambasadors = $this->Read_model->campusambasador($campusambasador);
		$data['campusambasador'] = $ambasadors; 
        $data['error'] ="";
        $data['details'] = $this->Read_model->read_action($campusambasador);//used for dropdown at submit action report
		$this->load->view('include/header',$data);
		$this->load->view('submitaction',$data);
		$this->load->view('include/footer');
	}
	//

	public function action_submit_report()
	{
		$task = $this->input->post('catakeaction');//////('task')
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
			
			   $query = "INSERT INTO `action_reports`(`task_id`, `file_url`, `user_id`, `created_on`) VALUES ('{$task}','{$file_url}','{$campusambasador}','{$date}')";
        	 if($this->db->query($query))
			{
					redirect( base_url('submit-actionreport') ); 
			}
			else
			{		$data['error'] = "Failed to Add Task action";
					$this->load->model('Read_model');
					$ambasadors = $this->Read_model->campusambasador($campusambasador);
					$data['campusambasador'] = $ambasadors; 
					$data['details'] = $this->Read_model->read_action($campusambasador);
					$this->load->view('include/header',$data);
					$this->load->view('submitaction',$data);
					$this->load->view('include/footer');
			}

        }
        else
        {
        			$data['error'] = $this->upload->display_errors();
        			$this->load->model('Read_model');
					$ambasadors = $this->Read_model->campusambasador($campusambasador);
					$data['campusambasador'] = $ambasadors; 
					$data['details'] = $this->Read_model->read_action($campusambasador);
					$this->load->view('include/header',$data);
					$this->load->view('submitaction',$data);
					$this->load->view('include/footer');
        }
	}


    
}
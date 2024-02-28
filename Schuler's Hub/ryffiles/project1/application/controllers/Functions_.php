<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Functions_ extends CI_Controller {

	function __construct()
    {
        // Construct the parent class
        parent::__construct();
        $this->load->model('Add_model', 'add');
        $this->user_id = $this->session->userdata('user_id');
    }



	public function add_campus_ambasadors()
	{
		$name  = $this->input->post('name');
		$email  = $this->input->post('email');
		$mobile  = $this->input->post('mobile');
		$college  = $this->input->post('college');
		$course  = $this->input->post('course');
		$semester  = $this->input->post('semester');
		$password  = md5($this->input->post('password'));

		$data = $this->add->add_ca($name,$email,$mobile,$college,$course,$semester,$password);
		if($data==1)
		{
				redirect( base_url('hello-admin/campus-ambasadors/') ); 
		}
		else
		{		$data['error'] = "Failed to Add Campus Ambasador";
				$this->load->view('admin/include/header');
				$this->load->view('admin/add-ca',$data);
				$this->load->view('admin/include/footer');
		}
	}

	public function add_task()
	{
		$title  = $this->input->post('title');
		$description  = $this->input->post('description');
		$points = $this->input->post('points');
		
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

        if($this->upload->do_upload())
        {
        	$upload_array = $this->upload->data();
        	$file_name = $upload_array['file_name'];
        	$file_url = base_url()."uploads/".$file_name;

        	$data = $this->add->add_task($title,$description,$file_url,$points);
        	if($data==1)
			{
					redirect( base_url('hello-admin/ca-tasks/') ); 
			}
			else
			{		$data['error'] = "Failed to Add Task";
					$this->load->view('admin/include/header');
					$this->load->view('admin/add-ca-task',$data);
					$this->load->view('admin/include/footer');
			}

        }
        else
        {
        			$data['error'] = $this->upload->display_errors();
					$this->load->view('admin/include/header');
					$this->load->view('admin/add-ca-task',$data);
					$this->load->view('admin/include/footer');
        }




	}

	public function submit_report()
	{
		$task  = $this->input->post('task');

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

        if($this->upload->do_upload())
        {
        	$upload_array = $this->upload->data();
        	$file_name = $upload_array['file_name'];
        	$file_url = base_url()."uploads/".$file_name;

        	$data = $this->add->add_report($task,$file_url,$this->user_id);
        	if($data==1)
			{
					redirect( base_url('submit-report') ); 
			}
			else
			{		$data['error'] = "Failed to Add Task";
					$this->load->model('Read_model');
        			$data['details'] = $this->Read_model->read_task();
        			$data['name_of_user'] = $this->Read_model->read_username_session($this->user_id);
					$this->load->view('include/header',$data);
					$this->load->view('submit',$data);
					$this->load->view('include/footer');
			}

        }
        else
        {
        			$data['error'] = $this->upload->display_errors();
        			$this->load->model('Read_model');
        			$data['details'] = $this->Read_model->read_task();
        			$data['name_of_user'] = $this->Read_model->read_username_session($this->user_id);
					$this->load->view('include/header',$data);
					$this->load->view('submit',$data);
					$this->load->view('include/footer');
        }




	}


}
?>
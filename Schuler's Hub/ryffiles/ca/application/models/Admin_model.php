<?php
class Admin_model extends CI_Model {
  
    public function __construct()
    {
        $this->load->database();
    }


  	public function add_ca($name,$email,$mobile,$college,$course,$semester,$password)
  	{
  		$query = "INSERT INTO `the_ca`(`name`, `email`, `mobile`, `password`, `college`, `semeter`, `course`) VALUES ('{$name}','{$email}','{$mobile}','{$password}','{$college}','{$semester}','{$course}')";
  		if($this->db->query($query))
  		{
  				return 1;
  		}
  		else
  		{
  				return 0;
  		}
    }
    
    public function add_countryambassador($name,$email,$mobile,$college,$course,$semester,$password)
  	{
  		$query = "INSERT INTO `the_countryambassador`(`name`, `email`, `mobile`, `password`, `college`, `semeter`, `course`) VALUES ('{$name}','{$email}','{$mobile}','{$password}','{$college}','{$semester}','{$course}')";
  		if($this->db->query($query))
  		{
  				return 1;
  		}
  		else
  		{
  				return 0;
  		}
  	}

    public function add_task($title,$description,$file_url,$points)
    {
      $query = "INSERT INTO `the_task`(`title`, `description`, `file`, `points`) VALUES ('{$title}','{$description}','{$file_url}','{$points}')";
      if($this->db->query($query))
      {
          return 1;
      }
      else
      {
          return 0;
      }
    }

    public function add_report($task,$file_url,$user_id)
    {
      $query = "INSERT INTO `the_report`(`task_id`, `file_url`, `user_id`) VALUES ('{$task}','{$file_url}','{$user_id}')";
      if($this->db->query($query))
      {
          return 1;
      }
      else
      {
          return 0;
      }
    }
}
?>
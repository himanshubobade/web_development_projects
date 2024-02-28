<?php
class Add_model extends CI_Model {
  
    public function __construct()
    {
        $this->load->database();
    }


  	public function add_colleges($name)
  	{
		$currdate = date('Y-m-d H:i:s');
  		$query = "INSERT INTO `college`(`name`,`created_on`,`modified_on`) VALUES ('{$name}','{$currdate}','{$currdate}')";
  		if($this->db->query($query))
  		{
  				return 1;
  		}
  		else
  		{
  				return 0;
  		}
  	}
  	public function update_colleges($name,$collegeid)
  	{
		$currdate = date('Y-m-d H:i:s');
  		$query = "update `college` set `name`= '{$name}',`modified_on`= '{$currdate}' where id = {$collegeid}";
  		if($this->db->query($query))
  		{
  				return 1;
  		}
  		else
  		{
  				return 0;
  		}
  	}
  	public function delete_colleges($collegeid)
  	{
		$currdate = date('Y-m-d H:i:s');
  		$query = "delete from `college` where id = {$collegeid}";
  		if($this->db->query($query))
  		{
  				return 1;
  		}
  		else
  		{
  				return 0;
  		}
  	}
  	public function add_courses($name)
  	{
		$currdate = date('Y-m-d H:i:s');
  		$query = "INSERT INTO `course`(`name`,`created_on`,`modified_on`) VALUES ('{$name}','{$currdate}','{$currdate}')";
  		if($this->db->query($query))
  		{
  				return 1;
  		}
  		else
  		{
  				return 0;
  		}
  	}
  	public function update_courses($name,$collegeid)
  	{
		$currdate = date('Y-m-d H:i:s');
  		$query = "update `course` set `name`= '{$name}',`modified_on`= '{$currdate}' where id = {$collegeid}";
  		if($this->db->query($query))
  		{
  				return 1;
  		}
  		else
  		{
  				return 0;
  		}
  	}
  	public function delete_courses($collegeid)
  	{
		$currdate = date('Y-m-d H:i:s');
  		$query = "delete from `course` where id = {$collegeid}";
  		if($this->db->query($query))
  		{
  				return 1;
  		}
  		else
  		{
  				return 0;
  		}
  	}
  	public function add_campusambasadors($inputarray)
  	{
		
  		if($this->db->insert('campusambassador', $inputarray))
  		{
  				return 1;
  		}
  		else
  		{
  				return 0;
  		}
	}
	  
	  public function add_countryambasadors($inputarray)
  	{
		
  		if($this->db->insert('countryambassador', $inputarray))
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
	
	public function add_action($title,$description,$image_url,$file_url,$point)
    {
      $query = "INSERT INTO `the_action`(`title`, `description`,`image`, `file`, `point`) VALUES ('{$title}','{$description}','{$image_url}','{$file_url}','{$point}')";
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
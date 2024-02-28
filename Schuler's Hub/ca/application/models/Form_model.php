<?php
class Form_model extends CI_Model {
  
    public function __construct()
    {
        $this->load->database();
    }
     
    public function auth_check($data)
    {
        $query = $this->db->get_where('the_admin', $data);
        if($query){   
         return $query->row();
        }
        return false;
    }
    public function auth_check_user($data)
    {
        $query = $this->db->get_where('campusambassador', $data);
        if($query){   
         return $query->row();
        }
        return false;
    }
    public function insert_user($data)
    {
 
        $insert = $this->db->insert('users', $data);
        if ($insert) {
           return $this->db->insert_id();
        } else {
            return false;
        }
    }
    public function change($id,$old_pwd,$new_pwd){
            $query="UPDATE users SET password='$new_pwd' where id=$id";
        if($this->db->query($query)){
        return "1";
    }
    else {
        return "2";
    }
    }
    public function get($id,$old_pwd){
        $this->db->where('id',$id);
        $this->db->where('password',$old_pwd);
        $query=$this->db->get('users');
        return $query->num_rows();
    }
}
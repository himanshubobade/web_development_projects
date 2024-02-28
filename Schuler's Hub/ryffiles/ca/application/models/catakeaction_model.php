<?php
class catakeaction_model extends CI_Model {

public function __construct()
{
    $this->load->database();
}

public function catakeaction_task(){
		
		/*$this->db->select('*');
		$this->db->from('reports');
		#$this->db->where('FIND_IN_SET_X("'.$campusambasador.'",ambasadors) >','0'); 
		#$this->db->or_where('ambasadors',''); 
		$query = $this->db->get();
		$query1 =  $this->user_id;
        #echo $query;
		if($query){
			return $query->result();
			return $query1->result();
		}
		else{
			return false;
		}*/
    }
}
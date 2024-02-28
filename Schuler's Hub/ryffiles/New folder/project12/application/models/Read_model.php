<?php
class Read_model extends CI_Model {
  
    public function __construct()
    {
        $this->load->database();
    }

    public function campusambasador($id){
		$this->db->select('*');
		$this->db->from('campusambassador');
		$this->db->where('id',$id);    
		$query = $this->db->get();
		$campusambassador = $query->row();
		if($campusambassador){
			return $campusambassador;
		}
		else{
			return false;
		}
	}
	public function read_ca(){
	 
		$this->db->select('*');
		$this->db->from('campusambassador'); 
		$query = $this->db->get();
		return $query->result();
	}
	public function read_task($campusambasador){
		
		$this->db->select('*');
		$this->db->from('ca_task');
		$this->db->where('FIND_IN_SET_X("'.$campusambasador.'",ambasadors) >','0'); 
		$this->db->or_where('ambasadors',''); 
		$query = $this->db->get();
		if($query){
			return $query->result();
		}
		else{
			return false;
		}
	}

	public function read_action($campusambasador){
		
		$this->db->select('*');
		$this->db->from('ca_action');
		$this->db->where('FIND_IN_SET_X("'.$campusambasador.'",ambasadors) >','0'); 
		$this->db->or_where('ambasadors',''); 
		$query = $this->db->get();
		if($query){
			return $query->result();
		}
		else{
			return false;
		}
	}




	public function ambasadorslist($insertarray){
		
		$this->db->select('id');
		$this->db->from('campusambassador');
		if(!empty($insertarray['country'])){
		$this->db->where('FIND_IN_SET_X("'.$insertarray['country'].'",country) >','0'); 
		}
		if(!empty($insertarray['state'])){
		$this->db->where('FIND_IN_SET_X("'.$insertarray['state'].'",state) >','0'); 
		}
		if(!empty($insertarray['city'])){
		$this->db->where('FIND_IN_SET_X("'.$insertarray['city'].'",city) >','0'); 
		}
		if(!empty($insertarray['college'])){
		$this->db->where('FIND_IN_SET_X("'.$insertarray['college'].'",college) >','0'); 
		}
		if(!empty($insertarray['course'])){
		$this->db->where('FIND_IN_SET_X("'.$insertarray['course'].'",course) >','0'); 
		} 
		if(!empty($insertarray['year'])){
		$this->db->where('year',$insertarray['year']); 
		} 
		$this->db->group_by("id");
		$query = $this->db->get();
		if($query){
			$arrayc = $query->result_array();
			if(!empty($arrayc)){
			$array =  array_column($arrayc, 'id');
			return $array;
			}
			return false;
		}
		else{
			return false;
		}
	}

	public function read_username_session($user_id)
	{
		$this->db->where('id', $user_id);
		$query = $this->db->get('campusambassador');
		if($query->num_rows()>0){
			$res = $query->result_array();
			return $res[0]['name'];
		}
		else{
			return "--";
		}
	}

	public function task_submissions()
	{
		$this->db->select('*');
		$this->db->from('the_report');
		$this->db->where('flag',0);
		$this->db->join('the_ca', 'the_report.user_id = the_ca.id');
		 
		$query = $this->db->get();
		return $query->result();
	}
	public function colleges()
	{
		$this->db->select('*');
		$this->db->from('college'); 
		$query = $this->db->get();
		return $query->result();
	}
	public function collegeById($id)
	{
		$this->db->select('*');
		$this->db->from('college'); 
		$this->db->where('id',$id);
		$query = $this->db->get();
		return $query->row();
	}
	public function courseById($id)
	{
		$this->db->select('*');
		$this->db->from('course'); 
		$this->db->where('id',$id);
		$query = $this->db->get();
		return $query->row();
	}
	public function courses()
	{
		$this->db->select('*');
		$this->db->from('course'); 
		$query = $this->db->get();
		return $query->result();
	}
	public function countries()
	{
		$this->db->select('*');
		$this->db->from('countries'); 
		$query = $this->db->get();
		return $query->result();
	}
	public function states($coutry_id)
	{
		if(!empty($coutry_id)){ 
		$this->db->select('*');
		$this->db->from('states');
		$this->db->where('FIND_IN_SET_X("'.$coutry_id.'",country_id) >','0'); 
		$query = $this->db->get();
		return $query->result();
		}
	}

	/*-------------------------------
		Replicated for filter purpose
	----------------------------------*/
	public function states_for_filter()
	{ 
		$this->db->select('*');
		$this->db->from('states');
		$query = $this->db->get();
		return $query->result();
	}

	/*---------------------------------
		Replicated for filter purpose
	-----------------------------------*/

	public function cities($state_id)
	{
		if(!empty($state_id)){ 
		$this->db->select('*');
		$this->db->from('cities');
		$this->db->where('FIND_IN_SET_X("'.$state_id.'",state_id) >','0');
		$query = $this->db->get();
		return $query->result();
		}
	}

	public function cacount(){
		$query = $this->db->get('campusambassador');
		return $query->num_rows();
	}
	
	public function cataskcount(){
		$query = $this->db->get('ca_task');
		return $query->num_rows();

	}

	public function catakeactioncount(){
		$query = $this->db->get('ca_action');
		return $query->num_rows();

	}

	public function countryambasadorcount(){
		$query = $this->db->get('countryambassador');
		return $query->num_rows();
	} 
    /*changes 24 dec 2020 */
	public function capointscount($id){
		$this->db->select('points');
		#$this->db->from('campusambassador');
		#$this->db->where('id',$id);    
		#$query = $this->db->get();
		#$campusambassador = $query->row();
		#if($campusambassador){
			#return $campusambassador;
		#}
		#else{
			#return false;
		#}
	}

	public function catakeactioncompletecount(){
		
		
	}


	/*-----------------------------
	-------Countryambassador------
	------------------------------*/
	public function countryambasador($id){
		$this->db->select('*');
		$this->db->from('countryambassador');
		$this->db->where('id',$id);    
		$query = $this->db->get();
		$countryambassador = $query->row();
		if($countryambassador){
			return $countryambassador;
		}
		else{
			return false;
		}
	}
	public function read_countryambassador(){
	 
		$this->db->select('*');
		$this->db->from('countryambassador'); 
		$query = $this->db->get();
		return $query->result();
	}

	public function countryambassadorcount(){
		$query = $this->db->get('countryambassador');
		return $query->num_rows();
	}

	public function countryambasadorslist($insertarray_){
		
		$this->db->select('id');
		$this->db->from('countryambassador');
		if(!empty($insertarray_['country'])){
		$this->db->where('FIND_IN_SET_X("'.$insertarray_['country'].'",country) >','0'); 
		}
		if(!empty($insertarray_['state'])){
		$this->db->where('FIND_IN_SET_X("'.$insertarray_['state'].'",state) >','0'); 
		}
		if(!empty($insertarray_['city'])){
		$this->db->where('FIND_IN_SET_X("'.$insertarray_['city'].'",city) >','0'); 
		}
		if(!empty($insertarray_['college'])){
		$this->db->where('FIND_IN_SET_X("'.$insertarray_['college'].'",college) >','0'); 
		}
		if(!empty($insertarray_['course'])){
		$this->db->where('FIND_IN_SET_X("'.$insertarray_['course'].'",course) >','0'); 
		} 
		if(!empty($insertarray_['year'])){
		$this->db->where('year',$insertarray_['year']); 
		} 
		$this->db->group_by("id");
		$query = $this->db->get();
		if($query){
			$arrayc = $query->result_array();
			if(!empty($arrayc)){
			$array =  array_column($arrayc, 'id');
			#print_r($arrayc);
			return $array;
			}
			return false;
		}
		else{
			return false;
		}
	}

	/*public function top_5reports(){
		$this->db->select('TOP 5');
		$this->db->from('reports');
		$query = $this->db->get();
		return $query->result();
	}*/
}
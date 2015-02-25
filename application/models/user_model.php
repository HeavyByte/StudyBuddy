<?php
Class User_model extends CI_Model
{

	function login($email, $password)
	{
		$this -> db -> select('id, email, password');
		$this -> db -> from('users');
		$this -> db -> where('email', $email);
		$this -> db -> where('password', MD5($password));
		$this -> db -> limit(1);

		$query = $this -> db -> get();

		if($query -> num_rows() == 1)
		{
			return $query->result();
		}
		else
		{
			return false;
		}
	}
	
	public function add_user()
	{
		$data=array(
			'firstname'=>$this->input->post('firstname'),
			'lastname'=>$this->input->post('lastname'),
			'email'=>$this->input->post('email'),
			'password'=>md5($this->input->post('password'))
	  	);
	  	$this->db->insert('users',$data);
	 }
 
}
?>
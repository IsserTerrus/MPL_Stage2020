<?php

/**
 * 
 */
class Login_model extends CI_Model
{
	public function __construct()
	{
		$this->load->database();
	}

	public function validate($arrayPseudoPassword)
	{
		return $this->db->get_where('photographe', $arrayPseudoPassword)->row();
	}


}



?>
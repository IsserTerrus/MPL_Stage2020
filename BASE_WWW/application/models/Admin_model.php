<?php

class Admin_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }

		public function get_photographe()
		{
			$query = $this->db->get('photographe');
			return $query->result_array();
		}

		

		public function set_photographe()
		{
			$data = array(
				'NOMAFFICHE' => $this->input->post('pseudoName'),
				'ADRESSE' => $this->input->post('adress'),
				'DESCRIPTION' => $this->input->post('desc'),
				'MAIL' => $this->input->post('mail'),
				'PASSWORD' => $this->input->post('pwd')
			);

			return $this->db->insert('photographe', $data);
		}

/*	public function affiche($IDPHOTOGRAPHE)
		{
			
			$query = $this->db->query('SELECT * FROM PHOTOGRAPHE');
			$row = $query->row();
			return $row;
		}*/

		public function get_user_by_id($IDPHOTOGRAPHE)
		{

		/*	$query = $this->db->where('IDPHOTOGRAPHE', $IDPHOTOGRAPHE);
			$query = $this->db->get('photographe');
			return $query->result();*/

			$query = $this->db->get_where('photographe', array('IDPHOTOGRAPHE' => $IDPHOTOGRAPHE));
        	return $query->row_array();


		}

		public function delete_photographe($IDPHOTOGRAPHE)
		{
		    $this->db->where('IDPHOTOGRAPHE', $IDPHOTOGRAPHE);
	       	$this->db->delete('PHOTOGRAPHE');
	    }


}


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

}


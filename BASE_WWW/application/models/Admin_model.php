<?php

class Admin_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }

		public function get_photographe($photographe = false)
		{
			if ($photographe === false) 
			{
				$query = $this->db->get('photographe');
			    return $query->result_array();
			}

		}

		public function set_photographe()
		{
			
		}

}


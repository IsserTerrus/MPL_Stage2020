<?php

class test_model extends CI_Model {

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
		 
			// 				$query = $this->db->get_where('news', array('slug' => $slug));
			//         return $query->row_array();

		 	$query = $this->db->get_where('photographe', 
		 		array('adresse' => $photographe));
		    return $query->row_array();

		}

}


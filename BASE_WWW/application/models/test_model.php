<?php

class test_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }

public function get_photographe()
{
                $query = $this->db->get('photographe');
                return $query->result_array();
 
// 				$query = $this->db->get_where('news', array('slug' => $slug));
//         return $query->row_array();

 				$query = $this->db->get_where('photographe', array('$idphotographe' => , $idphotographe););
       			 return $query->row_array();

}






}


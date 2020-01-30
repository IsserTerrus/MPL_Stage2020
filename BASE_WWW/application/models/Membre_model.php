<?php



/**
 * 
 */
class Membre_model extends CI_Model
{
	
	public function __construct()
	{
		$this->load->database();
	}

	public function get_Liste_Albums()
	{

	}

	public function get_Liste_Photos()
	{

	}

	public function get_Album()
	{

	}

	public function get_Photo()
	{

	}

	public function set_Album()
	{
		$data = array(
			'NOMALBUM' => $this->input->post('titreAlbum'),
			'DESCRIPTION' => $this->input->post('descAlbum'),
			'STATUT' => $this->input->post('btnStatut'),
		);

		return $this->db->insert('album', $data);
	}

	public function set_Photo()
	{

	}

}
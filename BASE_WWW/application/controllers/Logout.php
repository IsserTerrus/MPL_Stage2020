<?php

Class Logout extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}
	//Déconnexion d'un membre
	public function disconnect() {

		//Suppression de la session qui est actuellement créer
		if ($this->session->userdata('Membre')) 
		{
			$this->session->sess_destroy('Membre');
		}
		else $this->session->sess_destroy('Admin');


		$data['message_display'] = 'Déconnexion réussie';

		$this->load->view('templates/header', $data);
		$this->load->view('templates/success', $data);
		$this->load->view('templates/footer', $data);
	}	

}




?>
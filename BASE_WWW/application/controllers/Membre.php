<?php


class Membre extends CI_Controller {



		public function __construct(){
			parent::__construct();
			if (!$this->session->userdata('Admin') || !$this->session->userdata('Membre')) {
				redirect('connection');
			}
		}

		public function view($page = 'member_index')
		{

			if(! file_exists(APPPATH.'views/member/'.$page.'.php'))
			{
				show_404();
			}

			$data['title'] = ucfirst($page);

			$this->load->view('templates/header_connect', $data);
        	$this->load->view('member/'.$page, $data);
        	$this->load->view('templates/footer', $data);


 		}

 		public function upload()
 		{
 			
 		}

 		public function set_Album()
 		{

 			//Au moment de la création, il faut aussi récupérer l'id du photographe connecté pour attribué son id à l'album qu'il a créer
 			$data['title'] = ucfirst("Création d'un membre");

 			$this->form_validation->set_rules('titreAlbum', 'Titre', 'required');
 			$this->form_validation->set_rules('descAlbum', 'Description facultative', 'required');
 			$this->form_validation->set_rules('btnStatut', 'Statut', 'required');


		    if ($this->form_validation->run() === FALSE)
		    {
				$this->load->view('templates/header_connect', $data);
	        	$this->load->view('member/member_create_album', $data);
	        	$this->load->view('templates/footer');   	
		    }
		    else
		    {
		    	$this->membre_model->set_album();

				$this->load->view('templates/header_connect', $data);
	        	$this->load->view('templates/success', $data);
	        	$this->load->view('templates/footer');
		    }
 		}

 		public function set_Photo()

 		{

 		}
}



?>
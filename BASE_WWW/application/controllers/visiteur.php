<?php
class visiteur extends CI_Controller {



		public function __construct(){
			parent::__construct();
		}

		public function view($page = 'visiteur_index')
		{
			if(!file_exists(APPPATH.'views/visiteur/'.$page.'.php'))
			{
				show_404();
			}
			
			$data['title'] = ucfirst($page);
			
			$this->load->view('templates/header', $data);
        	$this->load->view('visiteur/'.$page, $data);
        	$this->load->view('templates/footer', $data);
 		}

 		public function index_page()
 		{
 			$this->load->view('templates/header', $data);
        	$this->load->view('visiteur/'.$page, $data);
        	//$this->load->view('templates/footer', $data);
 		}


 		public function about()
 		{

 			$data['title'] = ucfirst("À propos");

 			$this->load->view('templates/header', $data);
 			$this->load->view('templates/about');
 			$this->load->view('templates/footer');
 		}

 		public function getListeAlbums()
 		{
 			
 		}

 		public function getListePhotos()
 		{
 			
 		}
}
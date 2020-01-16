<?php
class Publique extends CI_Controller {



		public function __construct(){
			parent::__construct();
			$this->load->helper('url');
		}

		public function view($page = 'public_index')
		{
			if(! file_exists(APPPATH.'views/public/'.$page.'.php'))
			{
				show_404();
			}

			$data['title'] = ucfirst($page);

			$this->load->view('templates/header', $data);
        	$this->load->view('public/'.$page, $data);
        	$this->load->view('templates/footer', $data);
 		}
}
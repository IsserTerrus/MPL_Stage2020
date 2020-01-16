<?php


class Membre extends CI_Controller {



		public function __construct(){
			parent::__construct();
			$this->load->helper('url');
		}

		public function view($page = 'member_identification')
		{
			if(! file_exists(APPPATH.'views/member/'.$page.'.php'))
			{
				show_404();
			}

			$data['title'] = ucfirst($page);

			$this->load->view('templates/header', $data);
        	$this->load->view('member/'.$page, $data);
        	$this->load->view('templates/footer', $data);
 		}
}



?>
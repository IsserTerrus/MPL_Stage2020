<?php


class Admin extends CI_Controller {



		public function __construct(){

			parent::__construct();
			$this->load->model('test_model');
            $this->load->helper('url_helper');
		}

		public function index()
        {
                $data['photographe'] = $this->news_model->get_photographe();
        }



		public function view($page = 'admin_index')
		{
			if(! file_exists(APPPATH.'views/admin/'.$page.'.php'))
			{
				show_404();
			}

			$data['title'] = ucfirst($page);
			$data['photographe'] = $this->test_model->get_photographe();


			$this->load->view('templates/header', $data);
        	$this->load->view('admin/'.$page, $data);
        	$this->load->view('templates/footer', $data);
 		}
		public function create_user($page = 'admin_create_account')
		{
			$data['title'] = ucfirst($page);
			$this->load->helper('form');
    		$this->load->library('form_validation');	

			$this->form_validation->set_rules('title', 'Title', 'required');
		    $this->form_validation->set_rules('text', 'Text', 'required');

		    if ($this->form_validation->run() === FALSE)
		    {
				$this->load->view('templates/header', $data);
	        	$this->load->view('admin/'.$page, $data);
	        	$this->load->view('templates/footer', $data);		    	
		    }

		    else
		    {
		    	 $this->news_model->set_news(); //Appel du model pour pouvoir procéder à l'insertion des éléments du formulaire
		    	 $this->load->view('templates/success'); //Redirection vers une page pour avertir que l'utilisateur est créer
		    }
 		} 		
}



?>
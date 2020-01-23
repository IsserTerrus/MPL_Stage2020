<?php


class Admin extends CI_Controller {


/*
		public function index(){
			$data['photographe'] = $this->test_model->get_photographe();

			$data['title'] = "Photographe";

			$this->load->view('templates/header', $data);
        	$this->load->view('admin/admin_compte', $data);
        	$this->load->view('templates/footer', $data);			

		}*/

/*		public function admin_compte($membre)
        {
            $data['title'] = ucfirst($page);
			$data['news_item'] = $this->test_model->get_photographe($membre); 

			$this->load->view('templates/header', $data);
        	$this->load->view('admin/admin_compte', $data);
        	$this->load->view('templates/footer', $data);

        }*/



		public function view($page = "admin_index")
		{
			$data['title'] = ucfirst($page);
			$data['photographe'] = $this->admin_model->get_photographe();

			if(!file_exists(APPPATH.'views/admin/'.$page.'.php'))
			{
				show_404();
			}

			$this->load->view('templates/header', $data);
        	$this->load->view('admin/'.$page, $data);
        	$this->load->view('templates/footer', $data);
 		}



		public function create_user($page = 'admin_create_account')
		{
			$data['title'] = ucfirst($page);	

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
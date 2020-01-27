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


		public function view($page = "admin_index")
		{
			$data['photographe'] = $this->admin_model->get_photographe();
			
			if(!file_exists(APPPATH.'views/admin/'.$page.'.php'))

			{
				show_404();
			}

			$data['title'] = ucfirst($page);

			$this->load->view('templates/header', $data);
        	$this->load->view('admin/'.$page, $data);
        	$this->load->view('templates/footer', $data);
 		}



		public function create_user($page = 'admin_create_account')
		{
			$data['title'] = ucfirst($page);	

			$this->form_validation->set_rules('pseudoName', 'Pseudo', 'required');
			$this->form_validation->set_rules('adress', 'Adresse', 'required');
			$this->form_validation->set_rules('mail', 'Email', 'required');
			$this->form_validation->set_rules('desc', 'Description facultative', 'required');
			$this->form_validation->set_rules('pwd', 'Password', 'required');

		    if ($this->form_validation->run() === FALSE)
		    {
				$this->load->view('templates/header', $data);
	        	$this->load->view('admin/'.$page, $data);
	        	$this->load->view('templates/footer', $data);		    	
		    }

		    else
		    {
		    	 $this->admin_model->set_photographe(); //Appel du model pour pouvoir procéder à l'insertion des éléments du formulaire
		    	 $this->load->view('templates/success'); //Redirection vers une page pour avertir que l'utilisateur est créer
		    }
 		} 

		public function update_user($IDPHOTOGRAPHE = 0)
		{
			if($IDPHOTOGRAPHE === 0)
				die('Erreur ID Photographe NULLE !');

			$id = $this->input->get('IDPHOTOGRAPHE');
			//$data['INFOPHOTOG'][] = $this->admin_model->update_photographe($id);

			$this->load->view('templates/header');
			$this->load->view('admin/admin_edit', $data);
			$this->load->view('templates/footer');
		}

		public function get_user($IDPHOTOGRAPHE){

			$data['title'] = ucfirst("admin_edit");	
		

			if($IDPHOTOGRAPHE === NULL)
				die('Erreur ID Photographe NULLE !'); 

			$data['photographe'] = $this->admin_model->get_user_by_id($IDPHOTOGRAPHE);

			$this->load->view('templates/header', $data);
			$this->load->view('admin/admin_edit', $data);
			$this->load->view('templates/footer');

		}
		
		public function delete_photographe()
		{
			$IDPHOTOGRAPHE = $this->input->get('IDPHOTOGRAPHE');
			$this->admin_model->delete_photographe($IDPHOTOGRAPHE);

			$this->load->view('templates/header');
			$this->load->view('templates/success');		
			$this->load->view('templates/footer');
		}

}







?>
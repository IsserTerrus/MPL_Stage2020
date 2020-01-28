<?php


class Admin extends CI_Controller {


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



		public function create_photographe($page = 'admin_create_account')
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

		public function update_photographe()
		{
			$data['title'] = ucfirst('admin_edit');	
			$id_photographe = $this->uri->segment(3);

			$data['photographe'] = $this->admin_model->get_photographe_by_id($id_photographe);


			$this->form_validation->set_rules('pseudoName', 'Pseudo', 'required');
			$this->form_validation->set_rules('adress', 'Adresse', 'required');
			$this->form_validation->set_rules('mail', 'Email', 'required');
			$this->form_validation->set_rules('desc', 'Description facultative', 'required');
			$this->form_validation->set_rules('pwd', 'Password', 'required');

		    if ($this->form_validation->run() === FALSE)
		    {
				$this->load->view('templates/header', $data);
	        	$this->load->view('admin/admin_edit', $data);
	        	$this->load->view('templates/footer', $data);		    	
		    }

		    else
		    {

		    	$data_update = array(
		    		"NOMAFFICHE" => $this->input->post("pseudoName"),
		    		"ADRESSE" => $this->input->post("adress"),
		    		"MAIL" => $this->input->post("mail"),
		    		"DESCRIPTION" => $this->input->post("desc"),
		    		"PASSWORD" => $this->input->post("pwd"),
		    	);
		    	 $this->admin_model->update_photographe($data_update, $this->input->post("id_hidden")); //Appel du model pour pouvoir procéder à l'insertion des éléments du formulaire
		    	 $this->load->view('templates/success'); //Redirection vers une page pour avertir que l'utilisateur est créer
		    }
		}

		public function get_photographe(){

			$data['title'] = ucfirst("admin_edit");
			$id_photographe = $this->uri->segment(3);

			$data['photographe'] = $this->admin_model->get_photographe_by_id($id_photographe);			
		

			if($id_photographe === NULL)
				die('Erreur ID Photographe NULLE !'); 

			$this->load->view('templates/header', $data);
			$this->load->view('admin/admin_edit', $data);
			$this->load->view('templates/footer');

		}
		
		public function delete_photographe($IDPHOTOGRAPHE)
		{
			$this->admin_model->delete_photographe($IDPHOTOGRAPHE);

			$this->load->view('templates/header');
			$this->load->view('templates/success');		
			$this->load->view('templates/footer');
		}

}







?>
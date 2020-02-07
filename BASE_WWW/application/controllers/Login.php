<?php


Class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata()) 
		{
			if ($this->session->userdata('Admin')) 
			{
				redirect('admin');
			}
			else if($this->session->userdata('Membre'))
			{
				redirect ('member');
			}
		}
	}


	//Affichage du formulaire de connexion
	public function index() {

		$data['title'] = ucfirst("Connexion - FOKUZA");

		$this->load->view('templates/header', $data);
		$this->load->view('member/member_identification');
		$this->load->view('templates/footer');

	}

	//Connexion d'un membre
	public function connect()
	{

        $this->form_validation->set_rules('pseudo', 'Pseudo', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() === FALSE) 
		{
			redirect('connection');
		}

		else 
		{

			$sel = $this->config->item('sel');
			$dataArray['NOMAFFICHE'] = $this->input->post('pseudo');
			$dataArray['PASSWORD'] = hash('sha256', $sel.$this->input->post('password'));

			$data = $this->login_model->validate($dataArray);

			if ($data) 
			{
				if ($data->BOOLADMIN === "true") {
					$this->session->set_userdata("Admin", $data);
					redirect('admin');
				}
				else
				{
					$this->session->set_userdata("Membre", $data);
					redirect('member');
				}
			}
			else
			{
				echo "erreur ici";
			}			
		}

	}
}

?>
<?php


Class loginController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
/*		if ($this->session->userdata()) 
		{
			if ($this->session->userdata('Admin')) 
			{
				redirect('admin');
			}
			else redirect ('member');
		}*/
	}


	//Affichage du formulaire de connexion
	public function index() {

		$data['title'] = ucfirst("Connexion - FOKUZA");

		$this->load->view('templates/header', $data);
		$this->load->view('member/member_identification');
		$this->load->view('templates/footer');

	}

	//Connexion d'un membre
	public function login()
	{

        $this->form_validation->set_rules('pseudo', 'Pseudo', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() === FALSE) 
		{
			redirect('visiteur/connection');
		}

		else 
		{

			$sel = $this->config->item('sel');
			$dataArray['NOMAFFICHE'] = $this->input->post('pseudo');
			$dataArray['PASSWORD'] = hash('sha256', $sel.$this->input->post('password'));

			$data = $this->login_model->validate($dataArray);

			if ($data) 
			{
				if ($data->IDPHOTOGRAPHE === 12) {
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

	//Déconnexion d'un membre
	public function logout() {

		//Suppression de la session
		unset(
				$_SESSION['Admin'],
				$_SESSION['Membre']
		);

		$data['message_display'] = 'Successfully Logout';

		$this->load->view('templates/header', $data);
		$this->load->view('templates/success', $data);
		$this->load->view('templates/footer', $data);
	}	













	// Check for user login process ////// méthode pas encore au point
	public function user_login_process() {

/*		$this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');*/


		if ($this->form_validation->run() == FALSE) {

			if(isset($this->session->userdata['member_identification'])){

				$this->load->view('admin_index');

			} else {

				$this->load->view('member_identification');
			}

		} else {
			$data = array(
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password'));

			$result = $this->login_database->login($data);

			if ($result == TRUE) {

				$username = $this->input->post('username');
				$result = $this->login_database->read_user_information($username);

				if ($result != false) {

					$session_data = array(
					'username' => $result[0]->user_name,
					'email' => $result[0]->user_email,);

					// Add user data in session
					$this->session->set_userdata('logged_in', $session_data);
					$this->load->view('admin_index');
				}
			} else {

				$data = array('error_message' => 'Invalid Username or Password');

				$this->load->view('member_identification', $data);
			}
		}	
	}
}

?>
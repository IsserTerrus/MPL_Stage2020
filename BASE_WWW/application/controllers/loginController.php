<?php


Class loginController extends CI_Controller {


	// Show login page
	public function index() {
		$this->load->view('member_identification');

	}

	

	public function login()
	{

		$dataArray['pseudo'] = $this->input->post('pseudo');
		$dataArray['password'] = hash($this->input->post('password'));

		$validation = $this->login_model->validate($dataArray);

		if ($validation) 
		{
			echo "Connection établie";
		}
		else
		{
			redirect('member/member_identification');
		}
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

	// Logout from admin page
	public function logout() {

		// Removing session data
		$sess_array = array('username' => '');

		$this->session->unset_userdata('logged_in', $sess_array);

		$data['message_display'] = 'Successfully Logout';

		$this->load->view('public_index', $data);
	}
}

?>
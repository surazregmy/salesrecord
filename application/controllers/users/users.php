<?php 

class Users extends CI_Controller
{

	public function login(){
			$this->form_validation->set_rules('username','Username','required');
			$this->form_validation->set_rules('password','Password','required');

			if($this->form_validation->run() === FALSE){
					$this->load->view('welcome_message');
			}
			else
			{
				$check_user_exist =  $this->user_model->validate_user_exist();
				
				if($check_user_exist){
					$user_data = array(
							'user_id' => $check_user_exist['users_id'],
							'username' =>$check_user_exist['username'],
							'logged_in'=>TRUE,
							'script_status'=>0 //This is used for running script
						);
					$this->session->set_userdata($user_data);
					redirect('items/view');
					
				}
				else{
					$this->session->set_flashdata('login_failed','No user exists');
					redirect('/');
				}
			}


	}
	public function logout(){
		$this->session->unset_userdata('user_id');
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('logged_in');
		$this->session->set_flashdata('log_out','You are now logged out!');
		redirect('/');


	}




}


?>
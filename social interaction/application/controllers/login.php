<?php
	class Login extends CI_Controller
	{
		function index()
		{
			if($this->session->userdata('id'))
			{
				return redirect('user_q');
			}
			$this->load->view('login_user');
		}
		function sucesful()
		{
			if($this->session->userdata('id'))
			{
				return redirect('user_q');
			}
			$this->form_validation->set_rules('uname','User Name','required|min_length[6]');
			$this->form_validation->set_rules('pass','Password','required|min_length[6]');
			if($this->form_validation->run())
			{
				$uname=$this->input->post('uname');
				$pass=$this->input->post('pass');
				$this->load->model('check_login');
				$id=$this->check_login->check($uname,$pass);
				if($id)
				{
					$this->session->set_userdata('id',$id);
					return redirect('user_q');
					//return redirect('user');
				}
				else
				{

					$this->session->set_flashdata('login_failed','please enter correct username or password');
					return redirect('login');
				}
			}
			else
			{
				$this->load->view('login_user');		
			}
		}
	}
?>
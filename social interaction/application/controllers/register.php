<?php
	class Register extends CI_Controller
	{
		function index()
		{
			if($this->session->userdata('id'))
			{
				return redirect('user_q');
			}
			$this->load->view('registration.php');
		}
		function sucsesful()
		{
			if($this->session->userdata('id'))
			{
				return redirect('user');
			}
			//$this->form_validation->set_message('is_unique','The User Name is already registered.');
			$this->form_validation->set_rules('name','Name','required|min_length[6]');
			$this->form_validation->set_rules('uname','User Name','required|min_length[6]|is_unique[user.uname]');
			$this->form_validation->set_rules('email','Email','required|valid_email|is_unique[user.email]');
			$this->form_validation->set_rules('pass','Password','required');
			if($this->form_validation->run())
			{
				
				$name=$this->input->post('name');
				$uname=$this->input->post('uname');
				$email=$this->input->post('email');
				$pass=$this->input->post('pass');
				$this->load->model('insert_team');
				if($this->insert_team->intable($pass,$name,$uname,$email))
				{
					echo "<script>alert('Your are sucesfully registered');</script>";
					$this->load->model('check_login');
					$id=$this->check_login->check($uname,$pass);
					if($id)
					{
						$this->session->set_userdata('id',$id);
						return redirect('user_q');
					}
				}
				else
				{
					echo "connection to database failed...";
				}
			}
			else
			{
				$this->load->view('registration.php');
			}
		}
	}
?>
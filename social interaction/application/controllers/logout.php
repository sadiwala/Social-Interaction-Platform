<?php
	class Logout extends CI_Controller
	{
		function index()
		{
			$this->session->unset_userdata('id');
			return redirect('login');
		}
	}
?>
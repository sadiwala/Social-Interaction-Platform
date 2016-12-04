<?php
	class Check_login extends CI_model
	{
		function check($uname,$pass)
		{
			$n=$this->db->where(['uname'=>$uname,'pass'=>$pass])
						->get('user');
			if($n->num_rows())
			{
				return $n->row()->id;
			}
			else
			{
				return FALSE; 	
			}
		}
	}
?>
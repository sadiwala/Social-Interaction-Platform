<?php
	class Insert_team extends CI_Model
	{
		function intable($pass,$name,$uname,$email)
		{
			return $this->db->insert('user',['name'=>$name,'uname'=>$uname,'email'=>$email,'pass'=>$pass]);
		}
	}
?>
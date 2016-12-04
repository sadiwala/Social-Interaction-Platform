<?php
	class Ques extends CI_Model
	{
		function all()
		{
			$ques=$this->db->get('ques');
			$ques=$ques->result_array();
			return $ques;
		}
	}
?>
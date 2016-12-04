<?php
	class Ans extends CI_Model
	{
		function all()
		{
			$ans=$this->db->get('ans');
			$ans=$ans->result_array();
			return $ans;
		}
	}
?>
<?php
	class Ques_in extends CI_Model
	{
		function insert($ques,$id)
		{
			$name=$this->db->where(['id'=>$id])
					 ->get('user');
			$name=$name->result_array();
			$name=$name[0]['name'];
			return $this->db->insert('ques',['user_id'=>$id,'ques'=>$ques,'name'=>$name]);
		}
	}
?>
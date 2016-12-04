<?php
	class Ans_in extends CI_Model
	{
		function insert($q_id,$ans,$u_id)
		{
			$name=$this->db->where(['id'=>$u_id])
					 ->get('user');
			$name=$name->result_array();
			$name=$name[0]['name'];
			return $this->db->insert('ans',['ans'=>$ans,'ques_id'=>$q_id,'user_id'=>$u_id,'name'=>$name]);
		}
	}
?>
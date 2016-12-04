<?php
	class User_q extends CI_Controller
	{
		function index()
		{
			if(!$this->session->userdata('id'))
			{
				return redirect('login');
			}
			$id=$this->session->userdata('id');
			$name=$this->db->where(['id'=>$id])
							->get('user');
			$name=$name->result_array();
			$this->load->model('ques');
			$ques=$this->ques->all();
			$this->load->model('ans');
			$ans=$this->ans->all();
			$this->load->view('user',['name'=>$name[0]['name'],'ques'=>$ques,'ans'=>$ans]);
		}
		function insert()
		{
			if(!$this->session->userdata('id'))
			{
				return redirect('login');
			}
			$id=$this->session->userdata('id');
			$ques=$this->input->post('ques');
			$this->load->model('ques_in');
			$name=$this->db->where(['id'=>$id])
							->get('user');
			$name=$name->result_array();
			$in=$this->ques_in->insert($ques,$id);
			$this->load->model('ques');
			$ques=$this->ques->all();
			$this->load->model('ans');
			$ans=$this->ans->all();
			if($in)
			{
				$this->load->view('user',['name'=>$name[0]['name'],'ques'=>$ques,'ans'=>$ans]);
			}
		}
		function insert_ans()
		{
			if(!$this->session->userdata('id'))
			{
				return redirect('login');
			}
			$id=$this->session->userdata('id');
			$q_id=$this->input->post();
			$this->load->model('ans_in');
			foreach ($q_id as $key => $value) {
				if($this->ans_in->insert($key,$value,$id))
				{
					return redirect('user_q');
				}
			}
		}
	}
?>
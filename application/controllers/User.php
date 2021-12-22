<?php
	class User extends CI_Controller
	{
		public function __construct()
		{
		parent::__construct();
		$this->load->model('M_user', 'model');
		$this->table = 'user_info';
		}
	
		public function add()
		{
			$this->load->view('user_add');
		}
		
		public function save()
		{
		if(isset($_POST['submit']))
		{
			$emp_name = $this->input->post('emp_name');
			$emp_phone1 = $this->input->post('emp_phone1');
			$emp_phone2 = $this->input->post('emp_phone2');

			if($emp_name and $emp_phone1 and $emp_phone2)
			{
					$user = [
					'emp_name'=>$emp_name,
					'emp_phone1'=>$emp_phone1,
					'emp_phone2'=>$emp_phone2,
					'flag'=>'0'
					];

					$this->model->insert_data($this->table, $user);
	
			}
			redirect('user/show');
		}
		}
		
		public function show()
		{
			$data['users'] = $this->model->get_all_data($this->table);
			$this->load->view('user_show', $data);
			
		}
		
		public function edit($id)
		{
			$data['user'] = $this->model->get_data($this->table, ['id' => $id])->row();
			$this->load->view('user_edit', $data);
		}
		
		public function update()
		{
			if(isset($_POST['edit']))
			{
				$emp_name = $this->input->post('emp_name');
				$emp_phone1 = $this->input->post('emp_phone1');
				$emp_phone2 = $this->input->post('emp_phone2');
				$id = $this->input->post('id');

				if($emp_name and $emp_phone1 and $emp_phone2)
				{
						$data = [
						'emp_name'=>$emp_name,
						'emp_phone1'=>$emp_phone1,
						'emp_phone2'=>$emp_phone2
						];

						$this->model->update_data($this->table, $data, [id => $id]);
					
				}
				redirect('user/show');
			}
		}
		
		public function delete($id)
		{
			$delete = $this->model->delete_data($this->table, ['id'=>$id]);

			if($delete)
				redirect('user/show');
		}
	}
?>
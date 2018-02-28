<?php 
	class Plan extends MY_Controller
	{
		function index()
		{
			$input = array(
				'date' => date('Y-m-d')
				);
			$this->load->model('Plan_model');

			$this->data['works'] = $this->Plan_model->get_list($input);

			$this->load->view('admin/plan', $this->data);
		}

		function add()
		{

			if ($this->input->post()) {
				$this->load->library('form_validation');
				$this->load->helper('form');
				$this->form_validation->set_rules('content', 'Content', 'required');
				if ($this->form_validation->run()) {
					$new_work = array(
						'content' => $this->input->post('content'),
						'date' => date('Y-m-d')
					);

					$this->load->model('Plan_model');
					if ($this->Plan_model->create($new_work))
					{
						$ret = array(admin_url('plan/done'),$this->Plan_model->get_insert_id());
						var_dump($ret);
						return false;
					}
				}
			}

			redirect(admin_url('plan'));
		}

		function done()
		{
			if ($this->input->post()) {
				$this->load->model('Plan_model');

				$data = array(
					'done' => 1
				);

				if ($this->Plan_model->update($this->input->post('id'), $data))
				{
					echo "ok";
					return false;
				}
			}

			redirect(admin_url('plan'));
		}
	}
 ?>
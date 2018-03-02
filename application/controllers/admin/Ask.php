<?php 
	class Ask extends MY_Controller
	{
		function index()
		{
			$this->load->model('Ask_model');
			$input = array(
				'limit' => array(5,0)
				);

			$this->data['asks'] = $this->Ask_model->get_list($input);

			$this->load->view('admin/ask', $this->data);
		}

		function load()
		{
			if ($this->input->get()){
				$page = $this->input->get('page');

				$this->load->model('Ask_model');
				$input = array(
					'limit' => array(5, $page * 5)
					);

				$this->data['asks'] = $this->Ask_model->get_list($input);

				$this->load->view('admin/ajax_load_more_ask', $this->data);
				return;
			}

			redirect(admin_url('ask'));
		}
	}
 ?>
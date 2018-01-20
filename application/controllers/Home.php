<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Home extends MY_Controller
	{
		function index()
		{
			// Get my info
			$this->load->model('Me_model');
			$this->data['me'] = $this->Me_model->get_info(1);

			// Get posts
			$input = array('limit' => array(11,0));
			$this->load->model('Post_model');
			$this->data['posts'] = $this->Post_model->get_list($input);

			$this->load->view('site/layout', $this->data);
		}

		function get_ask()
		{
			$this->load->library('form_validation');
			$this->load->helper('form');

			if ($this->input->post()) {
				$this->form_validation->set_rules('content', 'The content', 'required');

				if ($this->form_validation->run()) {
					$content = $this->input->post("content");

					$data = array(
						'content' => $content,
						'created' => date('Y-m-d h:i:s')
					);

					$this->load->model('Ask_model');

					if ($this->Ask_model->create($data)) {
						$this->session->set_flashdata('message-success', SUCCESS_ICON . '<span>Nội dung đã gửi thành công!</span>');
					}
				}
				else {
					$this->session->set_flashdata('message-error', ERROR_ICON . '<span>Hãy nhập nội dung!</span>');
				}
			}

			redirect(base_url());
		}

		function load_more()
		{
			echo "Huynv2909";
		}
	}
 ?>
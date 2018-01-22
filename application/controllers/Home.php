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

			// Set
			$this->data['highlight'] = 0;
			$this->data['title'] = "Huy's Blog - Chia sẻ của tôi";
			$this->data['temp'] = 'site/main';
			

			$this->load->view('site/layout', $this->data);
		}

		function view($post_id)
		{
			// Get my info
			$this->load->model('Me_model');
			$this->data['me'] = $this->Me_model->get_info(1);

			$this->data['title'] = 'Em owi em dangd lamf gif vaayj';

			// Set
			$this->data['highlight'] = 1;
			$this->data['temp'] = 'site/post';

			$this->load->view('site/layout', $this->data);
		}

		function get_ask()
		{
			$this->load->library('form_validation');
			$this->load->helper('form');

			if ($this->input->post()) {
				$this->form_validation->set_rules('content', 'The content', 'trim|required');

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
			$index = $this->input->post('index');
			$limit = $this->input->post('limit');

			$input = array('limit' => array($limit, $index));

			$this->load->model('Post_model');
			$this->data['posts'] = $this->Post_model->get_list($input);

			$this->load->view('site/post_ajax', $this->data);
		}

		function subscribe()
		{
			$this->load->library('form_validation');
			$this->load->helper('form');

			if ($this->input->post()) {
				$this->form_validation->set_rules('email', 'The email', 'trim|required|valid_email');

				if ($this->form_validation->run()) {
					$email = $this->input->post("email");

					$data = array(
						'email' => $email,
						'created' => date('Y-m-d h:i:s')
					);

					$this->load->model('Email_model');

					if ($this->Email_model->create($data)) {
						$this->session->set_flashdata('message-thanks', SUCCESS_ICON . '<span>Thank you!</span>');
					}
				}
				else {
					$this->session->set_flashdata('message-oh', ERROR_ICON . '<span>Your email??? :(</span>');
				}
			}

			redirect(base_url());
		}
	}
 ?>
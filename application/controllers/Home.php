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

			// Get post
			$this->load->model('Post_model');
			$post = $this->Post_model->get_info($post_id);
			$this->data['post'] = $post;
			$this->data['title'] = $post->title;

			$field = array('id', 'title');
			$this->data['random_posts'] = $this->get_random_posts($post_id, 4, $field);

			// Get comment
			$input = array(
				'limit' => array(11, 0),
				'where' => array('id_post' => $post_id)
			);
			$this->load->model('Comment_model');
			$this->data['comments'] = $this->Comment_model->get_list($input);

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
			if ($this->input->post())
			{
				$index = $this->input->post('index');
				$limit = 3;

				$input = array('limit' => array($limit, $index));

				$this->load->model('Post_model');
				$this->data['posts'] = $this->Post_model->get_list($input);

				$this->load->view('site/post_ajax', $this->data);
			}
			else
			{
				redirect(base_url());
			}
		}

		function load_cmt()
		{
			if ($this->input->post()) {
				$index = $this->input->post('index');
				$post = $this->input->post('post');
				$limit = 3;

				$input = array('limit' => array($limit, $index),
							'where' => array('id_post' => $post)
						);

				$this->load->model('Comment_model');
				$this->data['comments'] = $this->Comment_model->get_list($input);

				$this->load->view('site/comment_ajax', $this->data);
			}
			else
			{
				redirect(base_url());
			}
		}

		function subscribe()
		{

			if ($this->input->post()) {
				$this->load->library('form_validation');
				$this->load->helper('form');
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

		function comment()
		{
			if ($this->input->post()) {
				$this->load->library('form_validation');
				$this->load->helper('form');

				$this->form_validation->set_rules('comment', 'Your comment', 'trim|required');

				if ($this->form_validation->run()) {
					$data = array(
						'id_post' => $this->input->post('post'),
						'audience' => $this->get_random_audience(),
						'content' => $this->input->post('comment'),
						'created' => date('Y-m-d h:i:s')
						);

					$this->load->model('Comment_model');
					if ($this->Comment_model->create($data)) {
						$data['id'] = $this->Comment_model->get_insert_id();

						$data['ad'] = 0;
						$this->data['comments'] = array((object)$data);
						// $this->session->set_flashdata('cmt-success', 'Commented success');

						$this->load->view('site/comment_ajax', $this->data);
					}				
				}
				else
				{
					// $this->session->set_flashdata('cmt-failed', 'Commented failed');
				}
			}
			else {
				redirect(base_url());
			}
		}

		function love()
		{
			$this->load->view('site/love');
		}

		private function get_random_posts($id, $quantity, $field)
		{
			$this->load->model('Post_model');

			do {
				$flag = true;
				$result = $this->Post_model->get_random_records($quantity, $field);
				foreach ($result as $post) {
					if ($post->id == $id) {
						$flag = false;
					}
				}
			} while (!$flag);

			return $result;
		}

		private function get_random_audience()
		{
			$color = array('blue', 'red', 'purple', 'yellow', 'grey', 'black', 'orange');

			return $color[array_rand($color)];
		}
	}
 ?>
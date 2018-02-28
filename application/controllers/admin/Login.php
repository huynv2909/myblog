<?php 
	class Login extends MY_Controller
	{
		function index()
		{
			$this->load->library('form_validation');
			$this->load->helper('form');

			if ($this->input->post()) {
				$this->form_validation->set_rules('login', 'Login', 'callback_check_login');

				if ($this->form_validation->run()) {
					$this->session->set_userdata('user', true);
					redirect(admin_url('home'));
				}
			}

			$this->load->view('admin/login');
		}

		function check_login() {
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			$this->load->model('admin_model');

			$where = array('username' => $username, 'password' => $password);

			if ($this->admin_model->check_exist($where)) {
				return true;
			}

			$this->form_validation->set_message(__FUNCTION__, 'Đăng nhập không thành công!');
			return false;
		}
	}
 ?>
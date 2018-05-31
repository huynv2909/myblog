<?php
  /**
   * author HuyNV
   */
  class XSS extends MY_Controller
  {
    function index()
    {
      // Get post
      $this->load->model('Post_model');
      $post = $this->Post_model->get_info(17);
      $this->data['post'] = $post;
      $this->data['title'] = $post->title;

      // Get comment
      $input = array(
         'limit' => array(11, 0),
         'where' => array('id_post' => 17)
      );
      $this->load->model('Comment_model');
      $this->data['comments'] = $this->Comment_model->get_list($input);

      // Set
      $this->data['highlight'] = 1;

      $this->load->view('site/XSS/post', $this->data);
    }

    public function Login()
    {
      if ($this->input->post()) {
        $this->load->model('Admin_model');
        $info = array(
          'username' => $this->input->post('username'),
          'password' => $this->input->post('password')
        );

        if ($this->Admin_model->check_exist($info)) {
          $this->session->set_userdata('user', $info['username']);
          $this->load->helper('cookie');
          $cookie = array(
             'name'   => 'username',
             'value'  => $info['username'],
             'expire' => '10000'
         );
         $this->input->set_cookie($cookie);
         $cookie = array(
            'name'   => 'password',
            'value'  => $info['password'],
            'expire' => '10000'
         );
         $this->input->set_cookie($cookie);

			redirect(base_url('XSS'));
        }


      }
      $this->load->view('site/XSS/login');
    }
  }

 ?>

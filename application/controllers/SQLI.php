<?php
   /**
    *
    */
   class SQLI extends MY_Controller
   {
         public function Login()
         {
            $error = $this->session->flashdata('error');
            $data = array();
            if (isset($error) && $error != '') {
               $data['error'] = $error;
            }
           if ($this->input->post()) {
             // Kết nối CSDL
            $conn = new mysqli('localhost', 'root', 'code', 'myblog');

            // Kiểm tra kết nối
            if ($conn->connect_error) {
                die("Kết nối thất bại: " . $conn->connect_error);
            }

            $username = $this->input->post('username');
            $password = $this->input->post('password');

            $sql = 'SELECT name FROM admin WHERE username = "' . $username . '" AND password = "' . $password . '";';



                        // Câu SQL lấy danh sách
                        // mrjohn" OR "1 = 1
                        // mrjohn"; UPDATE admin SET password = "hahaha" WHERE username = "mrjohn"; --
            if ($conn->multi_query($sql)) {
                 if ($result = $conn->store_result()) {
                     if ($row = $result->fetch_row()) {
                        echo '<h1>Hello ' . $row[0] . '</h1>';
                     }
                     else {
                        $this->session->set_flashdata('error', 'Check your info!');
                        redirect('SQLI/Login');
                     }
                     $result->free();
                  }
            }
            else {
               echo "no result";
            }

            // ngắt kết nối
            $conn->close();

           }
           else {
             $this->load->view('site/SQLI/login', $data);
            }
         }
   }

 ?>

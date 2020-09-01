<?php
    class Login extends MY_Controller
    {
        public function index()
        {

          $this->load->view('admin/admin_login');

        }

        public function login_User()
        {




         //  $this->load->library('form_validation');
        $this->form_validation->set_rules('Uname','User Name','required|trim|max_length[8]');
        $this->form_validation->set_rules('pass','Password','required|trim');
         //  $this->form_validation->set_error_delimiters("<p class='text-danger'>","</p>");

           if($this->form_validation->run())
           {

               $username   =   $this->input->post('Uname');
               $password   =   $this->input->post('pass');

               $this->load->model('login_model','logmod');

               $login_id	 =	  $this->logmod->userlog($username, $password);
            
              //  print_r($login_id);exit();

                if($login_id)
                {
                    $this->session->set_userdata('id_100',$id);
                    return redirect('DASHBOARD');
                }
                else
                {
                    // echo "Password Not Matched";
                   $this->load->view('Login');
                }
           }
           else
           {
                $this->load->view('Login');

              //  echo "Validation Error";
           }



        }

        public function logout()
        {
            $this->session->unset_userdata('id_100');
            return redirect('Login');
        }
    }
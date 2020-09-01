<?php
    class Admin extends MY_Controller
    {
        public function ___construct()
        {
            parent::__construct();
            if( $this->session->userdata('id') )
            {
                $this->load->view('admin/Dashboard');
            }
            return redirect('Login');
            
        }

        public function Dashboard()
        {
            $this->load->view('admin/Dashboard');
        }
    }
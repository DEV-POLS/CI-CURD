<?php
    class Document extends MY_Controller
    {

        public function __construct()
        {
            parent::__construct();
            $this->load->database();
            //$this->load->model('Client_model','cmod');
        }

        public function view_clnt()
        {
          //  $result = $this->cmod->ViewClient();

            $this->load->view('public/Document'/*,['data'=>$result]*/);
        }
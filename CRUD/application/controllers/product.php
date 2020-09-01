<?php
    class Product extends MY_Controller
    {

        public function __construct()
        {
            
            parent::__construct();

            $this->load->model('product_model','promo');

        }
        public function view_prod()
        {
                        

            $result =   $this->promo->ViewProduct();

                        $this->load->view('public/product',['data'=>$result]);

        }
    }
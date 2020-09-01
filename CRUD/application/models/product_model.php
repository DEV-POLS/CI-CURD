<?php
    class Product_model extends MY_Model
    {
        public function ViewProduct()
        {	

            $query = $this->db->select('*')
                     ->from('product_master')
                     ->where(['status'=>'ACTIVE'])
                     ->get();
                                 
            return $query->result();
        }
    }
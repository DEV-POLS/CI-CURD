<?php
    class Login_model extends MY_Model
    {
        public function userlog($username, $password)
        {
            $sql = $this->db->where(['loginname_100'=>$username, 'loginpwd_100'=>$password])->get('100_user');
            
            if( $sql->num_rows() )
            {
                return $sql->row()->id_100; 
            }
            else
            {
                return FALSE;
            }
        }
    }
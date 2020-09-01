<?php
    class Users_model extends MY_Model
    {
        public function ViewUsers()
        {

            $query = $this->db->select('*')
                     ->from('100_user')
                     ->where(['active_yn_100'=>'yes'])
                     ->get();
                                 
            return $query->result();
        }

        public function AddUsers($array)
        {
            return $this->db->insert('100_user', $array);
        }

        public function DeleteUsr($U_id)
        {
            return  $this->db
                            ->where('id_100',$U_id)
                            ->set(['active_yn_100'=>'NO'])
                    ->update('100_user',$Usr_mstr);
        }
    }
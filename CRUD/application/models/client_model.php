<?php
    class Client_model extends MY_Model
    {
        public function ViewClient()
        {	
            /*$this->db->select('*');
            $this->db->from('100_user');
            $this->db->join('200_client','100_user.id_100 = 200_client.active_yn_200');
            $query = $this->db->get();

            return $query->result();*/

            $query = $this->db->select('*')
                     ->from('200_client')
                     ->where(['active_yn_200'=>'yes'])
                     ->get();

                     //print_r($query);exit();
                                 
            return $query->result();
        }

        public function AddClient($array)
        {
            return $this->db->insert('200_client', $array);
        }

        public function EditClient($client_id)
        {
            $query = $this->db->select(['id_200','clientname_200','panortan_200','city_200','clienttype_200'])
                            ->where('id_200',$client_id)
                            ->where(['active_yn_200'=>'yes'])
                            ->get('200_client');

            return $query->row();

        }

        public function UpdateCli($clid, Array $climas )
        {
            return  $this->db
                            ->where('id_200',$clid)
                            ->where(['active_yn_200'=>'yes'])
                    ->update('200_client',$climas);
        }

        public function DeleteCli($clid)
        {
            return  $this->db
                            ->where('id_200',$clid)
                            ->set(['active_yn_200'=>'NO'])
                    ->update('200_client',$climas);
        }
    }
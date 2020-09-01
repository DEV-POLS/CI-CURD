<?php
    class Client extends MY_Controller
    {

        public function __construct()
        {
            parent::__construct();
            $this->load->database();
            $this->load->model('Client_model','cmod');
        }

        public function view_clnt()
        {
            $result = $this->cmod->ViewClient();

            $this->load->view('public/Client',['data'=>$result]);
        }


        public function Add_clnt()
        {            
            $this->load->view('public/client_add');
          
            if($this->form_validation->run('Add_client_rules') == TRUE)
            {
                $post = $this->input->post();
                
                unset($post['submit']); 
                
                $result  =  $this->cmod->AddClient($post);

               if($result)
               {
                    echo "Data Insert Successful";
                    return redirect('CLIENT_VIEW');
               }
            }
        }


        public function EditClient($client_id)
        {   
            $cliedit = $this->cmod->EditClient($client_id);

            $this->load->view('public/client_edit',['climod'=>$cliedit]);
        }


        public function Update_Client($clid)
        {   
            if($this->form_validation->run('Add_client_rules') == TRUE)
            {
                $post = $this->input->post();

                unset($post['Submit']);

                $UpCat  = $this->cmod->UpdateCli($clid, $post);

                if($UpCat)
                {                   
                    return redirect('CLIENT_VIEW');
                }
            }
        }

        public function Delete_Client($clid)
        {              
            $UpClint  = $this->cmod->DeleteCli($clid);

            if($UpClint)
            {                   
                return redirect('CLIENT_VIEW');
            }            
        }
    }

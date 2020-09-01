<?php
    class Users extends MY_Controller
    {

        public function __construct()
        {
            parent::__construct();
            $this->load->database();
            $this->load->model('Users_model','Umod');
        }

        public function view_Users()
        {
            $result = $this->Umod->ViewUsers();

            $this->load->view('admin/UsersView',['data'=>$result]);
        }


        public function index()
        {
           
        }

         public function Add_Users()
        {  

             /*************  STARTUP CAPTCHA CODE ***********/ 

            $this->load->helper('captcha');
            $this->load->library('image_lib');

              $config  =  array(                
                'img_path' => './captcha/',
                'img_url' => base_url('captcha'),
                'img_width'  => '179',
                'font_path' => '/system/fonts/texb.ttf',
                'word_length' => 8,
                'font_size' => 80,
                'pool'    => '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ',
                'colors'  => array(
                  'background'  => array(0,123,255),
                  'border'  => array(0,123,255),
                  'text'    => array(255,255,255),
                  'grid'    => array(244,89,52)
                )       
          );

            $captcha = create_captcha($config);

            $this->session->set_userdata('captcha_key', $captcha['word']);

            $this->load->view('admin/Users_Add', ['cap' => $captcha]);


            

            /*************  END CAPTCHA CODE ***********/


          /******************* Start Image Upload Code ********************/

          $config = [
                    'upload_path'  =>  './uploads/',
                    'allowed_types'  =>  'jpg|jpeg|png|gif',

            ];

            $this->load->library('upload', $config);

          /******************* End Image Upload Code ********************/


          //  $this->load->view('admin/Users_Add');

          $OrgnlWord = $this->session->userdata('captcha_key');

          $InputWord  = $this->input->post('cap_images_100');

         


          
    if($this->form_validation->run('Register') && $this->upload->do_upload('pic_images_100')  )
            {



             /* if($this->input->post())
              {
                  $keyWord  =  $this->session->userdata('captcha_key');
                  
                  $postWord =  $this->input->post('captcha');

                  if($keyWord == $postWord)
                  {
                      echo "Captcha Success";
                  }
                  else
                  {
                      echo "Captcha Failed";

                      return redirect('USERS_ADD');
                  }
              }*/




                $post = $this->input->post();
                
                unset($post['submit']); 




                /******************* Start Image Upload Code ********************/

                $data = $this->upload->data();

                $image_path = base_url( "uploads/" . $data['raw_name']  . $data['file_ext']);

                $post['pic_images_100'] =  $image_path;

                /******************* End Image Upload Code ********************/

                
                $result  =  $this->Umod->AddUsers($post);

               if($result)
                {
                  $this->session->set_flashdata('success','User Register Successfully');

                  return redirect('USERS');    
                }
            }
             
        }

        public function Delete_User($U_id)
        {              
            $Updet_Users  = $this->Umod->DeleteUsr($U_id);

            if($Updet_Users)
            {                   
                return redirect('USERS');
            }            
        }
    }

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

        public function Add_Users()
        { 

            $config = [
                    'upload_path'  =>  './uploads',
                    'allowed_types'  =>  'jpg|jpeg|png|gif',
            ];

            $this->load->library('upload',$config);





            /*************  START CAPTCHA CODE ***********/ 

            $this->load->helper('captcha');

              $arguments  =  array(                
                'img_path' => './captcha/',
                'img_url' => base_url('captcha'),
                'img_width'  => '179',
                'font_path' => '/system/fonts/texb.ttf',
              //  'expiration'  => 7200,
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

            $cap = create_captcha($arguments);

            $this->session->set_userdata('captcha_key', $cap['word']);

            $this->load->view('admin/Users_Add',['captcha'=>$cap]);

            /*************  END CAPTCHA CODE ***********/

          
            if($this->form_validation->run('Register') && $this->upload->do_upload() )
            {
              $post = $this->input->post();
                
              unset($post['submit']); 
                
              $result  =  $this->Umod->AddUsers($post);

              if($result)
              {
                $OrgnlWord = $this->session->userdata('captcha_key');

                /********** "cap_images_100" is a captcha image field_Name on view **********/

                $InputWord  = $this->input->post('cap_images_100');

                if($OrgnlWord === $InputWord)
                {
                
                $this->session->set_flashdata('success','User Register Successfully');

                  return redirect('USERS');     
                }
                else
                {

                  $upload_error = $this->upload->display_error();

                  $this->session->set_flashdata('error','Invalid Captcha Entered');
                  redirect('USERS_ADD','refresh');
                }                   
              }
            }

        }
    }


/*************************************** User View **************************************/


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>

     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>


</head>
<body>
    <div class="container">
        <div class="jumbotron">
            <div class="card">
            <h2 class="btn btn-primary">Featured Users</h2>
            <div class="card-body">
                <h5 class="card-title">Special treatment</h5>
                <!-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> -->

                   <div class="container">
                      <!--h2>Form Validation</h2>
                      <p>In this example, we use <code>.was-validated</code> to indicate what's missing before submitting the form:</p-->

                           


                    
                        <div class="form-group">

                                 <!-- Form Open -->

                        <!--form method="post" action="<!-?= base_url('Client/Add_clnt')?>" role="form"-->            
<?php echo form_open_multipart('Users/Add_Users'); ?>

      <?php
        if($this->session->flashdata('error'))
        {
          echo "<p class='alert alert-danger'>".$this->session->flashdata('error')."</p>";
        }
      ?>

      <?php
        if($this->session->flashdata('success'))
        {
          echo "<p class='alert alert-success'>".$this->session->flashdata('success')."</p>";
        }
      ?>

                                 <!-- Form Open -->

                          <label for="uname">User Name:</label>

<input type="text" class="form-control" id="uname" name="loginname_100" value="<?php echo set_value('loginname_100');?>" placeholder="User Name">

                        
                          <!--div class="valid-feedback">Valid.</div-->
                          <div class="invalid-feedback"><?php echo form_error('loginname_100');?></div>
                          
                        </div>

                        <div class="form-group">
                          <label for="uname">Password:</label>

<input type="text" class="form-control" id="uname" name="loginpwd_100" value="<?php echo set_value('loginpwd_100');?>" placeholder="Password">
                        
                          <!--div class="valid-feedback">Valid.</div-->
                          <div class="invalid-feedback"><?php echo form_error('loginpwd_100');?></div>
                          
                        </div>

                        

                        <div class="form-group">
                          <label for="uname">Users Type:</label>

    <select name="usertype_100" class="custom-select custom-select-sl">
        <option selected required="required">---Select Users Type Menu---</option>
        <option value="Admin" required="required">Admin</option>
        <option value="mkt" required="required">Marketing</option>
        <option value="act" required="required">Accounts</option>
    </select>
                        </div>




                        <div class="form-group">
                          <label for="uname">Users Full Name:</label>

<input type="text" class="form-control" id="uname" name="userfull_name_100" value="<?php echo set_value('userfull_name_100');?>" placeholder="Users Full Name">
                        
                          <!--div class="valid-feedback">Valid.</div-->
                          <div class="invalid-feedback"><?php echo form_error('userfull_name_100');?></div>
                          
                        </div>


        <div class="form-group">
          <label for="exampleInputEmail1" class="input_label red_text">Captcha Code &nbsp;<?= $captcha['image'] ?></label>
          <input type="text" class="form-control inputtype1" name="cap_images_100" value="" placeholder="Type Captcha Here">
        </div>


                        <div class="form-group">
                          <label for="uname">Select Image:</label><br>

                            <?php echo form_upload(['name'=>'pic_images_100']);?>

                            <?php 
                              if(isset($upload_error))
                              {
                                echo $upload_error;
                              }
                            ?>
                        
                          <!--div class="valid-feedback">Valid.</div-->
                          <div class="invalid-feedback">
                            <?php 
                              if(isset($upload_error))
                              {
                                echo $upload_error;
                              }
                            ?>                        
                          </div>                          
                        </div>







                        
                        <!--?php echo form_error('clienttype_200');?-->

                        <!-- div class="form-group">
                          <label for="pwd">Password:</label>
                          <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd" required>
                          <div class="valid-feedback">Valid.</div>
                          <div class="invalid-feedback">Please fill out this field.</div>
                        </div -->
                        <div class="form-group form-check">
                          <label class="form-check-label">
                            <!--input class="form-check-input" type="checkbox" name="remember" required--> 
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback"></div>
                          </label>
                        </div>

                        <input type="submit" name="submit"  class="btn btn-success badge-pill" style="width:80px;">

                        <!--button type="submit" class="btn btn-success badge-pill" name="Submit" style="width:80px;">Submit</button-->
                      </form>
                    </div> 



                <!--a href="#" class="btn btn-primary">Add</a-->
            </div>
            </div>
        </div>
    </div>
</body>

</html>





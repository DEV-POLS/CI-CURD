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
                 <?php echo form_open_multipart('USERS_ADD');?>

          <?php
            if($this->session->flashdata('success'))
            {
              echo "<p class='alert alert-success'>".$this->session->flashdata('success')."</p>";
            }
            else if($this->session->flashdata('error'))
            {
              echo "<p class='alert alert-danger'>".$this->session->flashdata('error')."</p>";
            }
            if($this->session->flashdata('error2'))
            {
              echo "<p class='alert alert-danger'>".$this->session->flashdata('error')."</p>";
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

          <input type="password" class="form-control" id="uname" name="loginpwd_100" value="<?php echo set_value('loginpwd_100');?>" placeholder="Password">
                            
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
                                          <label for="uname">Upload Image:</label><br>



                      <?php echo form_upload(['name'=>'pic_images_100','required'=>'required']);?>

                      <?php 
                        if(isset($upload_error))
                        {
                          echo $upload_error;
                        }
                      ?>
                          
                          <div class="invalid-feedback">
                            <?php 
                              if(isset($upload_error))
                              {
                                echo $upload_error;
                              }
                            ?>                        
                          </div>
                          
                        </div>


                        <div class="form-group">
          <label for="exampleInputEmail1" class="input_label red_text">Captcha Code &nbsp;

            <?= $cap['image'] ?>

          </label>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <!--a href="<?= base_url('module/images/captcha/captcha.jpg')?>" class="reload-captcha refreshCaptcha btn btn-primary btn-sm badge-pill" ><i class="glyphicon glyphicon-refresh">Refresh</i></a-->

          <!--img src="<?php echo base_url('module/images/captcha/cap.png'); ?>" width="720" height="246" alt=""/-->

          <input type="text" class="form-control inputtype1" name="cap_images_100" placeholder="Type Captcha Here">

          

                        </div>
                        <div class="form-group form-check">
                          <label class="form-check-label"> 
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback"></div>
                          </label>
                        </div>


                        <input type="submit" name="submit"  class="btn btn-success badge-pill" style="width:80px;">

                        <?= anchor("USERS",'Back',['class'=>'btn btn-primary badge-pill',]); ?>

                        <!--button type="submit" class="btn btn-success badge-pill" name="Submit" style="width:80px;">Submit</button-->
                     <?php echo form_close();?>
                    </div> 



                <!--a href="#" class="btn btn-primary">Add</a-->
            </div>
            </div>
        </div>
    </div>
</body>

<script>
  $( document ).ready( function (){
    var base_url = '<?php echo base_url(); ?>';
    $('.reload-captcha').click(function(event){
      event.preventDefault();
      $.ajax({
        url:base_url+'Users_Add.php/auth/refresh_captcha',
        dataType: "text",  
        cache:false,
        success:function(data){
          $('.captcha-img').attr("src", data);
        }
      });
    });            
  });
</script>

</html>
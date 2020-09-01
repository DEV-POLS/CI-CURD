<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>




    <style>
    /* body{background:url(image/background.jpg) center center; width:100%; height:100vh; background-attachment:fixed; display:flex; justify-content:center; align-items:center;}  */
    body{ background:url(module/images/login_background.png) -200px center;  width:100%; height:100vh; background-attachment:fixed; display:flex; justify-content:center; align-items:center;}
    .form_back{ width:100%; height:440px; background:#fff; box-shadow:0 0 30px 2px #bdbbbd; outline-color:#fff; outline-offset:4px; outline-width:1px; outline-style:solid; display:flex;}
    /* .form_back_left{ width:45%; min-height:100%; background:url(image/left_image.png) -200px center;} */
    .form_back_right{ width:100%; min-height:100%; box-sizing:border-box; padding:20px;}
    .form_back_right h2{ text-align:center; letter-spacing:3px; font-size:26px; font-weight:300; color:#fff; padding:4px; background:rgba(86,7,132,0.6); border-radius:4px 4px 0 0; margin:0 0 10px 0;}
    .inputtype1{ height:44px;}
</style>




     <!-- Bootstrap CSS CDN -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

     <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900&display=swap" rel="stylesheet">

     <?= link_tag('module/css/bootstrap.css')?>

    <!--link href="css/bootstrap.css" rel="stylesheet" type="text/css"-->
    <script src="module/js/bootstrap.js" type="text/javascript"></script>





    <!-- Our Custom CSS -->
    <!--link rel="stylesheet" href="module/css/menu.css"-->
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">


</head>
<body>

  <div class="container">

    <?php echo form_open('LOGIN',['class'=>'form-horizontal']); ?>

 <div class="col-md-5 offset-md-6">    
  <div class="form_back">
   <!-- left -->
    <div class="form_back_left d-xs-none"></div>
   <!-- left -->
   <!-- right -->
    
    <div class="form_back_right">
     <center><a class="navbar-brand" href="#s"><img src="module/images/logo/logo1.png" alt="logo" class="img-fluid" style=" width:60px; height:60px;"></a> <br> <span style=" font-size:16px; margin:0 0 20px 0;">RENEWAL APPLICATION</span> <br> <span style=" font-size:14px; margin:0 0 20px 0;">Please login with your user information.</span> </center> <br>
     <form>
                                                      
       <div class="col-md-12">
        <div class="form-group">
          <input type="text" name="Uname" class="form-control inputtype1" id="exampleInputEmail1" placeholder="User Name">
         </div>
         <div class="form-group">
          <input type="password" name="pass" class="form-control inputtype1" id="exampleInputEmail1" placeholder="Password">
         </div>
        </div>
        <div class="col-md-12">

          <button type="submit" class="btn btn-info" style=" width:100%; margin:0 0 10px 0; text-align:center;">Login</button>
  </fieldset>


          <!--a href="<?php base_url('LOGIN');?>" class="btn btn-info" style=" width:100%; margin:0 0 10px 0; text-align:center;" name="sub_reg">Login</a-->
        </div>

     </form>
    </div>
    </div>
   <!-- right -->
  </div>
    </div>
   <!-- right -->
  </div>
    </div>































































<!-- div class="container">
<?php echo form_open('LOGIN',['class'=>'form-horizontal']); ?>
<div class="container col-md-4"> 
  <fieldset>

    

    <legend>Login</legend>
    
    <div class="form-group row">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">User Name</label>
      <input type="text" name="Uname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Username">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input type="password" name="pass" class="form-control" id="exampleInputPassword1" placeholder="Password">
    </div>
    <fieldset class="form-group">
    </fieldset>
    <button type="submit" class="btn btn-primary">Login</button>
  </fieldset>
    </div>
  </div -->
</form>





</body>
</html>
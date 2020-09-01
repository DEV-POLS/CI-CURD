<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>


</head>
<body>
    <div class="container">
        <div class="jumbotron">
            <div class="card">
            <h2 class="btn btn-primary">Featured Client</h2>
            <div class="card-body">
                <h5 class="card-title">Special treatment</h5>
                <!-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> -->

                   <div class="container">
                      <!--h2>Form Validation</h2>
                      <p>In this example, we use <code>.was-validated</code> to indicate what's missing before submitting the form:</p-->

                           


                    
                        <div class="form-group">

                                 <!-- Form Open -->

                        <!--form method="post" action="<!-?= base_url('Client/Add_clnt')?>" role="form"-->            
                <?php echo form_open_multipart('Client/Add_clnt');?>

                                 <!-- Form Open -->

                          <label for="uname">Client Name:</label>

<input type="text" class="form-control" id="uname" name="clientname_200" value="<?php echo set_value('clientname_200');?>" placeholder="Client Name">

                        
                          <!--div class="valid-feedback">Valid.</div-->
                          <div class="invalid-feedback"><?php echo form_error('clientname_200');?></div>
                          
                        </div>

                        <div class="form-group">
                          <label for="uname">Pan No:</label>

<input type="number" class="form-control" id="uname" name="panortan_200" value="<?php echo set_value('panortan_200');?>" placeholder="Pan No">
                        
                          <!--div class="valid-feedback">Valid.</div-->
                          <div class="invalid-feedback"><?php echo form_error('panortan_200');?></div>
                          
                        </div>

                        <div class="form-group">
                          <label for="uname">City:</label>

<input type="text" class="form-control" id="uname" name="city_200" value="<?php echo set_value('city_200');?>" placeholder="City Name">
                        
                          <!--div class="valid-feedback">Valid.</div-->
                          <div class="invalid-feedback"><?php echo form_error('city_200');?></div>
                          
                        </div>

                        <div class="form-group">
                          <label for="uname">Job Type:</label>

                          <select name="clienttype_200" class="custom-select custom-select-sl">
                            <option selected required="required">---Select Menu---</option>
                            <option value="Government" required="required">Government</option>
                            <option value="Private" required="required">Private</option>
                          </select>
                        </div>




                        
                        <?php echo form_error('clienttype_200');?>

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

<?= anchor("CLIENT_VIEW",'Back',['class'=>'btn btn-primary badge-pill',]); ?>

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
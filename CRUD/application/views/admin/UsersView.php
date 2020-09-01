<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title> Application</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="module/css/menu.css">
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">

</head>

<body>

    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header" style="background: white;">
                <h3 style="color: black;">Logo</h3>
                <!-- <img src="logo1.png" alt="logo"> -->
            </div>

            <ul class="list-unstyled components">
                <li>
                    <a href="<?php echo base_url('DASHBOARD'); ?>">Dashboard</a>
                </li>
                <li>
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">MENU</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="<?php echo base_url('USERS'); ?>">All Users</a>
                        </li>
                        <li>
                            <a href="#">Report</a>
                        </li>
                        <!--li>
                            <a href="#">sub-menu3</a>
                        </li-->
                    </ul>
                </li>
                <!--li>
                    <a href="#">Settings</a>
                </li>
                
                <li>
                    <a href="#">Documentation</a>
                </li>
                <li>
                    <a href="#">Contact Us</a>
                </li>
                <li>
                    <a href="#">Logout</a>
                </li-->
            </ul>
        </nav>

        <!-- Page Content  -->
        <div id="content">
            <div class="menu-header">
                <button type="button" id="sidebarCollapse" class="btn menu-btn">
                    <img src="module/images/nav.png" alt="Menu">
                </button>
                <span class="menu-text">CLIENT's VIEW</span>
            </div>

                <!-- <-----------------  START DESIGN OF VIEW----------------->

                <div class="container-fluid">
        <div class="jumbotron">
            <div class="card">

                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Users Name</th>
                                <th scope="col">Password</th>
                                <th scope="col">Users Type</th>
                                <th scope="col">Users Full Name</th>
                                <th scope="col">Users Pic</th>
                                <th scope="col">DOJ</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>

<?php
    if( is_array($data))

      //  print_r($data);exit();
    {
    $count  =  $this->uri->segment(3 , 0);
    foreach ($data as $row)
    {

        ?>

        <tr>
                <td><?= ++$count ?></td>
                <td><?= $row->loginname_100 ?></td>
                <td><?= $row->loginpwd_100 ?></td>
                <td><?= $row->usertype_100 ?></td>
                <td><?= $row->userfull_name_100 ?></td>
                <td>
                    <?php
                        if(! is_null($row->pic_images_100))
                        {
                            ?>
                                <img src="<?= $row->pic_images_100 ?>" class="rounded-circle" width="50" height="50">
                            <?php
                        }
                    ?>                     
                </td>
                <td><?= $row->created_on_100 ?></td>
                <td>
                <div class="col-lg-16 row ">
                    <div class="col-lg-4 col-lg-offset-2 text-left">

                        <!--button class="btn btn-warning btn-sm badge-pill">Edit</button-->

<?= anchor("#",'Edit',['class'=>'btn btn-warning btn-sm badge-pill',]); ?>
                        
                        <!--?= anchor("#",'Edit',['class'=>'btn btn-warning btn-md badge-pill','style'=>'width:80px;']); ?-->
                    </div>
                    <div class="col-lg-2 col-lg-offset-4 text-right">

<?= anchor("Users/Delete_User/{$row->id_100}",'Delete',['class'=>'btn btn-danger btn-sm badge-pill',]); ?>

                        

                        <!--?=
                            form_open(''),
                            form_hidden('id',$row->id),
                            form_submit(['name'=>'submit','value'=>'Delete','class'=>'btn btn-danger btn-md badge-pill','style'=>'width:80px;']),
                            form_close();
                        ?-->
                    </div>
                </div>
        </td>
            </tr>
        <?php
    }
    }
?>

                        </tbody>
                    </table>

                    <div class="row">
                        <div class="col-md-12">

                            <a href="<?php echo base_url('USERS_ADD');?>" class="btn btn-primary badge-pill" style="width:80px;">Add</a>
                        </div>
                    </div>
            </div>
            </div>
        </div>
    </div>

                    <!--?php include('cat_add.php'); ?-->

                <!-- <-----------------  END DESIGN OF VIEW----------------->

        </div>
    </div>








    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <!-- jQuery Custom Scroller CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $("#sidebar").mCustomScrollbar({
                theme: "minimal"
            });
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar, #content').toggleClass('active');
                $('.collapse.in').toggleClass('in');
                $('a[aria-expanded=true]').attr('aria-expanded', 'false');
            });
        });
    </script>
</body>

</html>
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
                            <a href="<?php echo base_url('CLIENT_VIEW'); ?>">Client</a>
                        </li>
                        <li>
                            <!--a href="<?php echo base_url('PRODUCT'); ?>">Product</a-->
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

                <div class="container">
        <div class="jumbotron">
            <div class="card">
            <!-- <h5 class="card-header">Featured</h5>
            <div class="card-body">
                <h5 class="card-title">Special Treatment</h5> -->
                <!-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> -->
                <!--form method="post" enctype="multipart/data" action="<!--?php echo base_url('category/ViewCategory');?>"-->

                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Client Name</th>
                                <th scope="col">Pan No</th>
                                <th scope="col">City</th>
                                <th scope="col">Job Type</th>
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
                <td><?= $row->clientname_200 ?></td>
                <td><?= $row->panortan_200 ?></td>
                <td><?= $row->city_200 ?></td>
                <td><?= $row->clienttype_200 ?></td>
                <td>
                <div class="col-lg-16 row ">
                    <div class="col-lg-4 col-lg-offset-2 text-left">

                        <!--button class="btn btn-warning btn-sm badge-pill">Edit</button-->

<?= anchor("Client/EditClient/{$row->id_200}",'Edit',['class'=>'btn btn-warning btn-sm badge-pill',]); ?>
                        
                        <!--?= anchor("#",'Edit',['class'=>'btn btn-warning btn-md badge-pill','style'=>'width:80px;']); ?-->
                    </div>
                    <div class="col-lg-2 col-lg-offset-4 text-right">

                        <!--button class="btn btn-danger badge-pill btn-sm" >Delete</button-->
<?= anchor("Client/Delete_Client/{$row->id_200}",'Delete',['class'=>'btn btn-danger btn-sm badge-pill',]); ?>

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

                            <a href="<?php echo base_url('Client/Add_clnt');?>" class="btn btn-primary badge-pill" style="width:80px;">Add</a>


                            <!--button class="btn btn-primary badge-pill" href="<?php echo base_url('Client/Add_clnt');?>" style="width:80px;">Add</button-->
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
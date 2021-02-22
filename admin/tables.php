<?php  
  //Include the connection file
  $con = mysqli_connect("localhost","root","","cftdc");
  $results = mysqli_query($con,"SELECT * FROM citizen");
  $eresults = mysqli_query($con,"SELECT * FROM developments");
  $Cresults = mysqli_query($con,"SELECT * FROM county");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }else{
    echo "";
  }
session_start(
[
    'cookie_lifetime' => 86400,
]);
  // $Category=$_POST['category'];

$user=$_SESSION['uid'];
$sql="SELECT * FROM admin WHERE AdminId='$user'";
$result = mysqli_query($con,$sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) { 
        $email = $row["email"];
        $Username = $row ["Username"];
        
       
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>CFTDC admin - Tables</title>

    <!-- Custom fonts for this template -->
     <link rel="shortcut icon" type="image.PNG" href="../assets/Images/logo.PNG" >
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/style2.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="../index.php">

                <div class="sidebar-brand-icon rotate-n-15">
                    <img src="../assets/images/logo.png" alt="logo" class="logo" style="border-radius: 400px; width: 30px;min-height: 30px;">
                </div>
                <div class="sidebar-brand-text mx-3">CFTDC Tables </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="index2.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Components</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Components:</h6>
                        <a class="collapse-item" href="buttons.html">Buttons</a>
                        <a class="collapse-item" href="cards.php">Cards</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            
            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Addons
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Pages</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Login Screens:</h6>
                        <a class="collapse-item" href="login.html">Login</a>
                        <a class="collapse-item" href="register.html">Register</a>
                        <a class="collapse-item" href="../logout.php">logout</a>
                        
                    </div>
                </div>
            </li>

            <!-- Nav Item - Charts -->
           

            <!-- Nav Item - Tables -->
            <li class="nav-item active">
                <a class="nav-link" href="tables.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Tables</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <form class="form-inline">
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>
                    </form>

                    <!-- Topbar Search -->
                  <!--   <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form> -->

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                       
                        <!-- Nav Item - Messages -->
                        

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><b><?php echo $_SESSION["email"];?></b></span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Tables</h1>
                    <p class="mb-4">Approve different developments as well as accept user registration</p>
                     <?php
                    $con = mysqli_connect("localhost","root","","cftdc"); 
                    // Check connection 
                    if (mysqli_connect_errno()) 
                    { 
                    echo "Failed to connect to MySQL: " . mysqli_connect_error(); 
                    }
                    $results = mysqli_query($con,"SELECT * FROM citizen");
                    $eresults = mysqli_query($con,"SELECT * FROM developments");
                    $Cresults = mysqli_query($con,"SELECT * FROM county");
                    ?>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary"> Citizen User Control</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>User name</th>
                                            <th>User id</th>
                                            <th>user Status</th>
                                            <th>Approve</th>
                                            <th>Delete</th>
                                            <th>Suspend</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>User name</th>
                                            <th>User id</th>
                                            <th>user Status</th>
                                            <th>Approve</th>
                                            <th>Delete</th>
                                            <th>Suspend</th>
                                        </tr>
                                    </tfoot>
                                    <?php
        
       
                               while($citizen= $results->fetch_assoc()){?>
                                    <tbody>
                                        <tr>
                                            <td><?php echo $citizen['firstname']; ?></td>
                                            <td><?php echo $citizen['citizenid']; ?></td>
                                            <td><?php echo $citizen['status']; ?></td>
                                            <td><a href="tables.php?id1=<?php echo $citizen['citizenid']; ?>" class="edit_btn" >Approve</a></td>
                                            <td><a href="tables.php?id2=<?php echo $citizen['citizenid']; ?>" class="del_btn">Delete</a></td>
                                            <td><a href="tables.php?id=<?php echo $citizen['citizenid']; ?>" class="del_btn">Suspend</a></td>
                                            <?php
                                             if(isset($_GET['id'])){
                                              $id = $_GET['id'];
                                              $result2 =$con->query("update citizen set status=0 where  citizenid= '$id'");}

                                              if(isset($_GET['id1'])){
                                              $id1 = $_GET['id1'];
                                              $result2 =$con->query("update citizen set status=1 where  citizenid= '$id1'");}

                                              if(isset($_GET['id2'])){
                                              $id1 = $_GET['id2'];
                                              $result3 =$con->query("delete from citizen where citizenid= '$id2'");}

                                              ?>

                                        </tr>
                                        <?php } 
                                         ?>
        
    
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                     <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Development Control</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>User name</th>
                                            <th>User id</th>
                                            <th>user activities</th>
                                            <th>Approve</th>
                                            <th>Delete</th>
                                            <th>Suspend</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>User name</th>
                                            <th>User id</th>
                                            <th>user activities</th>
                                            <th>Approve</th>
                                            <th>Delete</th>
                                            <th>Suspend</th>
                                        </tr>
                                    </tfoot>
                                    <?php
        
       
                               while($dev= $eresults->fetch_assoc()){?>
                                    <tbody>
                                        <tr>
                                            <td><?php echo $dev['countyname']; ?></td>
                                            <td><?php echo $dev['description']; ?></td>
                                            <td><?php echo $dev['category']; ?></td>
                                            <td style="display: none"><?php echo $dev['did']; ?></td>
                                            <td><a href="tables.php?id4=<?php echo $dev['did']; ?>" class="edit_btn" >Approve</a></td>
                                            
                                            <td><a href="tables.php?id5=<?php echo $dev['did']; ?>" class="del_btn">Suspend</a></td>

                                            <td><a href="tables.php?id6=<?php echo $dev['did']; ?>" class="del_btn">Delete</a></td>
                                            <?php
                                             if(isset($_GET['id4'])){
                                              $id4 = $_GET['id4'];
                                              $result4 =$con->query("update developments set category= 'active' where did= '$id4'");}

                                              if(isset($_GET['id5'])){
                                              $id5 = $_GET['id5'];
                                              $result5 =$con->query("update developments set category= 'Pending' where did= '$id5'");}

                                              if(isset($_GET['id6'])){
                                              $id5 = $_GET['id6'];
                                              $result6 =$con->query("delete from developments where did= '$id6'");}

                                              ?>
                                            
                                        </tr>
                                        <?php } mysqli_close($con);?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->


            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>
    <?php

    }
} else {
    echo "0 results";
}



?> 

</body>

</html>
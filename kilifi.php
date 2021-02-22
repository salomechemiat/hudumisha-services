<? include("countbutton.php");
session_start();
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- SEO Meta Tags -->
   <!--  <meta name="description" content="Aria is a business focused HTML landing page template built with Bootstrap to help you create lead generation websites for companies and their services.">
    <meta name="author" content="Inovatik"> -->

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
  <meta property="og:site_name" content="" /> <!-- website name -->
  <meta property="og:site" content="" /> <!-- website link -->
  <meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
  <meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
  <meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
  <meta property="og:url" content="" /> <!-- where do you want your post to link to -->
  <meta property="og:type" content="article" />

    <!-- Website Title -->
    <title>CFTDC - Kilifi Counties
    </title>
    
    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:500,700&display=swap&subset=latin-ext" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600&display=swap&subset=latin-ext" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <link href="css/swiper.css" rel="stylesheet">
  <link href="css/magnific-popup.css" rel="stylesheet">
  <link href="css/styles.css" rel="stylesheet">
  
  <!-- Favicon  -->
    <link rel="shortcut icon" type="image.PNG" href="assets/Images/logo.PNG" >
    <style>
      .table2{
   
    margin-left: 25%;
    margin-top: -2%;
    margin-bottom: 2%;
}
.table2{
 border: 1px solid ;
}
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

/* Button used to open the contact form - fixed at the bottom of the page */
.checked {
  color: orange;
}
.open-button {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
  width: 280px;
}

/* The popup form - hidden by default */
.form-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  /*border: 3px solid #f1f1f1;*/
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}

/* Full-width input fields */
.form-container input[type=text], .form-container input[type=password] {
  width: 200%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

/* When the inputs get focus, do something */
.form-container input[type=text]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/login button */
.form-container .btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
</style>
  
</head>


<body data-spy="scroll" data-target=".fixed-top" style="background-image: url('assets/images/landing2.jpg');background-color: #f66b3e ;
  background-repeat: no-repeat;
  background-attachment: scroll;
  height: 400px; /* You must set a specified height */
  background-position: center; 
  background-size: cover;">
    
    <!-- Preloader -->
  <div class="spinner-wrapper">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
    <!-- end of preloader -->
    

    <!-- Navbar -->
    <nav class="navbar navbar-expand-md navbar-dark navbar-custom fixed-top">
        <!-- Text Logo - Use this if you don't have a graphic logo -->
        <!-- <a class="navbar-brand logo-text page-scroll" href="index.html">Aria</a> -->

        <!-- Image Logo -->
         <a style="font-size: 50px; color: white; " href="index.php"><img src="assets/images/logo.png" alt="logo" class="logo" style="border-radius: 400px; width: 70px; min-height: 70px"> CFTDC</a>
        
        <!-- Mobile Menu Toggle Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-awesome fas fa-bars"></span>
            <span class="navbar-toggler-awesome fas fa-times"></span>
        </button>
        <!-- end of mobile menu toggle button -->

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="index.php">HOME <span class="sr-only">(current)</span></a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#services">SERVICES</a>
                </li>
                
                

                <!-- Dropdown Menu -->          
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle page-scroll" href="#about" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">PROJECTS</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="kilifiroads"><span class="item-text">INFRASTRUCTURE</span></a>
                        <div class="dropdown-items-divide-hr"></div>
                        <a class="dropdown-item" href="kilifihealth"><span class="item-text">HEALTH</span></a> <div class="dropdown-items-divide-hr"></div>
                        <a class="dropdown-item" href="kilifieducation"><span class="item-text">EDUCATION</span></a><div class="dropdown-items-divide-hr"></div>
                        <a class="dropdown-item" href="logout.php"><span class="item-text">LOG OUT</span></a>
                    </div>
                     
                </li>
                <!-- end of dropdown menu -->

                <li class="nav-item">
                    <a class="nav-link page-scroll" href="profilecounty.php">My Profile</a>
                </li>
            </ul>
            
        </div>
    </nav> <!-- end of navbar -->
    <!-- end of navbar -->


    <!-- Header -->
    <header id="header" class="header">
        <div class="header-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                      <div style="color: white;background-color: #ff914d;list-style-type: none;width:50%; margin-top: -100px;margin-left: 25%">
                      <h2 style="color: white"><b><u>Counties Ranking</u> </b></h2>
                        <ul style="#ff914d;list-style-type: none;margin: 0;
                          padding: 0;">
                            <?php  
                                      //Include the connection file
                                     require_once 'connection.php';
                                      // $Category=$_POST['category'];
                                     $user = 'active';

                                      $sql="SELECT countyid, countyname, COUNT(countyid) AS qty FROM developments  Where category = '$user'GROUP BY countyid ORDER BY qty DESC  ";

                                      $result2= $mysqli->query($sql);
                                      $rank=1;
                                    // $result2 = mysqli_query($con,$sql);
                                      if (isset($result2->num_rows) && $result2->num_rows >0) {
                                        // output data of each row
                                        echo "<table class=table2><tr><th class=table2>Rank</th><th class=table2>County Name</th><th class=table2>Number Development</th></tr>";
                                        while($row = $result2->fetch_assoc()) { 
                                            //  $countyname = $row["countyname"];
                                            //  $countyid = $row['countyid'];
                                            //  $qty = $row['qty'];
                                            // echo $row['$countyid']." ".$row['$qty']." <br />";
                                           

                                          echo "<tr><td>" .$rank."</td><td>" .$row['countyname']."</td><td>".$row['qty']."</td></tr>";
                                                             $rank++;

                                                            
                                            

                                    ?>

                              
                                      <!-- echo $countyid;
                                      echo $qty;?> -->
                          <li></li>
                          
                        </ul>
                        <?php

                                               }
                                               echo "</table>";
                                          } else {
                                              echo "No Current projects";
                                          }



                                          ?> 
                    </div>
                        <div style="margin-top: 5px" class="text-container">
                            <h1>Kilifi County <span id="js-rotating">INFRASTRUCTURE, HEALTH, EDUCATION, SERVICES</span></h1>
                            <p class="p-heading p-large">County Funds Transparency and Development Checker developed in <b>2021</b> offers a platform to the common mwananchi to be a part of the county development.</p>
                             <a class="btn-solid-lg page-scroll" href="#intro" class="open-button" onclick="openForm2()">Pending Projects</a>
                             <a class="btn-solid-lg page-scroll" href="#intro" class="open-button" onclick="openForm()">Current Projects</a>
                            <div class="form-popup" id="myForm" style="margin-left: -150%;" >
                              <div class="form-container" style="width: 250%; margin-left: -150%;"  >
                                  <h2>Star Rating</h2>
                                    <div style=" " >
                                      <span class="fa fa-star checked"></span>
                                      <span class="fa fa-star checked"></span>
                                      <span class="fa fa-star checked"></span>
                                      <span class="fa fa-star"></span>
                                      <span class="fa fa-star"></span>
                                    </div>
                                     <h1 style="color:black; font-size: 16px" ><b><u>Current Projects</u></b></h1>
                                      <?php  
                                      //Include the connection file
                                      require_once 'connection.php';

                                      // $Category=$_POST['category'];

                                      $sql="SELECT * FROM developments Where category = 'active' And countyid= 2 ";
                                    $result=$mysqli->query($sql);

                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while($row = $result->fetch_assoc()) { 
                                            $description = $row["description"];
                                            $image = $row["photo"];
                                            

                                    ?>
                                
                                 <div style="background-color: #ff914d;" >
                                  <img  src="uploads/<?php echo  "$image"  ; ?>"  style="border-radius: 400px; width: 70px; min-height: 70px; margin-left:-35px">
                                    <!--  <img src="assets/images/logo.png" style="border-radius: 400px; width: 70px; min-height: 70px; margin-left:-35px"> -->
                                     <p1 style="color:black;  ">|<b> <?php echo $description?></b></p1>
                                 </div>
                                 <!--  <div style="background-color: #ff914d; margin-top:10px" >
                                     <img src="assets/images/logo.png" style="border-radius: 400px; width: 70px; min-height: 70px">
                                     <p1 style="color:black ">|<b> School in Chanagamwe</b></p1>
                                 </div>
                                 <div style="background-color: #ff914d; margin-top:10px; margin-bottom:10px" >
                                     <img src="assets/images/logo.png" style="border-radius: 400px; width: 70px; min-height: 70px">
                                     <p1 style="color:black ">|<b> Hospital in Chanagamwe</b></p1>
                                 </div> -->  

                                            <?php

                                              }
                                          } else {
                                              echo "No Pending projects";
                                          }



                                          ?> 
                                 
                                 

                                 
                                 <button type="button" class="btn cancel" onclick="closeForm()" style="margin-top: 10px;">Close</button>

                                 </div>
                                 </div>
                            
                        </div>
                        <!-- Services -->
                        <div class="form-popup" id="myForm2">
                              <div class="form-container" style="width: 250%; margin-left: -150%;" >
                                  <h2>Star Rating</h2>
                                    <div style=" " >
                                      <span class="fa fa-star checked"></span>
                                      <span class="fa fa-star checked"></span>
                                      <span class="fa fa-star checked"></span>
                                      <span class="fa fa-star"></span>
                                      <span class="fa fa-star"></span>
                                    </div>

                                 <h1 style="color:black; font-size: 16px" ><b><u>Pending Projects</u></b></h1>
                                 <?php  
                                      //Include the connection file
                                      require_once 'connection.php';

                                      // $Category=$_POST['category'];

                                    $sql="SELECT * FROM developments Where category = 'Pending' And countyid= 2";
                                    $result=$mysqli->query($sql);

                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while($row = $result->fetch_assoc()) { 
                                            $dev = $row["description"];
                                            $image = $row["photo"];
                                            

                                    ?>
                                 <div style="background-color: #ff914d; " >
                                      <img  src="uploads/<?php echo  "$"  ; ?>"  style="border-radius: 400px; width: 70px; min-height: 70px; margin-left:-35px">
                                     <p1 style="color:black;  ">|<b>  <?php echo $dev?></b></p1>
                                 </div>
                                  
                                 
                                  <?php

                                              }
                                          } else {
                                              echo "No Current projects";
                                          }



                                          ?> 
                                 
                                 <button type="button" class="btn cancel" onclick="closeForm2()" style="margin-top: 10px;">Close</button>

                                 </div>
                                 </div>
                            
                        </div>
    <div id="services" class="cards-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">                    
                    <h2>Below are the available projects<br> What do you need?</h2>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">
                    
                    <!-- Card -->
                    <div class="card">
                        <div class="card-image">
                            <img class="img-fluid" src="assets/Images/road.jpg" alt="alternative" style="height: 220px">
                        </div>
                        <div class="card-body">
                            <h3 class="card-title">Roads In Kilifi County</h3>
                            <p>Enjoy our roads here in Kilifi County! We will make our county beautiful</p>
                           
                            <p class="price">Ask Questions <span></span></p>
                        </div>
                        <div class="button-container">
                            <a class="btn-solid-reg page-scroll" href="kilifiroads.php" style="background-color: #ff914d;border: none;">DETAILS</a>
                        </div> <!-- end of button-container -->
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card">
                        <div class="card-image">
                            <img class="img-fluid" src="assets/Images/education.jpg" alt="alternative">
                        </div>
                        <div class="card-body">
                            <h3 class="card-title">Education in Kilifi County</h3>
                            <p>We are trying to make our youths better! Different education platforms her in Kilifi</p>
                            
                            <p class="price">Ask Questions <span></span></p>
                        </div>
                        <div class="button-container">
                            <a class="btn-solid-reg page-scroll" href="kilifieducation.php" style="background-color: #ff914d; border: none; ">DETAILS</a>
                        </div> <!-- end of button-container -->
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                     <div class="card" style="margin-left: -30px">
                        <div class="card-image">
                            <img class="img-fluid" src="assets/Images/road.jpg" alt="alternative" style="height: 220px">
                        </div>
                        <div class="card-body">
                            <h3 class="card-title">Health developments In Kilifi County</h3>
                            <p>Enjoy the different hospitals here in  Kilifi! We will make our county beautiful</p>
                           
                            <p class="price">Ask Questions <span></span></p>
                        </div>
                        <div class="button-container">
                            <a class="btn-solid-reg page-scroll" href="kilifihealth.php" style="background-color: #ff914d; border-color:#ff914d;border: none;">DETAILS</a>
                        </div> <!-- end of button-container -->
                    </div>
                    <!-- end of card -->
                    <div style="background-color: white;">
                    <h1 style="color: green">Feedback on  Kilifi County</h1>


                    <!-- Card -->
                    <?php 

$command = escapeshellcmd('python C:/xampp/htdocs/CFTDC/new.py');
$output = shell_exec($command);

echo $output;

?>
                    <?php 
      
    
$con = mysqli_connect("localhost","root","","cftdc");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }else{
    echo "";
  }
$sql = "SELECT comment FROM questions";
$result = $con->query($sql);

if ($result->num_rows > 0) {
  echo "<table class='table table-striped table-bordered table-hover'><tr><th >Positive</th><th style = width:2px;>polarity</th><th>Negative</th><th style = width:2px;>polarity</th></tr>";
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr><td style='border=1px solid black;Font-size=18;Font-Weight=bold;'>".$output."</td><td>".$row["comment"]."</td><td>".$row["comment"]."</td><td>".$row["comment"]."</td></tr>";
  }
  echo "</table>";
} else {
  echo "0 results";
}
$con->close();?>
                    <!-- end of card -->

                    <!-- Card -->

             </div>       

                  
      <div style="width:50%; background-color: white">  
          <p style="color: black">Insert any comment on Mombasa County</p>      
      <form id='submit' action="kilifi22.php" method ="POST">
            <!-- <form action="index.php" method ="POST"  class="php-email-form" id='submit'> -->
              
              <div class="form-group">
                <textarea class="form-control" name="comments" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validate"></div>
              </div>
              
              <div class="text-center"> <a href="#" ><button type="submit" name="submit"  class="btn " style="background-color: #f66b3e; width: 50%;">Send</button></a></div>
            </form>
          </div>

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of cards-2 -->
    <!-- end of services -->
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of header-content -->
     <!-- end of header -->
    <!-- end of header -->


    <!-- Intro -->
   

   


    
    

   </header>

    
      
    <!-- Scripts -->
    <script src="js/jquery.min.js"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="js/popper.min.js"></script> <!-- Popper tooltip library for Bootstrap -->
    <script src="js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
    <script src="js/jquery.easing.min.js"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
    <script src="js/jquery.magnific-popup.js"></script> <!-- Magnific Popup for lightboxes -->
    <script src="js/morphext.min.js"></script> <!-- Morphtext rotating text in the header -->
    <script src="js/isotope.pkgd.min.js"></script> <!-- Isotope for filter -->
    <script src="js/validator.min.js"></script> <!-- Validator.js - Bootstrap plugin that validates forms -->
    <script src="js/scripts.js"></script> <!-- Custom scripts -->
    <script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}
function openForm2() {
  document.getElementById("myForm2").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
function closeForm2() {
  document.getElementById("myForm2").style.display = "none";
}
</script>

</body>
</html>
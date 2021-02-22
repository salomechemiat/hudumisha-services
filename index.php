
<? include("countbutton.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>County Funds Transparency and Development Checker | home</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link rel="shortcut icon" type="image.PNG" href="assets/Images/logo.PNG" >
  

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Siimple - v2.2.1
  * Template URL: https://bootstrapmade.com/free-bootstrap-landing-page/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <style type="text/css">
    
table,  td {
   
    margin-left: 25%;
    margin-top: -2%;
    margin-bottom: 2%;
}
th{
 border: 1px solid ;
}

    .topnav {
  background-color:#f66b3e;
  overflow: hidden;

}

/* Style the links inside the navigation bar */
.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

/* Add an active class to highlight the current page */
.active {
  background-color: green;
  color: white;
}

/* Hide the link that should open and close the topnav on small screens */
.topnav .icon {
  display: none;
}

/* Dropdown container - needed to position the dropdown content */
.dropdown1 {
  float: left;
  overflow: hidden;
}

/* Style the dropdown button to fit inside the topnav */
.dropdown1 .dropbtn {
  font-size: 17px;
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

/* Style the dropdown content (hidden by default) */
.dropdown1-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Style the links inside the dropdown */
.dropdown1-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

/* Add a dark background on topnav links and the dropdown button on hover */
.topnav a:hover, .dropdown1:hover .dropbtn {
  background-color: green;
  color: white;
}

/* Add a grey background to dropdown links on hover */
.dropdown1-content a:hover {
  background-color: #f66b3e;
  color: white;
}

/* Show the dropdown menu when the user moves the mouse over the dropdown button */
.dropdown1:hover .dropdown1-content {
  display: block;
}

/* When the screen is less than 600 pixels wide, hide all links, except for the first one ("Home"). Show the link that contains should open and close the topnav (.icon) */
@media screen and (max-width: 600px) {
  .topnav a:not(:first-child), .dropdown1 .dropbtn {
    display: none;
  }
  .topnav a.icon {
    float: right;
    display: block;
  }
}

/* The "responsive" class is added to the topnav with JavaScript when the user clicks on the icon. This class makes the topnav look good on small screens (display the links vertically instead of horizontally) */
@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive a.icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
  .topnav.responsive .dropdown1 {float: none;}
  .topnav.responsive .dropdown1-content {position: relative;}
  .topnav.responsive .dropdown1 .dropbtn {
    display: block;
    width: 100%;
    text-align: left;
  }
}
  </style>
  <script type="text/javascript">
$(document).ready(function(){
$.get("countbutton.php",function(data){
$(".error").html(data);
});
});

</script>
 
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container-fluid">

      <div class="logo float-left" >
        <h1 class="" style="color: #f66b3e"><a href="index.html" style="hover: white;"><img src="assets/images/logo.png" alt="logo" class="logo" style="border-radius: 400px; width: 60px;min-height: 60px;padding-right: 2px"><span  style="color: black"><b>CFTDC</b></span></a> </h1>
        
        
      </div>

    <div class="main-content" style="float: right">
    <!-- Top navbar -->
    <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
      <div class="container-fluid">
        <!-- Brand -->
       
         <!-- <img src="images/logo.png" alt="logo" class="logo" style="border-radius: 400px; width: 60px;height: 60px; float: left "> -->
        <!-- Form -->
     <div class="topnav" id="myTopnav" style="" >
          <a href="index.php" class="active">Home</a>
          <a href="#about">About</a>
          <a href="#contact">Contact</a>
       <div class="dropdown1">
          <button class="dropbtn">Counties 
          <i class="fa fa-caret-down"></i>
          </button>
    <div class="dropdown1-content">
           <a href="counties.php">Mombasa</a>
           <a href="Nairobi.php">Nairobi</a>
           <a href="Kilifi.php">Kilifi</a>
    </div>
  </div> 
  <a href="main.php">Login</a>
  <a href="reg.php">Signup</a>
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>
<script type="text/javascript">
    function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
  </script>
  </header><!-- End #header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <h1 >Clarity Calms Calamity</h1>
      <h2 style="color: green">Are you tired of being in the dark? <br>Do you want clarity?Join the <b>CFTDC!</b> to not only be home, but a part of home!</h2>

      <div style="color: white;background-color: #ff914d;list-style-type: none;width:50%;margin-left: %">
                      <h2 style="color: white"><b><u>Counties Ranking</u> </b></h2>
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
                                        echo "<table><tr><th>Rank</th><th>County Name</th><th>Number Development</th></tr>";
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
    </div>
  </section><!-- #hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row">
          <div class="col-lg-6">
            
            <img src="assets/images/logo.png" alt="logo" class="img-fluid" >
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <h3 style="color: green">County Funds Trnasparecny and Development Checker.</h3>
            <p class="font-italic">
              Clarity Calms Calamity. A transparent Kenya, Open government and Clear places. 
              <b>2021<b>
            </p>
            <ul>
              <li><i class="bx bx-check-double"></i> You can easily enjoy and experience what the government is doing by seeing the new developments and the pending development.</li>
              <li><i class="bx bx-check-double"></i> You can be a part of your county development. it explains when the development will be developed and when the development should end</li>
              <li><i class="bx bx-check-double"></i> be sincere and truthful to your county, make sure you are constantly visisting the site to see which county is doing the best for their citizens.</li>
            </ul>
            <p>
              The site offers a platform that enables citizen share their grevieances and through these, the system is automatically rated through the sentimental algorithm. 
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us section-bg">
      <div class="container">

        <div class="row">
           <?php  
                                      //Include the connection file
                                      require_once 'connection.php';

                                      // $Category=$_POST['category'];

                                      $sql="SELECT * FROM county Where flag = 1";
                                    $result=$mysqli->query($sql);

                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while($row = $result->fetch_assoc()) { 
                                            $countyname = $row["countyname"];
                                            $image = $row["photo"];
                                            $description = $row["description"];
                                            

                                    ?>
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">            
            <div class="card">
            
              <img src="assets/images/kilifi.png" class="card-img-top" alt="image not found" style="height: 350px"> 
              <div class="card-icon">
                <i class="bx bx-book-reader"></i>
              </div>

              <div class="card-body">
                <h5 class="card-title"><a href="Nairobi.php" style="color: green"><?php echo $countyname?></a></h5>
                <p class="card-text"><?php echo $description?> </p>
              </div>
          </div>
            </div>
         
               <?php

                                              }
                                          } else {
                                              echo "No Current projects";
                                          }



                                          ?> 
                                           
            
          
         
        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Frequenty Asked Questions Section ======= -->
    <section class="faq">
      <div class="container">

        <div class="section-title">
          <h2 style="color: green">Frequenty Asked Questions</h2>
        </div>
        
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
  echo "<table class='table table-striped table-bordered table-hover'><tr>
  </tr>";
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>".$row["comment"]."</td></tr>";
  }
  echo "</table>";
} else {
  echo "0 results";
}
$con->close();?>

        <!-- <ul class="faq-list">

          <li>
            <a data-toggle="collapse" class="collapsed" href="#faq1"> <i class="bx bx-down-arrow-alt icon-show"></i><i class="bx bx-x icon-close"></i></a>
            <div id="faq1" class="collapse" data-parent=".faq-list">
              <p>
              
              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq2" class="collapsed"><i class="bx bx-down-arrow-alt icon-show"></i><i class="bx bx-x icon-close"></i></a>
            <div id="faq2" class="collapse" data-parent=".faq-list">
              <p>
               
              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq3" class="collapsed"> <i class="bx bx-down-arrow-alt icon-show"></i><i class="bx bx-x icon-close"></i></a>
            <div id="faq3" class="collapse" data-parent=".faq-list">
              <p>
                 
              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq4" class="collapsed"> <i class="bx bx-down-arrow-alt icon-show"></i><i class="bx bx-x icon-close"></i></a>
            <div id="faq4" class="collapse" data-parent=".faq-list">
              <p>
               
              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq5" class="collapsed">  <i class="bx bx-down-arrow-alt icon-show"></i><i class="bx bx-x icon-close"></i></a>
            <div id="faq5" class="collapse" data-parent=".faq-list">
              <p>
              
              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq6" class="collapsed">  <i class="bx bx-down-arrow-alt icon-show"></i><i class="bx bx-x icon-close"></i></a>
            <div id="faq6" class="collapse" data-parent=".faq-list">
              <p>
               
              </p>
            </div>
          </li>

        </ul> -->

      </div>
    </section><!-- End Frequenty Asked Questions Section -->

    <!-- ======= Contact Us Section ======= -->
    <section id="contact" class="contact section-bg">
      <div class="container">

        <div class="section-title">
          <h2 style="color: green">Contact Us</h2>
        </div>

        <div class="row justify-content-center">

          <div class="col-lg-3 col-md-5 mb-5 mb-md-0">
            <div class="info">
              <div class="address">
                <i class="bx bx-map"></i>
                <p>A108 Adam Street<br>New York, NY 535022</p>
              </div>

              <div class="email">
                <i class="bx bx-envelope"></i>
                <p>info@example.com</p>
              </div>

              <div class="phone">
                <i class="bx bx-phone-call"></i>
                <p>+1 5589 55488 55s</p>
              </div>
            </div>

            <div class="social-links">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>

          </div>

          <div class="col-lg-5 col-md-7">
            <?php 
      
    
$con = mysqli_connect("localhost","root","","cftdc");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }else{
    echo "";
  }
if(isset($_POST['submit'])){
          $name  = $_POST ["name"];
          $email = $_POST["email"];
          $subject = $_POST["subject"];
          $comments = $_POST["comments"];
          
         

  $sql = "INSERT INTO questions (name, email, subject, comment) VALUES ( '$name' , '$email', '$subject', '$comments' )";

  if (mysqli_query ($con, $sql)){
       echo '<script language="javascript">';
       echo 'alert("Question successfully sent successfully")';
      echo '</script>';
        
      }
      else {
        echo '<script language="javascript">';
        echo 'alert("Ooop! Something went wrong")';
        echo '</script>';;
      }


}
  
  
  
  
  
      ?>
      <form id='submit' action="index.php" method ="POST">
            <!-- <form action="index.php" method ="POST"  class="php-email-form" id='submit'> -->
              <div class="form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="comments" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validate"></div>
              </div>
              
              <div class="text-center"> <a href="#" ><button type="submit" name="submit"  class="btn " style="background-color: #f66b3e; width: 50%;">Send</button></a></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Us Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" style="background-color: #f66b3e">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>CFTDC</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/free-bootstrap-landing-page/ -->
        
      </div>
    </div>
  </footer><!-- End #footer -->

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
   <script>
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  
</body>

</html>
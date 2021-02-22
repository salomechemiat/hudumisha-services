<?php
$con = mysqli_connect("localhost","root","","Hudumisha");
$results = mysqli_query($con,"SELECT * FROM customer");
$eresults = mysqli_query($con,"SELECT * FROM employee");
$Cresults = mysqli_query($con,"SELECT * FROM booking");
// $num_rows = mysql_num_rows($results);
// $query ="SELECT User_gender, count(*) as number FROM register GROUP BY User_gender";
// $result = mysqli_query($con, $query);

// Check connection
// if (mysqli_connect_errno())
//   {
//   echo "Failed to connect to MySQL: " . mysqli_connect_error();
//   }else{
//     echo "this is it";
//   }
  
?>
<?php
session_start();

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Hudumisha Services | Admin</title>
  <link rel="shortcut icon" type="image.PNG" href="logo3.PNG" >
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="shortcut icon" type="image.PNG" href="logo3.PNG" >


<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
body {margin:0;}
img, .single .post-content img a {
    margin: 10px auto 0;
   
}
*{
  box-sizing: border-box;
}
.background
{
  background-color: grey;
  /*position: fixed;x*/
}

.top {
  overflow: hidden;
  background-color: #111;
  position: fixed;
  top: 0;
  width: 200%;

  z-index: 1;

}




.top h1 {
  float: left;
  display: block;
  color: #818181;
  margin-left: 20px;
  /*padding: 5px;*/
  padding-right: 900px;
  z-index: 4px;
}
.top a
{
  margin-top: 20px; 
 float:left;
 margin-left: -100px;
}

.top a:hover {
  background: #ddd;
  color: black;

}

.main {
  padding: 16px;
  margin-top: 15px;
  height: 1500px; /* Used in this example to enable scrolling */
}
.sidebar {
  height: 100%;
  width: 160px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  padding-top: 40px;
  margin-top: 69px;
  z-index:3px;

}

.sidebar a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 20px;
  color: #818181;
  display: block;
  margin-top: 20px;
}

.sidebar a:hover {
  color: #f1f1f1;
}
.sidenav a, .dropdown-btn {
    padding: 6px 8px 6px 16px;
    text-decoration: none;
    font-size: 20px;
    color: #818181;
    display: block;
    border: none;
    background: none;
    width: 100%;
    text-align: left;
    cursor: pointer;
    outline: none;
}
.dropdown-container {
    display: none;
    background-color: #262626;
    padding-left: 8px;
}
.container
{
  margin-top: 50px;
  margin-left: 300px;
  padding:20px;
}




.main1 {

 /* display: flex;
  flex-direction: row;*/
  /*flex-flow: row wrap;*/
}
.widget {
  flex-basis: 300px;
  flex-grow: 10;
  height: 300px;
  width: 300px;
  margin: 15px;
  border-radius: 6px;
  background-color: #ffffff;
  /*position: relative;*/
}
.widget .title {
  background-color: #eef1f7;
  border-bottom: 1px solid #dfe4ec;
  padding: 10px;
  border-top-left-radius: 6px;
  border-top-right-radius: 6px;
  color: #617085;
  font-weight: 600;
}
.container1
{
  /*width:100px;*/
  float:right;
}
.main1 {

  display: flex;
  flex-direction: row;
  margin-left: 20px;
  /*flex-flow: row wrap;*/
}
.main2
{
   /*display: flex;
  flex-direction: row;*/
  margin-left: 10px;
}
.dashboard
{
 /* display: flex;
  flex-direction: row;*/
  margin-left: 100px;

}

.main {

  padding: 16px;
 /* margin-top: 100px;*/
  height: 1500px;
  margin-left: 90px; /* Same as the width of the sidenav */
  /*padding: 0px 10px;*/
  /*margin-top: 100px;*/
}
.main3
{
  margin-right: 50px;
}
.card
{
  flex-basis: 300px;
  flex-grow: 10;
  height: 1000px;
  width: 1200px;
  margin: 15px;
  border-radius: 6px;
  background-color: #ffffff;
  margin-left: 100px;
}
.table
{
  width: 600px;

}
#table
{
  width: 600px;
}
#table1
{
  width: 400px;
}
*{
  box-sizing: border-box;
}
@media screen and (max-height: 450px) {
  .sidebar {padding-top: 15px;}
  .sidebar a {font-size: 18px;}
}
.pt-3-half {
padding-top: 1.4rem;
}


</style>

<!-- <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script> -->
<!-- <script type="text/javascript">
  google.charts.load('current', {'packages':['corechart']});//load the google api
  google.charts.setOnLoadCallback(drawChart);
  function drawChart()
  {
    var data= google.visualization.arrayToDataTable([['Gender','Number'],
    <?php
    // while($row= $result->fetch_assoc())
  //   {
    //  echo " ['".$row["User_gender"]."',".$row["number"]."],";
  //   }
    
    ?>
  ]);
  var Options ={
  title: 'Percentage of Male and Female Registered Employees',
  is3D:true;
  };
   var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, Options);
}

</script> -->

</head>
<body>
<section>
<div class="top">
   <h1 class="hero-text">Hudumisha Services| Admin</h1>
  <a href="logout.php" class="btn btn-danger square-btn-adjust"><span class="glyphicon glyphicon-log-out"></span> Log out
        
        </a>
</div>
</section>

<div class="main2">
  <section>
  <div class="sidebar">
  <a href="admin.php"><i class="fa fa-fw fa-home"></i> Dashboard</a>
  <a href="#services"><i class="fa fa-fw fa-wrench"></i> Suppliers</a>
  <!-- <a href="#clients"><i class="fa fa-fw fa-user"></i> Clients</a> -->

  <a href="tables.php"><i class="fa fa-fw fa-bars"></i> Tables</a>
   <button class="dropdown-btn">more 
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="index.php">Home</a>
    <a href="#">Log In</a>
    <a href="#">Sign Up</a>
  </div>
  <a href="#contact"><i class="fa fa-fw fa-envelope"></i> Contact</a>
</div>
</section>
<section class="background">
<div class = container>
<div class="row">
      <div class="main1">
        <div class="widget">
          <div class="title">Number of Registered Employees</div>
          <div class="chart">
            <img style="width: 100px; height: 100px;" src="talk.png" alt="img not found">
            <div style="font-size: 30px; font-weight: 10px; margin-top: 10px; color:black;"> 
            <?php

            $numb=mysqli_num_rows($results);
            
            echo "$numb Customers \n" ;
            ?>
          </div>
             <style type='text/css'>
              .edit{ color:magenta; font-size:16px; /*and whatever you 
              want*/
               </style>
            <div id="piechart" style="width: 900px; height: 500px;"></div>
          </div>
        </div>
        <div class="widget">
          <div class="title">Number of registered Customers</div>
          <div class="chart"></div>
          <img style="height: 100px; height: 100px;" src="employees.png" alt="img not found">
         <div style="font-size: 30px; font-weight: 10px; margin-top: 10px; color:black;"> 
          <?php

            $numb=mysqli_num_rows($eresults);
            // echo "**<font size='16px' color='magenta' family='monospace'>**";
            
            echo "$numb Employees \n" ;
            ?></div>
        </div>
        <div class="widget">
          <div class="title">Number of Bookings</div>
          <div class="chart"></div>
          <img style="height: 100px; height: 100px;" src="snapchat.png" alt="img not found">
           <div style="font-size: 30px; font-weight: 10px; margin-top: 10px; color:black;"> 
          <?php

            $numb=mysqli_num_rows($Cresults);
            // echo "**<font size='16px' color='magenta' family='monospace'>**";
            
            echo "$numb Bookings \n" ;
            ?></div>
        </div>
      </div>
    </div>
  </div>
        </section>

          <?php
$con = mysqli_connect("localhost","root","","Hudumisha"); 
// Check connection 
if (mysqli_connect_errno()) 
{ 
echo "Failed to connect to MySQL: " . mysqli_connect_error(); 
}
$results = mysqli_query($con,"SELECT * FROM employee");
$records = mysqli_query($con,"SELECT * FROM customer");
$complaints = mysqli_query($con,"SELECT * FROM complaints");
?>


<section class="dashboard">
  <div class=main2>
 <div class="card">
  <h3 class="card-header text-center font-weight-bold text-uppercase py-4">Customers' table</h3>
  <div class="card-body">
    <div class="table-editable">
      
      <table id="table1" class="table table-bordered table-responsive-md table-striped text-center" style="width:900px; margin-left: 100px;">
        <tr>
          <th class="text-center">User Name</th>
          <th class="text-center">Type</th>
          <th class="text-center">User Id</th>
          <th class="text-center">Phone Number</th>
          <th class="text-center">User Email</th>
          <th class="text-center">User description</th>
          <th class="text-center">User location</th>
         <!--  <th class="text-center">Remove</th> -->
        </tr>
        <?php
        
        // include_once('connection.php');
        // $ord=$_GET ['id'];
        // $sql="DELETE FROM 'register' WHERE 'register'.'User_Id'=$ord";
        // $success=mysqli_query($con,$sql);
        while($employee= $results->fetch_assoc()){
          echo "<tr>";

          echo "<td>" . $employee['firstname'] . "</td>"; 
          
          echo "<td>" . $employee['type'] . "</td>"; 
          echo "<td>" . $employee['idno'] . "</td>"; 
          echo "<td>" . $employee['phone'] . "</td>";
          echo "<td>" . $employee['email'] . "</td>"; 
           echo "<td>" . $employee['description'] . "</td>"; 
          echo "<td>" . $employee['constituency'] . "</td>"; 
          $employee=$employee['idno'] ; 
          // echo "</tr>";
          // echo "<td><span class="table-remove"><button type="button" class="btn btn-danger btn-rounded btn-sm my-0">Remove</button></span></td>";
          // echo '<td> <a href="deleteuser.php?id=$employee"><input style="background-color:blue" type="button" name="delete" value="view"></a></td>' ;

        echo "</tr>"; 
        }

        
        mysqli_close($con);
        ?>
        
      </table>

    </div>
  </div>
</div>
<!-- Editable table -->
</div>

<hr class="hr">
<!-- <section class="dashboard">
 -->  <!-- <div class=main3> -->
<!-- <div class="main"> -->
 <div class="card">
  <h3 class="card-header text-center font-weight-bold text-uppercase py-4">Customers' Registered</h3>
  <div class="card-body">
    <div id="table" class="table-editable">
      
      <table id="table" class="table table-bordered table-responsive-md table-striped text-center" style="width:900px; margin-left: 100px;">
       <tr>
          <th class="text-center">User Name</th>
          <th class="text-center">Last Name</th>
          <th class="text-center">User Id</th>
          <th class="text-center">Phone Number</th>
          <th class="text-center">User Email</th>
          
         <!--  <th class="text-center">Remove</th> -->
        </tr>
        <?php
        
        while($employee= $records->fetch_assoc()){
          echo "<tr>";

          echo "<td>" . $customer['User Name'] . "</td>"; 
          echo "<td>" . $customer['Last Name'] . "</td>"; 
          echo "<td>" . $customer['Id Number'] . "</td>"; 
          echo "<td>" . $customer['Phone Number'] . "</td>"; 
          
          echo "<td>" . $customer['User Email'] . "</td>"; 
          
         
          // echo "</tr>";
          // echo "<td><span class="table-remove"><button type="button" class="btn btn-danger btn-rounded btn-sm my-0">Remove</button></span></td>";
          

        echo "</tr>"; 
        }
        
        // echo "</table>";
        // mysqli_close($con);
        ?>
        
        
      </table>

    </div>
  </div>
</div>
</section>
</section>
</section>
<hr class="hr">


<!-- <div class="main">
 -->
 <section class=dashboard>
  <div class= main2>
<div class="card">
  <h3 class="card-header text-center font-weight-bold text-uppercase py-4">Complaints</h3>
  <div class="card-body">
    <div id="table" class="table-editable">
      
      <table id="table" class="table table-bordered table-responsive-md table-striped text-center">
        <tr>
          <th class="text-center">Employees' Name</th>
          <th class="text-center">Complaints</th>
          <th class="text-center">Customer' Name</th>
          <th class="text-center">Customer' phone</th>
          
        </tr>
       <!--  <?php
        
        while($employee= $records2->fetch_assoc()){
          echo "<tr>";

         echo "<td>" . $employee['Employeename'] . "</td>"; 
          
         echo "<td>" . $employee['complaints'] . "</td>"; 

         echo "<td>" . $employee['customername'] . "</td>";
         echo "<td>" . $employee['customerphone'] . "</td>"; 
         
         
        
          

        echo "</tr>"; 
        }
        
        echo "</table>";
        mysqli_close($con);
      ?>
        
        
      </table>

    </div>
  </div>
</div>
</section>
</section>

       <section class="adduser">
          <?php
  if(isset($_POST['submit'])){
  
  $name  = $_POST ["user_firstname"];
  $sname = $_POST["user_secondname"];
  $email = $_POST["user_email"];
  // $idnum = $_POST ["user_id"];
  $pass  = md5($_POST["user_password"]);

  $sql = "INSERT INTO user (user_firstname, user_secondname ,user_email, user_password) VALUES ( '$name' , '$sname', '$email' , '$pass')";

  if (mysqli_query ($con, $sql)){
        echo "Data added successfully";
      }
      else {
        echo "something went worng";
      }

}
  
  

  
  ?>


          <div class="container1">
            // <form id='submit' action="<?php  ?>" method ="POST">
              <h2 class="hero-text">Add an admin</h2>
  <div class="form-row">
    <div class="form-group col-md-6">

      <label for="inputEmail4">First Name</label>
      <input type="name" class="form-control" name="user_firstname" placeholder="Enter First Name">
    </div>

     <div class="form-group col-md-6">

      <label for="inputEmail4">Second Name</label>
      <input type="name" class="form-control" name="user_secondname" placeholder="Enter Second Name">
    </div>
    <div class="form-group col-md-6">

      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" name="user_email" placeholder="Enter Email">
    </div>
    <!- <div class="form-group col-md-6">
      <label for="inputPassword4">ID_Number</label>
      <input type="text" class="form-control" name="user_id" placeholder="Enter ID Number">
    </div> -->
  <!-- </div> -->
  <!-- <div class="form-group">
    <label for="inputAddress">Password</label>
    <input type="password" class="form-control" name="user_password" placeholder="Enter Password">
  </div>
  

  <button type="submit" id="submit" name="submit" class="btn btn-primary">Add Admin</button>
</form> --> 
          </div>
          
        </section>
        <script>

/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */

var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "block") {
      dropdownContent.style.display = "none";
    } else {
      dropdownContent.style.display = "block";
    }
  });
}
</script>

</body>
</html>

  
</body>
</html>
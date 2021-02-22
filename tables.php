<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Hudumisha Services| Admin</title>
   <link rel="shortcut icon" type="image.PNG" href="logo3.PNG" >
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


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
  margin-left: 30px;

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
<?php
$con = mysqli_connect("localhost","root","","Hudumisha"); 
// Check connection 
if (mysqli_connect_errno()) 
{ 
echo "Failed to connect to MySQL: " . mysqli_connect_error(); 
}
$results = mysqli_query($con,"SELECT * FROM employee");
$records = mysqli_query($con,"SELECT * FROM customer");
?>
</head>
<body>
<section>
<div class="top">
   <h1 class="hero-text">Hudumisha Services| Admin</h1>
  <a href="logout.php"" class="btn btn-danger square-btn-adjust"><span class="glyphicon glyphicon-log-out"></span> Log out
        </a>
</div>
</section>

<div class="main">
  <section>
  <div class="sidebar">
  <a href="admin2.php"><i class="fa fa-fw fa-home"></i> Dashboard</a>
  <a href="home.php"><i class="fa fa-fw fa-home"></i> Home</a>
  <!-- <a href="#clients"><i class="fa fa-fw fa-user"></i> Clients</a> -->
  <a href="tables1.php"><i class="fa fa-fw fa-bars"></i> Tables</a>
   <button class="dropdown-btn">more 
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
   <!--  <a href="index.php">ispay</a> -->
    <a href="#">Customers</a>
    <!-- <a href="#">employees</a> -->
  </div>
  <a href="#contact"><i class="fa fa-fw fa-envelope"></i> Contact</a>
</div>
</section>
<section class="dashboard">
  <div class=main2>
 <div class="card">
  <h3 class="card-header text-center font-weight-bold text-uppercase py-4">Employees' table</h3>
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
          <th class="text-center">Remove</th>
          <th class="text-center">Activate</th>
          <th class="text-center">Deactivate</th>
         <!--  <th class="text-center">Remove</th> -->
        </tr>
         <?php

$con = mysqli_connect("localhost","root","","Hudumisha");

          
        
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
          // $button=$employee['user_id'] ; 
          // echo "</tr>";
          // echo "<td><span class="table-remove"><button type="button" class="btn btn-danger btn-rounded btn-sm my-0">Remove</button></span></td>";
          // 
          echo "<td ><a  href='?id=" . $employee['empid'] . "' >Delete</a></td>";
          echo "<td ><a  href='?id1=" . $employee['empid'] . "' >Activate</a></td>";
          echo "<td ><a  href='?id2=" . $employee['empid'] . "' >Deactivate</a></td>";
echo "</tr>";
        
        }
        if(isset($_GET['id'])){
          $id = $_GET['id'];
          $result2 =$con->query("delete from employee where empid ='$id'");

        }
        if(isset($_GET['id1'])){
          $id = $_GET['id1'];
          $result2 =$con->query("update employee set status=1 where empid = '$id'");

        }
        if(isset($_GET['id2'])){
          $id = $_GET['id2'];
          $result2 =$con->query("update employee set status=0 where empid = '$id'");

        }
//         if($_REQUEST['select'] == "id2")
//       {
//       mysql_query("update employee set status=1 where empid = '$id'");
// }

        
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
          <th class="text-center">First Name</th>
          <th class="text-center">Last Name</th>
          <th class="text-center">User Id</th>
          <th class="text-center">Date of Birth</th>
          <th class="text-center">Phone Number</th>
          <th class="text-center">User Email</th>
          <th class="text-center">Remove</th>
         <!--  <th class="text-center">Activate</th>
          <th class="text-center">Deactivate</th> -->
          
         <!--  <th class="text-center">Remove</th> -->
        </tr>
        <?php
        
        while($customer= $records->fetch_assoc()){
          echo "<tr>";

          echo "<td>" . $customer['Firstname'] . "</td>"; 
          echo "<td>" . $customer['Lastname'] . "</td>"; 
          echo "<td>" . $customer['idno'] . "</td>"; 
          echo "<td>" . $customer['DOB'] . "</td>";
          echo "<td>" . $customer['phone'] . "</td>";  
          echo "<td>" . $customer['email'] . "</td>"; 
          


          echo "<td ><a  href='?iddel=" .  $customer['custid'] . "' >Delete</a></td>";
          // echo "<td ><a  href='?id1=" . $customer['custid'] . "' >Activate</a></td>";
          // echo "<td ><a  href='?id2=" . $customer['custid'] . "' >Deactivate</a></td>";
          
         
          // echo "</tr>";
          // echo "<td><span class="table-remove"><button type="button" class="btn btn-danger btn-rounded btn-sm my-0">Remove</button></span></td>";
          

        echo "</tr>"; 
        }
        
         if(isset($_GET['iddel'])){
          $id = $_GET['iddel'];
          $result3 =$con->query("delete from customer where custid ='$id'");

        }
        //  if(isset($_GET['id1'])){
        //   $id = $_GET['id1'];
        //   $res =$con->query("update customer set status=1 where custid = '$id'");

        // }
        // if(isset($_GET['id2'])){
        //   $id = $_GET['id2'];
        //   $res =$con->query("update customer set status=0 where custid = '$id'");

        // }
        // // echo "</table>";
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

      <table id="table" class="table table-bordered table-responsive-md table-striped text-center" style="width:900px; margin-left: 100px;">
        <tr>
          <th class="text-center">Employees' Name</th>
          <th class="text-center">Complaints</th>
          <th class="text-center">Customer' Name</th>
          <th class="text-center">Customer' phone</th>
          
        </tr>
       <!--  <?php
        
        //while($employee= $records2->fetch_assoc()){
          //echo "<tr>";

          //echo "<td>" . $employee['name'] . "</td>"; 
          
         // echo "<td>" . $employee['email'] . "</td>"; 
         // echo "<td>" . $employee['comment'] . "</td>"; 
         
          // echo "</tr>";
          // echo "<td><span class="table-remove"><button type="button" class="btn btn-danger btn-rounded btn-sm my-0">Remove</button></span></td>";
          

       // echo "</tr>"; 
        //}
        
        // echo "</table>";
        // mysqli_close($con);
        //?>
        
         -->
      </table>

    </div>
  </div>
</div>
</section>
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
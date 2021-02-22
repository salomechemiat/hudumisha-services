<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Hudumisha | Admin</title>
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
	margin-left: 200px;
}




.main1 {

	display: flex;
	flex-direction: row;
	/*flex-flow: row wrap;*/
}
.dashboard
{
  display: flex;
  flex-direction: row;

}

.main {
  padding: 16px;
  margin-top: 100px;
  height: 1500px;
  margin-left: 160px; /* Same as the width of the sidenav */
  /*padding: 0px 10px;*/
  /*margin-top: 100px;*/
}
.card
{
  flex-basis: 300px;
  flex-grow: 10;
  height: 300px;
  width: 570px;
  margin: 15px;
  border-radius: 6px;
  background-color: #ffffff;
}
.table
{
  width: 500px;

}
#table
{
  width: 400px;
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
$con = mysqli_connect("localhost","root","","hudumisha_services"); 
// Check connection 
if (mysqli_connect_errno()) 
{ 
echo "Failed to connect to MySQL: " . mysqli_connect_error(); 
}
$results = mysqli_query($con,"SELECT * FROM register");
$records = mysqli_query($con,"SELECT * FROM home");
?>
</head>
<body>
<section>
<div class="top">
   <h1 class="hero-text">Hudumisha| Admin</h1>
  <a href="#" class="btn btn-danger square-btn-adjust"><span class="glyphicon glyphicon-log-out"></span> Log out
        </a>
</div>
</section>

<div class="main">
	<section>
  <div class="sidebar">
  <a href="admin2.php"><i class="fa fa-fw fa-home"></i> Dashboard</a>
  <a href="#services"><i class="fa fa-fw fa-wrench"></i> Services</a>
  <a href="#clients"><i class="fa fa-fw fa-user"></i> Clients</a>
  <a href="tables.php"><i class="fa fa-fw fa-bars"></i> Tables</a>
   <button class="dropdown-btn">more 
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="index.php">Home</a>
    <a href="#">Services</a>
    <a href="#">employees</a>
  </div>
  <a href="#contact"><i class="fa fa-fw fa-envelope"></i> Contact</a>
</div>
</section>
<section class="dashboard">
  <div class=main1>
 <div class="card">
  <h3 class="card-header text-center font-weight-bold text-uppercase py-4">Service provider table</h3>
  <div class="card-body">
    <div class="table-editable">
      
      <table id="table1" class="table table-bordered table-responsive-md table-striped text-center">
        <tr>
          <th class="text-center">User Name</th>
          <th class="text-center">Age</th>
          <th class="text-center">User Id</th>
          <th class="text-center">Phone Number</th>
          <th class="text-center">Email</th>
          <th class="text-center">User location</th>
          <th class="text-center">Remove</th>
        </tr>
        <?php
        
        while($employee= $results->fetch_assoc()){
          echo "<tr>";

          echo "<td>" . $employee['User_Name'] . "</td>"; 
          
          echo "<td>" . $employee['Age'] . "</td>"; 
          echo "<td>" . $employee['User_Id'] . "</td>"; 
          echo "<td>" . $employee['Phone_number'] . "</td>";
          echo "<td>" . $employee['email'] . "</td>"; 
          echo "<td>" . $employee['User_location'] . "</td>";  
          // echo "</tr>";
          // echo "<td><span class="table-remove"><button type="button" class="btn btn-danger btn-rounded btn-sm my-0">Remove</button></span></td>";
          echo '<td><input type="button" name="delete" value="delete"></td>'; 

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
<section class="dashboard">
<!-- <div class="main"> -->
 <div class="card">
  <h3 class="card-header text-center font-weight-bold text-uppercase py-4">Questions</h3>
  <div class="card-body">
    <div id="table" class="table-editable">
      
      <table id="table" class="table table-bordered table-responsive-md table-striped text-center">
        <tr>
          <th class="text-center">Person Name</th>
          <th class="text-center">Email</th>
          <th class="text-center">Comments</th>
          
        </tr>
        <?php
        
        while($employee= $records->fetch_assoc()){
          echo "<tr>";

          echo "<td>" . $employee['name'] . "</td>"; 
          
          echo "<td>" . $employee['email'] . "</td>"; 
          echo "<td>" . $employee['comment'] . "</td>"; 
         
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
 <section class=dashboard1>
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
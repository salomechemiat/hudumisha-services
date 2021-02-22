
<?php

$con = mysqli_connect("localhost","root","","Hudumisha"); 

if (mysqli_connect_errno()) 
{ 
echo "Failed to connect to MySQL: " . mysqli_connect_error(); 
}
$results = mysqli_query($con,"SELECT * FROM customer");

?>
<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Hudumisha Services| customerprofile</title>
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
.navbar
{
	
	width:100%;
}

.header
{
	float:left;
	margin-top: 20px;
	margin-left: 50px;


}
.details
{
	float:left;
	margin-top: 200px;
	margin-left: 50px;

}
.about
{
	/*float:;*/
	margin-top: 20px;
	margin-right: 300px;
	margin-left: 400px;
}
.background
{
  /*background-image: linear-gradient(to bottom right, grey, white);
  background-repeat: no-repeat;
  background-position: right top;
  background-attachment: fixed;
  background-size: cover;
  /*height: 75vh;*/
  /*opacity: 0.9;*/
 /* align-items: center;*/
}
</style>
</head>
<body>
  
  	 
 <?php  
  //Include the connection file
  $con = mysqli_connect("localhost","root","","Hudumisha");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }else{
  	echo "";
  }
session_start();
  // $Category=$_POST['category'];

$user=$_SESSION['uid'];
$sql="SELECT * FROM customer WHERE custid='$user'";
$result = mysqli_query($con,$sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) { 
        $firstname = $row["Firstname"];
        $lastname = $row["Lastname"];
        $email = $row["email"];
        $phone = $row["phone"];
        $image = $row["image"];
        $constituency = $row["constituency"];
        $ward = $row["ward"]; 
        $description = $row["description"];
        $id = $row["idno"];
        $date =$row["DOB"];
?>

   
    <section class="nav">
	 <nav class="navbar navbar-inverse">
        <div class="container-fluid">
        <div class="navbar-header">

              <a class="navbar-brand" href="home.php" style="margin-left: -200px;">Hudumisha services</a>
        </div>
    <ul class="nav navbar-nav" style="display:flex; flex-direction: row;">
      <li ><a href="index.php">Home</a></li>
       <li><a href="dashboard.php">Dashboard</a></li>
       <li><a href="#">Profile</a></li>
      <!--  <li><a href="#">Employees</a></li>
      <li><a href="#">About us</a></li> -->
   </ul>
    
    <!-- <ul class="nav navbar-nav navbar-right" style="display:flex; flex-direction: row;margin-right: -10px;">
      <li><a href="Signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul> -->

     <ul class="nav navbar-nav navbar-right" style="display:flex; flex-direction: row;margin-right: -10px;">
      <li><a href="Signup.php"><span class="glyphicon glyphicon-user"></span><?php echo $_SESSION["email"];?></a></li>
    </ul> 
 
     <a href="logout.php" class="btn btn-danger square-btn-adjust"><span class="glyphicon glyphicon-log-out"></span> Log out
        </a>
       </div>
    </nav>
</section>
    <section>
    	<h1 style="margin-left: 40px; color:grey;">Hudumisha Services</h1>
	</section>
	<hr>
    <section class="background" >
  <section class="header">
  	<div class="card " style="width: 300px; height: 100px; margin-top: -15px; style="margin-top:300px;" ">
            <img class="card-img-top img" src="uploads/<?php echo  "$image"  ; ?>" width="200" height="200" style="margin-bottom: -180px;" alt="Card image cap">
            
 <!--  </section>
  <section class="details"> -->
  	<div style="margin-top:200px;"  class="details" >
  		<hr>
  	<h1><?php echo $firstname; ?></h1>
  	<hr>
  	<h2><?php echo $constituency; ?></h2>
  	<h2><?php echo $ward; ?></h2>
  	<hr>
  	 <a style="margin-bottom: 20px; width: 200px;" href="custedit.php" class="btn btn-primary">Edit profile</a>
  	 <hr>
  	<!--  <h2><span class="glyphicon glyphicon-thumbs-up"></span>likes: </h2>
  	 <h2><span class="glyphicon glyphicon-thumbs-down"></span>Dislikes:</h2> -->

  </section>

  <!-- <section class="about" >
  <div class="card" style="width: 900px; height: 200px;" >
  <div class="card-header">
    <h2 style="margin-left:20px;">About</h2>
  </div>
  <div class="card-body">
    <h5 class="card-title">You can input what you charge per hour during editing of profile</h5>
    <p class="card-text"></p>
   
  </div>
</div>
            
  </section> -->

 <section class="about" ;">
  <div class="card" style="width: 900px; height: 300px;" >
  <div class="card-header">
    <h2 style="margin-left:20px;">Contact</h2>
  </div>
  <div class="card-body">
    <h3 class="card-title">Phone number: <?php echo $phone; ?></h3>
    <h3 class="card-title">Email: <?php echo $email; ?></h3>
    <h3 class="card-title">Id Number:<?php echo $id; ?></h3>
    <h3 class="card-title">Date of Birth:<?php echo $date; ?></h3>
   
  </div>
</div>
            
  </section>
  <section class="about" ;">
  <div class="card" style="width: 900px; height: 200px;" >
  <div class="card-header">
    <h2 style="margin-left:20px;">Web</h2>
  </div>
  <div class="card-body">
    <i class="fa fa-instagram" style="font-size:24px"></i>
    <i class="fa fa-facebook" style="font-size:24px"></i>
    <i class="fa fa-twitter" style="font-size:24px"></i>

   
  </div>
</div>
       </div>     
  
</section>

  <?php

    }
} else {
    echo "0 results";
}



?>
</body>
</html>
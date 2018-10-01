<?php
//Include the connection file
  require_once 'connection.php';

  //Define variables and initialize them with empty variables
  $firstname = $lastname = $idno = $phone = $address = $date = "";
  $firstname_err = $lastname_err = $idno_err = $phone_err = $address_err = $date_err = "";
   // $userType="Customer";
  //Process form data when the form is submitted

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //Validate firstname
    if (empty(trim($_POST["firstname"]))) {
      $firstname_err = "Please enter firstname";
    }else{
      $firstname = trim($_POST["firstname"]);
    }

    //Validate lastname
    if (empty(trim($_POST["lastname"]))) {
      $lastname_err = "Please enter lastname";
    }else{
      $lastname = trim($_POST["lastname"]);
    }
    //Validate idno
    if (empty(trim($_POST["idno"]))) {
      $idno_err = "Please enter ID Number";
    }else{
      $idno = trim($_POST["idno"]);
    }
   
    //Validate phone number
    if (empty(trim($_POST["phone"]))) {
      $phone_err = "Please enter your phone number";
    }else{
      //Prepare a select statement
      $sql = "SELECT userid FROM customer WHERE phone=?";
      if ($stmt = $mysqli->prepare($sql)) {
        # Bind variables to the prepared statement as parameters
        $stmt->bind_param("s",$param_phone);

        #Set parameters
        $param_phone = trim($_POST["phone"]);

        #Attempt to excecute the prepared statement
        if ($stmt->execute()) {
          # Store result
          $stmt ->store_result();

          if ($stmt->num_rows==1) {
            $phone_err = "This phone number has already been taken";
          }else{
            $phone = trim($_POST["phone"]);
          }
        }else{
          echo "Ooops:( Something went wrong";
        }
      }
      #Close statement
      $stmt->close();
    }
    //Validate email
    if (empty(trim($_POST["address"]))) {
      $address_err = "Please enter your address";
    }else{
      $address = trim($_POST["address"]);
    }
    //Validate category
    if (empty(trim($_POST["date"]))) {
      $date_err = "Please select a date";
    }else{
      $date = trim($_POST["date"]);
    }

    // #Validate house number
    // if (empty(trim($_POST["username"]))) {
    //   $housenumber_err = "Please enter your house number";
    // }else{
    //   //Prepare a select statement
    //   $sql = "SELECT user_id FROM users WHERE username=?";
    //   if ($stmt = $mysqli->prepare($sql)) {
    //     # Bind variables to the prepared statement as parameters
    //     $stmt->bind_param("s",$param_housenumber);

    //     #Set parameters
    //     $param_housenumber = trim($_POST["username"]);

    //     #Attempt to excecute the prepared statement
    //     if ($stmt->execute()) {
    //       # Store result
    //       $stmt ->store_result();

    //       if ($stmt->num_rows==1) {
    //         $username_err = "This username has already been taken";
    //       }else{
    //         $username = trim($_POST["username"]);
    //       }
    //     }else{
    //       echo "Ooops:( Something went wrong";
    //     }
    //   }
    //   #Close statement
    //   $stmt->close();
    // }
    // #Validate password
    // if (empty(trim($_POST["password"]))) {
    //   $password_err = "Please enter your password";
    // }else{
    //   $password = trim($_POST["password"]);
    // }

    #Check for input errors before entering in the database
    if (empty($firstname_err) && empty($lastname_err) && empty($idno_err) && empty($phone_err) && empty($address_err) && empty($date_err)) {
      //Prepare an insert statement
      $sql = "INSERT into booking(firstname,lastname,idno,phone,address,date) VALUES(?, ?, ?, ?, ?, ?)";

      if ($stmt = $mysqli->prepare($sql)) {
        # Bind variables to the prepared statement as parameters
        $stmt->bind_param("ssssss",$param_firstname,$param_lastname,$param_idno,$param_phone,$param_address,$param_date);
        #Set the parameters
        $param_firstname = $firstname;
        $param_lastname = $lastname;
        $param_idno = $idno;
        $param_phone = $phone;
        $param_address = $address;
        $param_date = $date;
        
        #Attempt to execute the prepared statement
        if ($stmt->execute()){
          #Redirect to login page
          header("location: login.php");
        }else{
          echo "Something went wrong:( Please try again later";
        }
        #Close statement
      $stmt->close();
      }
      
    }
    #Close connection
    $mysqli->close();
  }
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Hudumisha| Booking</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="style.css">
		<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
		<!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">

  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
          

    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
    <style>
body {
  font-family: Arial;
  font-size: 17px;
  padding: 8px;
}

* {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}
input[type=password] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #926230;
 align-content: center;
}

.btn:hover {
  background-color: #45a049;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}
#content{
  margin-top: 100px;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  } 
  .col-25 {
    margin-bottom: 20px;
  }
}
</style>
	</head>
<body cz-shortcut-listen="true">
	
          	

<header>
  <div>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a href="#" class="previous round">&#8249;</a>
        <a class="navbar-brand" href="#">Hudumisha</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Booking <span class="sr-only">(current)</span></a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
    </header>
    <div id="content">

     <div class="row">
  <div class="col-75">
    <div class="container">
      <form action="" method="post" accept-charset="utf-8" id="cust">
      
        <div class="row">
          <div class="col-50">
           <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputName4">Firstname</label>
      <input type="text" class="form-control" id="Firstname" name = "firstname" placeholder="John">
    </div>
    <div class="form-group col-md-6">
      <label for="inputName4">Lastname</label>
      <input type="text" class="form-control" id="Lastname" name="lastname" placeholder="Doe">
    </div>
  </div>
  <div class="form-row">
  <div class="form-group col-md-6">
    <label for="inputID">ID Number</label>
    <input type="text" class="form-control" id="ID" name = "idno" placeholder="34458763">
  </div>
   <div class="form-group col-md-6">
    <label for="inputPhone">Phone</label>
    <input type="text" class="form-control" id="Phone" name ="phone" placeholder="0712345678">
  </div>
</div>
<div class="form-row">
  <div class="form-group col-md-6">
    <label for="inputDate">Date</label>
    <input type="date" class="form-control" id="Date" name = "date" placeholder="2018/09/28">
  </div>
  <div class="form-group col-md-4">
      <label for="inputState">County</label>
      <select id="County" name ="county" class="form-control">
        <option selected name ="county">Nairobi</option>
        <!-- <option>...</option> -->
      </select>
    </div>
</div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputConstituency">Address</label>
      <input type="text" class="form-control" id="address" name ="address" placeholder=" Oyster A8 Donholm Road, Embakasi East">
    </div>
</div>
    <!-- 
    <div class="form-group col-md-2">
      <label for="inputWard">Ward</label>
      <input type="text" class="form-control" id="Ward" name ="ward" placeholder="Savannah">
    </div>
  </div> -->
  <!-- <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div> -->
   <div class="form-row">
    <div class="form-group col-md-6">
  <button type="submit" class="btn btn-primary">Book</button>
</div>
</div>
        
      </form>

</div>
</div>
</div>

           <!--  <li class="nav-item">
              <a class="nav-link" href="#">Profile</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="#">Payment</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="#">Logout</a>
            </li>
          </ul> -->
         
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
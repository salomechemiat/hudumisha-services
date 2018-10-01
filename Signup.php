<?php  
  //Include the connection file
  require_once 'connection.php';

  //Define variables and initialize them with empty variables
  $firstname = $lastname = $idno = $dob = $phone = $email = $category = $password = "";
  $firstname_err = $lastname_err = $idno_err = $dob_err = $phone_err = $email_err = $category_err = $password_err = "";
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
    //Validate dob
    if (empty(trim($_POST["dob"]))) {
      $dob_err = "Please enter your date of birth";
    }else{
      $dob = trim($_POST["dob"]);
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
    if (empty(trim($_POST["email"]))) {
      $email_err = "Please enter your email";
    }else{
      $email = trim($_POST["email"]);
    }
    //Validate category
    if (empty(trim($_POST["category"]))) {
      $category_err = "Please select your category";
    }else{
      $category = trim($_POST["category"]);
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
    #Validate password
    if (empty(trim($_POST["password"]))) {
      $password_err = "Please enter your password";
    }else{
      $password = trim($_POST["password"]);
    }

    #Check for input errors before entering in the database
    if (empty($firstname_err) && empty($lastname_err) && empty($idno_err) && empty($dob_err) && empty($phone_err) && empty($email_err) && empty($category_err) && empty($password_err)) {
      //Prepare an insert statement
      $sql = "INSERT into customer(firstname,lastname,idno,dob,phone,email,password,category) VALUES(?, ?, ?, ?, ?, ?, ?, ?)";

      if ($stmt = $mysqli->prepare($sql)) {
        # Bind variables to the prepared statement as parameters
        $stmt->bind_param("ssssssss",$param_firstname,$param_lastname,$param_idno,$param_dob,$param_phone,$param_email,$param_password,$param_category);
        #Set the parameters
        $param_firstname = $firstname;
        $param_lastname = $lastname;
        $param_idno = $idno;
        $param_dob = $dob;
        $param_phone = $phone;
        $param_email = $email;
        $param_category = $category;
        #Creates a password hash
        $param_password = password_hash($password, PASSWORD_DEFAULT);

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

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">

  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
          
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
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
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
<script>
  function showHideForm(){
  
    if(document.getElementById('category')=="employee"){
      document.getElementById('emp').show;
      document.getElementById('cust').hide;

    }
  }

  </script>
</head>
<body>

<h2>Sign Up</h2>
<p>Enter all your necessary details.-</p>
<div class="row">
  <div class="col-75">
    <div class="container">
      <form action="" method="post" accept-charset="utf-8" id="cust">
      
        <div class="row">
          <div class="col-50">
            <h3>Registration Details</h3>
            <label for="firstname"><i class="fa fa-user"></i> First Name</label>
            <input type="text" id="firstname" name="firstname" placeholder="John">
             <label for="lastname"><i class="fa fa-user"></i> Last Name</label>
            <input type="text" id="lastname" name="lastname" placeholder="Doe">
            <label for="idno"><i class="fa fa-address-card-o"></i> ID Number</label> <input type="text" id="idno" name="idno" placeholder="24737824">
             <label for="phone"><i class="fa fa-phone"></i> Phone</label>
            <input type="text" id="phone" name="phone" placeholder="07836536">
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" placeholder="john@example.com">
            <label for="dob"><i class="fa fa-calendar"></i> Date of birth</label>
            <input type="text" id="dob" name="dob" placeholder="1987/09/12">
            <label for="password"><i class="fa fa-lock"></i> Password</label>
            <input type="password" id="password" name="password" placeholder="">
            <!--  <label for="cpass"><i class="fa fa-lock"></i>Confirm Password</label>
            <input type="password" id="cpass" name="cpass" placeholder=""> -->
            <!-- <label for="category"><i class="fa fa-institution"></i> Category</label> -->
                    <select class="custom-select custom-select-lg mb-3" name= "category" id="category">
                      <option selected>Category</option>
                      <option value="customer">Customer</option>
                      <option value="employee">Employee</option> 
                    </select>
            <div class="row">
              <div class="col-50">
                <!-- <label for="state">State</label>
                <input type="text" id="state" name="state" placeholder="NY"> -->
              </div>
              <!-- <div class="col-50">
                <label for="zip">Zip</label>
                <input type="text" id="zip" name="zip" placeholder="10001">
              </div> -->
            </div>
          </div>

         <!--  <div class="col-50">
            <h3>Payment</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardname" placeholder="John More Doe">
            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
            <label for="expmonth">Exp Month</label>
            <input type="text" id="expmonth" name="expmonth" placeholder="September">
            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" name="expyear" placeholder="2018">
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="352">
              </div>
            </div>
          </div> -->
          
        </div>
       <!--  <label>
          <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
        </label> -->
        <input type="submit" value="Register" class="btn">
      </form>
       <form action="/action_page.php" id="emp">

      
        <div class="row">
          <div class="col-50">
            <h3>Registration Details</h3>

                <select class="custom-select custom-select-lg mb-3" name= "category">
                      <option selected>Category</option>
                      <option value="customer">Plumber</option>
                      <option value="employee">Electrician</option> 
                      <option value="employee">Cleaner</option>
                    </select>

               <h4>Base of Work:</h4>
               <label for="county"><i class="fa fa-institution"></i> County</label>
               <input type="text" id="county" name="county" placeholder="Nairobi">

                <label for="Constituency"><i class="fa fa-institution"></i> Constituency</label>
               <input type="text" id="constituency" name="constituency" placeholder="Embakasi East">
                <label for="Ward"><i class="fa fa-institution"></i> Ward</label>
               <input type="text" id="ward" name="ward" placeholder="Savannah">
              
<!-- 
            <label for="fname"><i class="fa fa-user"></i> First Name</label>
            <input type="text" id="fname" name="firstname" placeholder="John">
             <label for="lname"><i class="fa fa-user"></i> Last Name</label>
            <input type="text" id="lname" name="lastname" placeholder="Doe">
            <label for="adr"><i class="fa fa-address-card-o"></i> ID Number</label> <input type="text" id="adr" name="address" placeholder="24737824">
             <label for="phone"><i class="fa fa-phone"></i> Phone</label>
            <input type="text" id="phone" name="phone" placeholder="07836536">
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" placeholder="john@example.com">
            <label for="dob"><i class="fa fa-calendar"></i> Date of birth</label>
            <input type="text" id="dob" name="dob" placeholder="12/09/87">
            <label for="category"><i class="fa fa-institution"></i> Category</label>
               <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Category
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item" href="#">Customer</a>
                  <a class="dropdown-item" href="#">Employee</a>
                  
                </div>
              </div> -->
            <div class="row">
              <div class="col-50">
                <!-- <label for="state">State</label>
                <input type="text" id="state" name="state" placeholder="NY"> -->
              </div>
              <!-- <div class="col-50">
                <label for="zip">Zip</label>
                <input type="text" id="zip" name="zip" placeholder="10001">
              </div> -->
            </div>
          </div>

         <!--  <div class="col-50">
            <h3>Payment</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardname" placeholder="John More Doe">
            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
            <label for="expmonth">Exp Month</label>
            <input type="text" id="expmonth" name="expmonth" placeholder="September">
            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" name="expyear" placeholder="2018">
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="352">
              </div>
            </div>
          </div> -->
          
        </div>
       <!--  <label> 
          <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
        </label> -->
        <input type="submit" value="Register" class="btn">
      </form>
    </div>
  </div>

  <!-- <div class="col-25">
    <div class="container">
      <h4>Cart <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i> <b>4</b></span></h4>
      <p><a href="#">Product 1</a> <span class="price">$15</span></p>
      <p><a href="#">Product 2</a> <span class="price">$5</span></p>
      <p><a href="#">Product 3</a> <span class="price">$8</span></p>
      <p><a href="#">Product 4</a> <span class="price">$2</span></p>
      <hr>
      <p>Total <span class="price" style="color:black"><b>$30</b></span></p>
    </div>
  </div>
</div> -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
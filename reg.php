<?php
include("connection.php");
include("sign.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>County Funds Transparency and Development Checker | Register</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
     <link rel="shortcut icon" type="image.PNG" href="assets/Images/logo.PNG" >
    <!-- Main css -->
    <link rel="stylesheet" href="register/css/style.css">
    <style type="text/css">
.error {
  width: 92%; 
  margin: 0px auto; 
  padding: 10px; 
  border: 1px solid #a94442; 
  color: #a94442; 
  background: #f2dede; 
  border-radius: 5px; 
  text-align: left;
}
    </style>

</head>
<body>

    <div class="main">

        <div class="container">
            <form action="sign.php" method="POST" class="appointment-form" id="appointment-form">
              <?php include("errors.php");?>
              
                <a style="margin-left: 180px" href="index.php"><img src="assets/images/logo.png" alt="logo" class="logo" style="border-radius: 400px; width: 70px; min-height: 70px; padding-right: 2px;"></a>
                <h2 style="padding-top: ; "> </a>Create an account with CFTDC</h2>
                <div class="form-group-1">
                    <input type="text" name="firstname" id="title" placeholder="First name" required />
                    <input type="text" name="lastname" id="name" placeholder="Second name" required />
                    <input type="text" name="username" id="username" placeholder="Username" value="<?php echo $username; ?>" required />
                    <input type="email" name="email" id="email" placeholder="Email" value="<?php echo $email; ?>" required />
                    <input type="password" name="password1" id="name" placeholder="Password" required />

                    <input type="password" name="password2" id="name" placeholder="Confirm password" required />
                    
                    <input type="number" name="phonenumber" id="phone_number" placeholder="Phone number" required />
                    <h3 style="color: green">Please select your gender</h3>
                    <h3  for="male" style="display: all">Male <input style="margin-top: " type="radio" id="male" name="gender" value="male"></h3>
                    <!-- <h3 for="male">Female</h3> -->
                    
                    <h3 for="male">Female <input style="margin-top: " type="radio" id="female" name="gender" value="female"></h3>
                    
                    
                        
                   
                </div>
               
                <div class="form-check">
                    <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                    <label for="agree-term" class="label-agree-term"><span><span></span></span>Already have an account <a style="color: green" href="main.php" class="term-service">Login here</a></label>
                </div>
                <div class="form-submit">
                    <input style="background-color: #ff914d" type="submit" name="submit" id="submit" class="submit" value="Register" />
                </div>
            </form>
        </div>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
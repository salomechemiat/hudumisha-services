<?php
$username = "";
$email    = "";
$errors = array(); 

$db = mysqli_connect('localhost', 'root', '', 'cftdc');

if (isset($_POST['submit'])) {
  // receive all input values from the form
  $firstname = mysqli_real_escape_string($db, $_POST['firstname']);
  $lastname = mysqli_real_escape_string($db, $_POST['lastname']);
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password1 = mysqli_real_escape_string($db, $_POST['password1']);
  $password2 = mysqli_real_escape_string($db, $_POST['password2']);
  $phonenumber = mysqli_real_escape_string($db, $_POST['phonenumber']);
  $gender = mysqli_real_escape_string($db, $_POST['gender']);
  
  

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
 
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if ($password1 != $password2) {
    array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM citizen WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
    $password = md5($password1);//encrypt the password before saving in the database

    $query = "INSERT INTO citizen (firstname, lastname,username, email, password,phonenumber,gender) 
              VALUES('$firstname', '$lastname','$username', '$email', '$password', '$phonenumber', '$gender')";
    mysqli_query($db, $query);
    $_SESSION["uid"] = $row["citizenid"];
    $_SESSION['username'] = $username;
    $_SESSION['success'] = "You are now logged in";
    header('location: profile.php');
  }
else {
        echo '<script language="javascript">';
        echo 'alert("Ooop! Something went wrong")';
        echo '</script>';;
      }
}
?>
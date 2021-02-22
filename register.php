
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login CFTDC</title>
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="shortcut icon" type="image.PNG" href="assets/Images/logo.PNG" >
  <link href="assets/css/login.css" rel="stylesheet">
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <style type="text/css">
    @media screen and (min-width: 900px) {
      .CFTDC{
        margin-left: 60px; } }
        @media screen and (max-width: 950px) {
      .CFTDC{
        margin-left: 60px; } }

  </style>
</head>
<script type="text/javascript">
$(document).ready(function(){
$.get("login.php",function(data){
$(".error").html(data);
});
});

</script>
<body>
  <main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
    <div class="container">
      <div class="card login-card">
        <div class="row no-gutters">
          <div class="col-md-5">
            <img src="images/landing1.jpg"  alt="login" class="login-card-img" >
          </div>
          <div class="col-md-7">
            <div class="card-body">
              <div class="brand-wrapper">
                <img src="images/logo.png" alt="logo" class="logo" style="border-radius: 400px; width: 50px;height: 50px">
                 <a href="index.php"><h1 class="CFTDC" style=" margin-top: -50px; color: black; ">CFTDC</h1></a>
              </div>
              <p class="login-card-description" style="color:#ff914d">Sign into your account</p>
             <form method="POST" class="appointment-form" id="appointment-form">
                <h2>education appointment form</h2>
                <div class="form-group-1">
                    <input type="text" name="title" id="title" placeholder="Title" required />
                    <input type="text" name="name" id="name" placeholder="Your Name" required />
                    <input type="email" name="email" id="email" placeholder="Email" required />
                    <input type="number" name="phone_number" id="phone_number" placeholder="Phone number" required />
                    <div class="select-list">
                        <select name="course_type" id="course_type">
                            <option slected value="">Course Type</option>
                            <option value="society">Society</option>
                            <option value="language">Language</option>
                        </select>
                    </div>
                </div>
                <div class="form-group-2">
                    <h3>How would you like to bo located ?</h3>
                    <div class="select-list">
                        <select name="confirm_type" id="confirm_type">
                            <option seleected value="">By phone</option>
                            <option value="by_email">By email</option>
                        </select>
                    </div>
                    <div class="select-list">
                        <select name="hour_appointment" id="hour_appointment">
                            <option seleected value="">Hours : 8am 10pm</option>
                            <option value="9h-11h">Hours : 9am 11pm</option>
                        </select>
                    </div>
                </div>
                <div class="form-check">
                    <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                    <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree to the  <a href="#" class="term-service">Terms and Conditions</a></label>
                </div>
                <div class="form-submit">
                    <input type="submit" name="submit" id="submit" class="submit" value="Request an appointment" />
                </div>
            </form>
                <a href="#!" class="forgot-password-link">Forgot password?</a>
                <p style="color:green" class="login-card-footer">Don't have an account? <a href="" class="text-reset" style="color:green"><b>Register here</b></a></p>
                <nav class="login-card-footer-nav">
                  <a href="#!">Terms of use.</a>
                  <a href="#!">Privacy policy</a>
                </nav>
            </div>
          </div>
        </div>
      </div>
     
    </div>
  </main>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>

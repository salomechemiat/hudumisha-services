
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Hudumisha| Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style(2).css">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">
    
  <!-- Compiled and minified JavaScript -->
  
    <style>
   .table{

     margin-top: 10px;
      background:#fff;
    box-shadow:0 20px 50px rgba(0,0,0,.1);
      border-radius:10px;
    transition:0.5s;
    margin-left: 20px;
    margin-right:50px;
     padding-right: 50px;
    padding-left: 50px;

   
}
.table:hover {
    box-shadow:0 30px 70px rgba(0,0,0,.2);
}
.box .table {
  margin-top: 10px;
     
    position:absolute; 
    top:10%;
    padding-right: 50px;
    padding-left: 50px;
    margin-left:30px;
    margin-right:30px;

    
    text-align:center;
    padding:20px;
    box-sizing:border-box;
    
}
header{
  margin-bottom: 20px;
}

    </style>
  </head>
<body cz-shortcut-listen="true">
  
            

<header>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#">Hudumisha</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Dashboard <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Profile</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="#">Payment</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="#">Logout</a>
            </li>
          </ul>
        </div>
      </nav>
    </header>
<form action="" method="post">

          <div class="box">   
          <table class="table">

              <thead class="thead-dark">
                <tr>
                  <th scope="col">Person Name</th>
                  <th scope="col">ID Number</th>
                  <th scope="col">Address</th>
                   <th scope="col">Date and Time</th>
                    <th scope="col">Time of booking</th>
                    <th scope="col">Status</th>
                    <th scope="col"></th>
                  
                </tr>
              </thead>

<?php  
  //Include the connection file
  require_once 'connection.php';  

  // $Category=$_POST['category'];

  $sql="SELECT * FROM booking";
$result=$mysqli->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) { 
        $firstname = $row["firstname"];
        $idno = $row["idno"];
        $address = $row["address"];
        $date = $row["date"];
        $time = $row["time"];
        $status = $row["status"];
        $id = $row["booking_id"];

      

          echo "<tbody>";
          echo "<tr>";
       

          echo "<td>" . $firstname. "</td>"; 
          
          echo "<td>" . $idno. "</td>"; 
          echo "<td>" . $address. "</td>"; 
           echo "<td>" . $date. "</td>";
            echo "<td>" . $time. "</td>";
            echo "<td>" . $status. "</td>";


            echo" 
         
              <td>
              <a href='contact.php'><input value='accept' type='submit' class='btn-primary' name='accept'></a>
                </td>";

                if(isset($_POST['accept'])) { 
       $updateStatus = $mysqli->prepare("UPDATE booking SET status = 'accepted' WHERE booking_id = '$id'");
        $updateStatus ->execute();

      }
                        
                echo "</tr>";
                echo "</tbody>";
    }
} else {
    echo "0 results";
}
        // echo "</table>";
        // mysqli_close($con);
        ?>
        
        
      </table>

    </div>
</form>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
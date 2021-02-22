  <?php 
      
    
$con = mysqli_connect("localhost","root","","cftdc");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }else{
    echo "";
  }
if(isset($_POST['submit'])){
         
          $comment = $_POST["comments"];
          
         

  $sql = "INSERT INTO comments (comment,countyid,name) VALUES ( '$comment','1','Mombasa' ) ";

  if (mysqli_query ($con, $sql)){
    header("location: counties.php");
       echo '<script language="javascript">';
       echo 'alert("Comments successfully sent successfully")';
      echo '</script>';
        
      
      } else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
}

// echo $sql;

// Close connection
}
$con->close();
?>


<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "hotel_management_system";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);

  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }

  if(isset($_GET['deleteCode'])){
    $code=$_GET["deleteCode"];
    $sql="DELETE FROM `room booking` WHERE Booking_ID = '$code'";
    
    $result=mysqli_query($conn ,$sql);
    if($result){
      echo "<script>alert('Record Deleted Successfully');</script>";
    }
    else{
      echo"<script type='text/javascript'> alert ('Error in Deleting Record') </script>";
    }
  }
  
?>
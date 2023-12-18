<?php
$flag = '';
if (isset($_POST['submit'])) {
    $FullName = $_POST['FullName'];
    $NIC = $_POST['NIC'];
    $Address = $_POST['Address'];
    $Contact_Number = $_POST['Contact_Number'];
    $Email = $_POST['Email'];

    $conn = mysqli_connect('localhost', 'root', '', 'hotel_management_system');

    $sql = "INSERT INTO `customer`(`Name`, `Customer_NIC`, `Address`, `Contact_Number`, `Email`) 
            VALUES (?, ?, ?, ?, ?)";

    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, 'sssss', $FullName, $NIC, $Address, $Contact_Number, $Email);

    $result = mysqli_stmt_execute($stmt);

    if ($result) {
        $flag = 'success';
    } else {
        $flag = 'failed';
    }

    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}
?>


<?php
$flag = '';
if (isset($_POST['submit'])) {
    $NIC = $_POST['NIC'];
    $selectedOptionHallNo = $_POST['Hall_No'];
    $selectedBookingDate = $_POST['Booking_Date'];
    $selectedOptionHallType = $_POST['HallType'];
    $selectedOptionGuests = $_POST['NoOfGuests'];
    $selectedOptionHallName = $_POST['HallName'];
    $selectedOptionHallPrice = $_POST['HallPrice'];

    $connection = mysqli_connect('localhost', 'root', '', 'hotel_management_system');

    $sql="INSERT INTO `hall booking`(`Customer_NIC`, `Hall_ID`, `Date`, `Number_Of_Guests`, `Hall_Type`, `Hall_Name`, `Hall_Price`) 
    VALUES ('$NIC','$selectedOptionHallNo','$selectedBookingDate','$selectedOptionGuests','$selectedOptionHallType','$selectedOptionHallName','$selectedOptionHallPrice')";

    $result = mysqli_query($connection, $sql);

    if ($result) {
        $flag = 'success';
    } else {
        $flag = 'failed';
    }

    mysqli_close($connection);
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="./RoomBooking img/HallBooking.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link href="http://fonts.googleapis.com/css?family=Cookie">

    <link rel="stylesheet" href="./RoomBooking img/navbar1.css">
    <script>
        // Function to toggle the visibility of the submenu
        function toggleSubMenu() {
            var submenu = document.getElementById("submenu");
            if (submenu.style.display === "block") {
                submenu.style.display = "none";
            } else {
                submenu.style.display = "block";
            }
        }
    </script>

<script>
function checkMaxValue(input) {
    var value = parseInt(input.value);
    var messageElement = document.getElementById('guestsMessage');

    if (isNaN(value)) {
        messageElement.textContent = 'Please enter a valid number.';
        return;
    }

    if (value > 150) {
        messageElement.textContent = 'Please enter a value under 300.';
    } else {
        messageElement.textContent = '';
    }
}
</script>

</head>
<body>
<header>
        <div id="main-menu">
            <div><img src="./Logo1.png" alt=""  class="logo"></div>
            <div class="name">Hotel Wadiyanilla</div>
            <nav id="menu-area">
                <ul>
                    <li class="li"><span><a href="index1.php">Home</a></span></li>
                    <li class="li"><span><a href="about-us.html">About-Us</a></span></li>
                    <li class="li">
                        <span><a href="#" onclick="toggleSubMenu()">Reservation</a></span></li>
                        <ul id="submenu" style="display: none;" class="submenu-1">
                            <li class="sub"><a href="room.php">Room</a></li>
                            <li class="sub"><a href="hall.php">Hall</a></li>
                        </ul>
                    </li>
                    <li class="li"><span><a href="Contact us.php">Contact-Us</a></span></li>
                </ul>
            </nav>
        </div>
    </header>
        <h2>----Hall Booking----</h2>
        <h1>Book Your Hall</h1>

        <div class="container">
        <img src="./RoomBooking img/about-1.jpg" alt="" width="160px" height="160px" class="img">

        <img src="./RoomBooking img/about-2.jpg" alt="" width="200px" height="220px" class="img1"> <br>

        <img src="./RoomBooking img/about-3.jpg" alt="" width="100px" height="100px" class="img2"><br>

        <img src="./RoomBooking img/about-4.jpg" alt="" width="150px" height="160px" class="img3">
    </div>
       
       <div class="container2">

       <form action="" method="POST">
            <input type="text" name="FullName" placeholder="Full Name" required class="input">

            <input type="text" name="NIC" placeholder="NIC Number Without(v)" required class="input"> <br><br>

            <input type="text" name="Address" placeholder="Your Address" required class="input">

            <input type="text" name="Contact_Number" placeholder="Phone Number" required class="input"> <br><br>


            
            <label for="" class="label2">Hall Number</label> 
            <input type="email" name="Email" placeholder="Your Email" required class="input">

           
                 <select name="Hall_No" id="dropdown" class="input">
                    <option value="03">03</option>
                   
                 </select>

                 <br><br>
            <label for="" class="label">Booking Date</label>
            <label for="" class="label3">No Of Guests</label> <br>
            <input type="date" name="Booking_Date"  required class="input"> 
       
           
            <input type="text" name="NoOfGuests" required class="input" oninput="checkMaxValue(this)">
            <p id="guestsMessage" class="label2"></p><br><br>

            <label for="" class="label">Select Hall Type</label>
            <label for="" class="label4">Hall Name</label> <br>

                 <select name="HallType" id="" class="input">
                    
                    <option value="Non AC">Non AC</option>
                    
                    
                    
                 </select>


                 <select name="HallName" id="" class="input">
                    
                    <option value="Golden Sands Hall">Golden Sands Hall</option>
 
                 </select>  <br><br>
                  
                 <label for="" class="label">Hall Price</label> <br>
                 <select name="HallPrice" id="" class="input">
                   
                    <option value="R.s 400000.00/=">	R.s 400000.00/=</option>
 
                 </select>

                 <br>
            <input type="submit" class="btn" name="submit" value="SUBMIT">
            </form>
       </div>
       <br><br><br>
       <!--Footer Start -->
        
<footer class="footer-distributed">

    <div class="footer-left">
        <h3>Hotel &nbsp;<span>Wadiyanilla </span></h3>
  
        <p class="footer-links">
            <a href="#">Home</a>
            |
            <a href="#">About</a>
            |
            <a href="#">Contact</a>
            |
            <a href="#">Blog</a>
        </p>
  
        <p class="footer-company-name">Copyright © 2021 <strong>wadiyanilla</strong> All rights reserved</p>
    </div>
  
    <div class="footer-center">
        <div>
            <i class="fa fa-map-marker"></i>
            <p><span>No15,Galgamuwa Road;</span>
                Ehatuwawa</p>
        </div>
  
        <div>
            <i class="fa fa-phone"></i>
            <p>+94 760660295</p>
        </div>
        <div>
            <i class="fa fa-envelope"></i>
            <p><a href="mailto:sagar00001.co@gmail.com">HotelWadiyanilla@gmail.com</a></p>
        </div>
    </div>
    <div class="footer-right">
        <p class="footer-company-about">
            <span>STAY WITH US</span>
            <strong>   </strong> Get the latest updates and offers.
        </p>
        <div class="footer-icons">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
            
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-youtube"></i></a>
        </div>
    </div>
  </footer>
  <!--Footer end-->
    


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
            VALUES ('$FullName', '$NIC', '$Address', '$Contact_Number', '$Email')";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        $flag = 'success';
    } else {
        $flag = 'failed';
    }

    mysqli_close($conn);
}
?>

<?php
$flag = '';
if (isset($_POST['submit'])) {
    $NIC = $_POST['NIC'];
    $selectedOption = $_POST['Room_No'];
    $selectedDateCheckIn = $_POST['Date_Of_Check_in'];
    $selectedDateCheckOut = $_POST['Date_Of_Check_out'];
    $selectedOptionGuests = $_POST['Number_Of_Guests'];

    $connection = mysqli_connect('localhost', 'root', '', 'hotel_management_system');

    $sql = "INSERT INTO `room booking`(`Customer_NIC`, `Room _No`, `Date_Of_Check_in`, `Date_Of_Check_out`, `Number_Of_Guests`)
            VALUES ('$NIC', '$selectedOption', '$selectedDateCheckIn', '$selectedDateCheckOut', '$selectedOptionGuests')";

    $result = mysqli_query($connection, $sql);

    if ($result) {
        $flag = 'success';
    } else {
        $flag = 'failed';
    }

    mysqli_close($connection);
}
?>



<head>
    
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link href="http://fonts.googleapis.com/css?family=Cookie">
    
   

    <link rel="stylesheet" href="./RoomBooking img/navbar1.css">
    <link rel="stylesheet" href="./RoomBooking img/RoomBooking.css">
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
</head>

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

    <h2>----Room Booking----</h2>
        <h1>Book Your Room</h1>
       
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

            <label for="" class="label2">Room Number</label> 
            <input type="email" name="Email" placeholder="Your Email" required class="input">

           
                 <select name="Room_No" id="dropdown" class="input">
                    
                    <option value="02">02</option>
                    
                 </select>

                 <br><br>
            <label for="" class="label">Arrival Date</label>
            <label for="" class="label1">Departure Date</label> <br>

            <input type="date" name="Date_Of_Check_in"  required class="input"> 
           
            <input type="date" name="Date_Of_Check_out"  required class="input"> <br> <br>

             
            <label for="" class="label">No Of Guests</label> 
            <label for="" class="label1">Select Room Type</label> <br>

                 <select name="Number_Of_Guests" id="" class="input">
                    <option value=""></option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                   
                 </select>

            
                 <select name="Type" id="" class="input">
                    <option value=""></option>
                  
                    <option value="Double">Double</option>
                   
                 </select>

                 <br>
            <input type="submit" class="btn" name="submit" value="SUBMIT">
            </form>
       </div>

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
    


<?php
$flag = '';
if (isset($_POST['submit'])) {
       $Name = $_POST['Name'];
       $Email = $_POST['Email'];
       $Subject = $_POST['Subject'];
       $Massage = $_POST['Massage'];

       $conn = mysqli_connect('localhost', 'root','','hotel_management_system');
       
       $sql = "INSERT INTO `contactus`( `Name`, `Email`, `Subject`, `Massage`) 
          VALUES ('$Name','$Email','$Subject','$Massage')";

        $result = mysqli_query($conn, $sql);
        if ($result) {
            $flag = 'success';
            } else {
                $flag = 'failed';
                }

              }
?>


<head>
       <link rel="stylesheet" href="Contact us.css">
       <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
		   <link href="http://fonts.googleapis.com/css?family=Cookie">
      
 
       <!--logo position and name-->
       <link rel="stylesheet" href="./css/navbar1.css">
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
<!--content--> 
  <div class="container">
        
        <div><br><h2>--CONTACT US--</h2>
          <h3>CONTACT US <span class="h31">For Any Query</span></h3></div>
            
          <div>
            <!--icon-->
              <div>
                <img src="./contact us img/download - Copy.png" alt="icon" width="30px" height="30px" class="img1">
              </div>
    
              <div>
                <img src="./contact us img/images (1).png" alt="icon" width="30px" height="30px" class="img2">
              </div>
    
              <div >
                <img src="./contact us img/download (3).png" alt="icon" width="30px" height="30px" class="img3">
              </div>
           </div>

            
           <form action="" method="post">
                      <div class="text1">
                        <p>No 11, Galgamuwa Road ,<br>
                           Ehetuwewa
                       </p>

                      </div>

                       <div class="text2">
                         <p>Phone: 0789853243</p>
                         <p>Fax : 0789853243</p>

                      </div>

                       <div class="text3">
                         <p>Email:<a href="#" class="A"> hotelwediyanilla@gmail.com</a></p>
                      </div>

                      <div class="Con"> 
                      </div>

                      <div>
                        <input type="text" class="Con1" name="Name" placeholder="Name" required>
                      </div>


                      <div>
                        <input type="email" class="Con2" name="Email" placeholder="Email" required>
                     </div>
           
                      <div>
                        <input type="text" class="Con3" name="Subject" placeholder="Subject" required>
                    </div>
  
                    <div>
                        <textarea id="" class="Con4" name="Massage" placeholder="Your Massage" rows="11" cols="50" required></textarea>
                    </div>
  
                    <div>
                    <input type="submit" class="button1" name="submit" value="SUBMIT">
                     </div>
            </form>    
 
             </div>
  </div>
  
       
         
       <br><br><br><br><br>   

<!--content End-->
        
<!--Foter Start -->
        
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
<!--foter end-->

        
    



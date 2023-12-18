
<head>
    
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link href="http://fonts.googleapis.com/css?family=Cookie">
    
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/slide.css">
    
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/aboutus.css">
    <link rel="stylesheet" href="./css/rooms.css">
    <link rel="stylesheet" href="./css/review.css">

  
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
      
      <div class="container">
        <img id="slideshow" width="100%" height="450">
        <div class="animate-text">Book Your Perfect Getaway Now</div>
        
      </div>
      
      <style>
        .container{
          margin-top:-24%;
        }
        .text {
          position: -webkit-sticky;
          width: 1264px;
          height: 450px;
          z-index:4;
      
        }
      
        .animate-text {
          position: -webkit-sticky;
          margin-top: -8%;
          margin-left: 50%;
          transform: translate(-50%, -50%);
          color:#ffff;
          font-size: 42px;
          animation: fade-in 2s ease-in-out infinite;
        }
      
        @keyframes fade-in {
          0% {
            opacity: 0;
          }
          50% {
            opacity: 1;
          }
          100% {
            opacity: 0;
          }
        }
      </style>
      
      <script>
        var i = 0;
        var images = ['image1.jpg', 'image5.jpg', 'image3.jpg', 'image2.jpg'];
        var time = 4000;
      
        function changeImg() {
          document.getElementById('slideshow').src = images[i];
      
          if (i < images.length - 1) {
            i++;
          } else {
            i = 0;
          }
          setTimeout(changeImg, time);
        }
        window.onload = changeImg;
      </script>

<?php
// Assuming you have established a database connection

// Check if form is submitted
if (isset($_POST['submit1'])) {
    $Date = $_POST["check_in_date"];
    $roomno = $_POST["room_no"];

    // Database connection
    $connection = mysqli_connect("localhost", "root", "", "hotel_management_system");

    // Check connection
    if (!$connection) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Check if the entered details already exist in the booking table
    $query = "SELECT * FROM room booking WHERE 'Date_Of_Check_in' = '$Date' AND 'Room_No' = '$roomno'";
    $result = mysqli_query($connection, $query);

    if (mysqli_num_rows($result) > 0) {
        // Entered details already exist in the booking table, display the popup message
        echo "<script>alert('You cannot book that room.');</script>";
    } else {
        // Entered details don't exist in the booking table, redirect to the room.html page
        header("Location: room.php");
        exit;
    }

    // Close database connection
    mysqli_close($connection);
}
?>
<form class="form" method="POST">  
    <h3>Booking Your Room</h3>
    <span class="heading">Check In:</span>
    <input type="date" class="input" name="check_in_date" placeholder="">
    <span class="heading">Check Out:</span>
    <input type="date" class="input" placeholder="">
    <span class="heading">Guest:</span>
    <select class="select" name="room_no">
        <option value=""></option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
    </select>
    <span class="heading">Room:</span>
    <select class="select">
        <option value=""></option>
        <option value="Delux">Delux</option>
        <option value="Super Luxury">Super Luxury</option>
        <option value="Single">Single</option>
        <option value="Double">Double</option>
        <option value="Luxury">Luxury</option>
        <option value="Super Delux">Super Delux</option>
    </select>
    <br>
    <button type="submit" name="submit1" class="button1">Check Availability</button>
</form>

</div>

        <div class="img"><img src="./image 4.jpg" alt="image" width="500" height="300"></div>
        <style>
            .img{
                position:-webkit-sticky;
                margin-top:2% ;
                margin-left:55%;
                
            }
        </style>

      <!--about us-->
    <div class="container1">
      <div class="sidebar">
        <h2>About Us</h2>
        <p1>
          <br>
          Welcome To Wadiya Nilla Hotel
          <br>
           20% Off On Accommodation.
          Complimentary Daily Breakfast
          3 Pcs Laundry Per Day
           Free Wifi.
          Discount 20% On F&B
          <a href="about-us.html" style="font-size: 16px; text-decoration: none;">See more details</a>
          <br>
          
        </p1>
      </div>
    </div>
  <!--about us -->
 
 <!--facilities start-->
        
 <div class="section-container">
         <div class="columns image" style="background-image:url('./image1.jpg')">
             &nbsp;
         </div>
     <div class="columns contents">
         <div class="content-container">
             <h5>Why do we use it?</h5>
             <br>
             <p>     Let us take you on a refined culinary journey inspired by authentic Sri
                 Lankan dishes and cuisines from all over the world with our extensive menu.
                 Dine, snack or sip at our finest restaurants when your apatite is voracious by being in the salty water for a while or after a dip in the pool.
                  Enjoy in room dining and specialty dining if privacy is what you desire. Dine with a smile!.
             </p>
             <br>
         </div>
     </div>



     <div class="section-container">

     <div class="columns contents">
         <div class="content-container">
             <h5>Plan Your Events With Us</h5>
             <br>
             <br>
             <p>  Host one stop worry free event with us.
                We undertake outdoor boutique weddings, corporate seminars, cocktail meetings, gala dinners,
                birthday parties, and group social meetings for up to 85 people and delight your guests with refined
                 cuisine that has charmed many a gourmet before.
                 <br>
                 <br>
                 <br>
             </p>
             
         </div>
     </div>
     <div class="columns image" style="background-image:url('./Plan.jpg')">
         &nbsp;
     </div>
 </div>
 </div>
 

 
     <div class="section-container">
         <div class="columns image" style="background-image:url('./image3.jpg')">
             &nbsp;
         </div>

     <div class="columns contents">
         <div class="content-container">
             <h5>Wedding Halls</h5>
             <p>  At Club Palm Bay, we offer you a range of customizable wedding services; 
                Variety of seating arrangements to suit your number of guests Main restaurant 
                can be used as wedding hall Welcome drink Outdoor wedding (Catering and service only) Hotel 
                premises for wedding photography Champaign fountain with bottle Bookings made for less than 200 guests
                 get 1 free room on full board basis at any of our hotels Bookings made for more than 200 guests get 2 free rooms on full board basis at any of our hotels
             </p>
             <br>
         </div>
     </div>
     </div>

 
 
     <div class="section-container">
     
     <div class="columns contents">
         <div class="content-container">
             <h5>Hotel Rooms</h5>
             <br>
             <p>     A typical standard hotel room should contain a very comfortable and beautifully decorated bed with soft pillows to allow maximum comfort during sleep. 
                Items such as a coffee maker, cable TV, hairdryer, etc., should also be present in a standard hotel room.
             </p>
             <br>
         </div>
     </div>
     <div class="columns image" style="background-image:url('./image2.jpg')">
         &nbsp;
     </div>
 </div>
 </div>
  <!--facilities end-->


 <!--servises start-->
 <div class="section">
  <div class="title">
      <h1>Discover Our Services</h1>
  </div>
  <div class="services">
      <div class="card">

          <h2>Planing With Us</h2><br>
          <p>Plan your Wedding With Our Wdding Plannig Team  </p>
              
      </div>
      <div class="card">
          <div class="icon">
          
          </div>
          <h2>Catering Services</h2>
          <p>We Provide. A menu specially designed for your event; A friendly and dynamic team for service during the event; Table arrangement necessities such as tables,ect..</p>
      </div>
      <div class="card">
          <div class="icon">
          
          </div><br> 
          <h2>Laundry</h2>
          <p>Our Washing Service is a convenient and affordable method of outsourcing your laundry to professionals.Each garment that you bring undergoes a thorough cleaning process.<br></p>
      </div>
      
      <div class="card">
          <div class="icon">
           
          </div>
          <h2>Bar & Drink</h2>
          <p>Sip your favorite wine while enjoying at our bar. 
              Chill out with our finest wines to wide selection of spirits, Whisky, Brandy and Liqueurs,
               soft drinks and beer paired with a light bite.</p>
      </div>
      <br>
      <div class="card">
          <div class="icon">
           
          </div>
          <h2> Free Wi-fi</h2><br>
          <p> WiFi is available in all areas and is free of charge
             
           </p>
      </div>
  </div>
</div>

<!--servises start-->
<h3><u> Hotel Reviews</u> </h3>
<!--review start-->
   
<div class="content1">
    
    

<?php
// Handle form submission
$flag = '';
$message = '';
if (isset($_POST['submit'])) {
    $name = $_POST["name"];
    $rating = $_POST["rating"];
    $review = $_POST["review"];

    // Database connection
    $connection = mysqli_connect("localhost", "root", "", "hotel_management_system");

    // Check connection
    if (!$connection) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Check if the name exists in the customer table
    $query = "SELECT * FROM customer WHERE Name = '$name'";
    $result = mysqli_query($connection, $query);

    if (mysqli_num_rows($result) > 0) {
        // Name exists in the database, allow submission
        // Process the review submission here

        // Escape special characters
        $name = mysqli_real_escape_string($connection, $name);
        $review = mysqli_real_escape_string($connection, $review);

        // Insert review into the database
        $sql = "INSERT INTO reviews (Name, Rating, Review) VALUES ('$name', $rating, '$review')";

        $result = mysqli_query($connection, $sql);
        if ($result) {
            $flag = 'success';
        } else {
            $flag = 'failed';
        }
    } else {
        // Name doesn't exist in the database, display error message
        $flag = 'invalid';
        $message = "You can't add a review. Please check your name.";
    }

    // Close database connection
    mysqli_close($connection);
}
?>



    <?php
    $conn = mysqli_connect('localhost', 'root','','hotel_management_system');
    // Fetch reviews from the database
    $sql = "SELECT * FROM reviews";
    $result = mysqli_query($conn, $sql);

    // Display reviews
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<div class="review">';
            echo '<div class="review-header">';
            echo '<h6 class="h6">' . $row["Name"] . '</h6>';
            echo '<div class="review-rating">' . $row["Rating"] . ' Stars</div>';
            echo '</div>';
            echo '<p class="rp">' . $row["Review"] . '</p>';
            echo '</div>';
        }
    } else {
        echo "No reviews found.";
    }

    // Close database connection
    mysqli_close($conn);
    ?>
   
</div>
<div class="containerkas">
    <div class="comment-section">
      <h3 class="h3">Leave a Review</h3>
      <form action="" method="POST" >
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br>
        
        <label for="rating">Rating:</label>
        <select id="rating" name="rating" required>
          <option value="">Select rating</option>
          <option value="5">5 Stars</option>
          <option value="4">4 Stars</option>
          <option value="3">3 Stars</option>
          <option value="2">2 Stars</option>
          <option value="1">1 Star</option>
        </select>
        <br>
        <label for="review">Review:</label>
        <textarea id="review" name="review" required></textarea>
        
        <input type="submit" value="Submit" name="submit" class="btn12">
      </form>

 <!-- Display message box -->


</div><br><br>


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


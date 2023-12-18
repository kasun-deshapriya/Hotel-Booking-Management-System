<!DOCTYPE html>
<html lang="en">

<head>
     
    <meta charset="utf-8">
    

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link href="http://fonts.googleapis.com/css?family=Cookie">
   
    
    <!-- Customized Bootstrap Stylesheet -->
    <link href="./room-css/bootstrap.min.css" rel="stylesheet">

    <link href="./room-css/fotter.css" rel="stylesheet">
    <link href="./room-css/hotelroom.css" rel="stylesheet">

   
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
                    <li class="li"><span><a href="index1.php" class="hnn">Home</a></span></li>
                    <li class="li"><span><a href="about-us.html" class="hnn">About-Us</a></span></li>
                    <li class="li">
                        <span><a href="#" onclick="toggleSubMenu()" class="hnn">Reservation</a></span></li>
                        <ul id="submenu" style="display: none;" class="submenu-1">
                            <li class="sub"><a href="room.php" class="hnn">Room</a></li>
                            <li class="sub"><a href="hall.php" class="hnn">Hall</a></li>
                        </ul>
                    </li>
                    <li class="li"><span><a href="Contact us.php" class="hnn">Contact-Us</a></span></li>
                </ul>
            </nav>
        </div>
    </header>

    <div class="  r-1">
       

        <div class=" py-5">
            <div class="container">
                <div class="h-text-center" >
                    <h6 class="text-upper">Our Rooms</h6>
                    <h1 class=" h-text">Explore Our <span class="text-upper">Rooms</span></h1>
                </div>
                <div class="row ">
                    
                    <div class="box">
                        <div class="shadow">
                            <div class="position-webkit-sticky posn-f">
                                <img class="img-fluid img1" src="./room-img/download (11).jpeg" alt="">
                                
                            </div>
                            <div class=" posn-b">
                                <small class="rate">Rs.3000.00</small>
                                <div class="d-flex justify-content-between mb-3">
                                    <h5 >Single Room</h5>
                                    
                                </div>
                                <div>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                </div>
                                <div class="d-flex mb-3">
                                    <small class="border-end me-3 pe-3"><i class="fa fa-bed text-primary me-2"></i>1 Bed</small>
                                    <small class="border-end me-3 pe-3"><i class="fa fa-bath text-primary me-2"></i>1 Bath</small>
                                    <small class="border-end me-3 pe-3"><i class="fa fa-wifi text-primary me-2"></i>Wifi</small>
                                    <small><i></i>TV</small>
                                </div>
                               <table>
                                <tbody>
                                    <tr>
                                        <td class="r-o">Size:</td>
                                        <td>20 ft</td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">Capacity:</td>
                                        <td>Max Person 1</td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">Bed:</td>
                                        <td>King Bed</td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">Services:</td>
                                        <td>Wifi, Television, Bathroom</td>
                                    </tr>
                                    </tbody>
                                </table>
                                <br>
                            </div>
                            
                        </div>
                       
                    </div>
                    <a class="sim" href="RoomBooking.php">Book Now</a>

                    <div class="box">
                        <div class="shadow ">
                        <div class="position-webkit-sticky posn-f">
                                <img class="img-fluid img1" src="./room-img/gallery1.jpg" alt="">
                               
                            </div>
                            <div class=" posn-b">
                                <small class="rate">Rs.3500.00</small>
                                <div class="d-flex justify-content-between mb-3">
                                    <h5 >Double Room</h5>
                                    
                                </div>
                                <div>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                </div>
                                <div class="d-flex mb-3">
                                    <small class="border-end me-3 pe-3"><i class="fa fa-bed text-primary me-2"></i>2 Bed</small>
                                    <small class="border-end me-3 pe-3"><i class="fa fa-bath text-primary me-2"></i>1 Bath</small>
                                    <small class="border-end me-3 pe-3"><i class="fa fa-wifi text-primary me-2"></i>Wifi</small>
                                    <small><i></i>TV</small>
                                </div>
                               <table>
                                <tbody>
                                    <tr>
                                        <td class="r-o">Size:</td>
                                        <td>25 ft</td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">Capacity:</td>
                                        <td>Max Person 2</td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">Bed:</td>
                                        <td>King Beds</td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">Services:</td>
                                        <td>Wifi, Television, Bathroom</td>
                                    </tr>
                                    </tbody>
                                </table>
                                <br>
                            </div>
                            
                        </div>
                       
                    </div>
                    <a class="sim" href="RoomBooking - 1.php">Book Now</a>

                    <div class="box">
                        <div class="shadow ">
                        <div class="position-webkit-sticky posn-f">
                                <img class="img-fluid img1" src="./room-img/room-2.jpg" alt="">
                                
                            </div>
                            <div class=" posn-b">
                                <small class="rate">Rs.4500.00</small>
                                <div class="d-flex justify-content-between mb-3">
                                    <h5 >Delux Room</h5>
                                    
                                </div>
                                <div>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                </div>
                                <div class="d-flex mb-3">
                                    <small class="border-end me-3 pe-3"><i class="fa fa-bed text-primary me-2"></i>3 Bed</small>
                                    <small class="border-end me-3 pe-3"><i class="fa fa-bath text-primary me-2"></i>2 Bath</small>
                                    <small class="border-end me-3 pe-3"><i class="fa fa-wifi text-primary me-2"></i>Wifi</small>
                                    <small><i></i>TV</small>
                                </div>
                               <table>
                                <tbody>
                                    <tr>
                                        <td class="r-o">Size:</td>
                                        <td>30 ft</td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">Capacity:</td>
                                        <td>Max Person 4</td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">Bed:</td>
                                        <td>King Beds</td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">Services:</td>
                                        <td>Wifi, Television, Bathroom</td>
                                    </tr>
                                    </tbody>
                                </table>
                                <br>
                            </div>
                            
                        </div>
                        
                    </div>
                    <a class="sim" href="RoomBooking - 2.php">Book Now</a>

                    <div class="box">
                        <div class="shadow ">
                        <div class="position-webkit-sticky posn-f">
                                <img class="img-fluid img1" src="./room-img/download (2).jpeg" alt="">
                               
                            </div>
                            <div class=" posn-b">
                                <small class="rate">Rs.5000.00</small>
                                <div class="d-flex justify-content-between mb-3">
                                    <h5 >Luxary Room</h5>
                                    
                                </div>
                                <div>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                </div>
                                <div class="d-flex mb-3">
                                    <small class="border-end me-3 pe-3"><i class="fa fa-bed text-primary me-2"></i>3 Bed</small>
                                    <small class="border-end me-3 pe-3"><i class="fa fa-bath text-primary me-2"></i>2 Bath</small>
                                    <small class="border-end me-3 pe-3"><i class="fa fa-wifi text-primary me-2"></i>Wifi</small>
                                    <small><i></i>TV</small>
                                </div>
                               <table>
                                <tbody>
                                    <tr>
                                        <td class="r-o">Size:</td>
                                        <td>35 ft</td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">Capacity:</td>
                                        <td>Max Person 3</td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">Bed:</td>
                                        <td>King Beds</td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">Services:</td>
                                        <td>Wifi, Television, Bathroom</td>
                                    </tr>
                                    </tbody>
                                </table>
                                <br>
                            </div>
                            
                        </div>
                    
                    </div>
                    <a class="sim" href="RoomBooking - 3.php">Book Now</a>

                    <div class="box">
                        <div class="shadow ">
                        <div class="position-webkit-sticky posn-f">
                                <img class="img-fluid img1" src="./room-img/download (3).jpeg" alt="">
                                
                            </div>
                            <div class=" posn-b">
                                <small class="rate">Rs.6000.00</small>
                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="ka">Super Delux Room</h5>
                                    
                                </div>
                                <div>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                </div>
                                <div class="d-flex mb-3">
                                    <small class="border-end me-3 pe-3"><i class="fa fa-bed text-primary me-2"></i>4 Bed</small>
                                    <small class="border-end me-3 pe-3"><i class="fa fa-bath text-primary me-2"></i>2 Bath</small>
                                    <small class="border-end me-3 pe-3"><i class="fa fa-wifi text-primary me-2"></i>Wifi</small>
                                    <small><i></i>TV</small>
                                </div>
                               <table>
                                <tbody>
                                    <tr>
                                        <td class="r-o">Size:</td>
                                        <td>40 ft</td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">Capacity:</td>
                                        <td>Max Person 4</td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">Bed:</td>
                                        <td>King Beds</td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">Services:</td>
                                        <td>Wifi, Television, Bathroom</td>
                                    </tr>
                                    </tbody>
                                </table>
                                <br>
                            </div>
                            
                        </div>
                        
                    </div>
                    <a class="sim" href="RoomBooking - 4.php">Book Now</a>

                    <div class="box">
                        <div class="shadow ">
                        <div class="position-webkit-sticky posn-f">
                                <img class="img-fluid img1" src="./room-img/download.jpeg" alt="">
                                
                            </div>
                            <div class=" posn-b">
                                <small class="rate">Rs.7500.00</small>
                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="ka" >Super Luxary Room</h5>
                                    
                                </div>
                                <div>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                </div>
                                <div class="d-flex mb-3">
                                    <small class="border-end me-3 pe-3"><i class="fa fa-bed text-primary me-2"></i>4 Bed</small>
                                    <small class="border-end me-3 pe-3"><i class="fa fa-bath text-primary me-2"></i>2 Bath</small>
                                    <small class="border-end me-3 pe-3"><i class="fa fa-wifi text-primary me-2"></i>Wifi</small>
                                    <small><i></i>TV</small>
                                </div>
                               <table>
                                <tbody>
                                    <tr>
                                        <td class="r-o">Size:</td>
                                        <td>30 ft</td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">Capacity:</td>
                                        <td>Max Person 5</td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">Bed:</td>
                                        <td>King Beds</td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">Services:</td>
                                        <td>Wifi, Television, Bathroom</td>
                                    </tr>
                                    </tbody>
                                </table>
                                <br>
                            </div>
                            
                        </div>
                        
                    </div>
                    <a class="sim" href="RoomBooking - 5.php">Book Now</a>
                    
                </div>
            </div>
        </div>
        
    </div>

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
</body>

</html>
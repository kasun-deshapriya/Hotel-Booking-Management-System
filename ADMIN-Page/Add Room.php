<?php
?>

<head>
   

    <link rel="stylesheet" href="CSS/admin2.css">
  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</head>

    <div class="container2">
        <h1> Admin Dashboard</h1>
        <h2 class="h">Wadiyanilla </h2>
        <img src="images/download (5).png" alt="logo" class="im1" width="65px" height="65px">
        <a href="Login.html"> <button class="button2"> Logout</button> </a><br>

    </div>

      <div class="sidebar">
        
           <img src="images/download (5).jpg" alt="" class="img2" width="100px" height="100px">
           <br>
           <label for="" class="label1">Mr.Senanayaka</label><br>
           <label for="" class="label2">Manager</label><br>
            <br>
           <div class="icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-person-check-fill" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M15.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L12.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
              <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
            </svg> &nbsp;&nbsp;&nbsp;&nbsp;
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-calendar-check-fill" viewBox="0 0 16 16">
              <path d="M4 .5a.5.5 0 0 0-1 0V1H2a2 2 0 0 0-2 2v1h16V3a2 2 0 0 0-2-2h-1V.5a.5.5 0 0 0-1 0V1H4V.5zM16 14V5H0v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2zm-5.146-5.146-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L7.5 10.793l2.646-2.647a.5.5 0 0 1 .708.708z"/>
            </svg>&nbsp;&nbsp;&nbsp;&nbsp;
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-envelope-check-fill" viewBox="0 0 16 16">
              <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.026A2 2 0 0 0 2 14h6.256A4.493 4.493 0 0 1 8 12.5a4.49 4.49 0 0 1 1.606-3.446l-.367-.225L8 9.586l-1.239-.757ZM16 4.697v4.974A4.491 4.491 0 0 0 12.5 8a4.49 4.49 0 0 0-1.965.45l-.338-.207L16 4.697Z"/>
              <path d="M16 12.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Zm-1.993-1.679a.5.5 0 0 0-.686.172l-1.17 1.95-.547-.547a.5.5 0 0 0-.708.708l.774.773a.75.75 0 0 0 1.174-.144l1.335-2.226a.5.5 0 0 0-.172-.686Z"/>
            </svg>&nbsp;&nbsp;&nbsp;&nbsp;
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-file-lock-fill" viewBox="0 0 16 16">
              <path d="M7 6a1 1 0 0 1 2 0v1H7V6zM6 8.3c0-.042.02-.107.105-.175A.637.637 0 0 1 6.5 8h3a.64.64 0 0 1 .395.125c.085.068.105.133.105.175v2.4c0 .042-.02.107-.105.175A.637.637 0 0 1 9.5 11h-3a.637.637 0 0 1-.395-.125C6.02 10.807 6 10.742 6 10.7V8.3z"/>
              <path d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm-2 6v1.076c.54.166 1 .597 1 1.224v2.4c0 .816-.781 1.3-1.5 1.3h-3c-.719 0-1.5-.484-1.5-1.3V8.3c0-.627.46-1.058 1-1.224V6a2 2 0 1 1 4 0z"/>
            </svg>
           </div>
          <br>
          <br>

          <style>
            /* CSS */
            .submenu-1 {
              display: none;
            }
          
            .ul li.active > .submenu-1 {
              display: block;
            }
          </style>
          <script>
            // JavaScript
            window.onload = function() {
              var menuItems = document.querySelectorAll('.ul li');
              for (var i = 0; i < menuItems.length; i++) {
                menuItems[i].addEventListener('click', toggleSubmenu);
              }
          
              function toggleSubmenu() {
                var submenu = this.querySelector('.submenu-1');
                if (submenu) {
                  if (submenu.style.display === 'block') {
                    submenu.style.display = 'none';
                  } else {
                    submenu.style.display = 'block';
                  }
                }
                // Add/remove 'active' class to the clicked menu item
                this.classList.toggle('active');
              }
            };
          </script>
          
       
       
     
          <ul class="ul">

            <li>&nbsp;
              <a href="admin.php">&nbsp; <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
              <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L8 2.207l6.646 6.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5Z"/>
              <path d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6Z"/>
            </svg></i>&nbsp;&nbsp;&nbsp;&nbsp; Home</a></li>
            <li>
              <a href="customer.php">&nbsp;<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
              <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7Zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216ZM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z"/>
            </svg>&nbsp;&nbsp;&nbsp;&nbsp; Customer</a></li>
            <li>
              <a href="#">&nbsp;<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bookmark-check-fill" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M2 15.5V2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.74.439L8 13.069l-5.26 2.87A.5.5 0 0 1 2 15.5zm8.854-9.646a.5.5 0 0 0-.708-.708L7.5 7.793 6.354 6.646a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z"/>
              </svg>&nbsp;&nbsp;&nbsp;&nbsp; Booking</a>

              <ul class="submenu-1">

                <li>
                  <a href="All Booking.php">&nbsp;<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-compact-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M6.776 1.553a.5.5 0 0 1 .671.223l3 6a.5.5 0 0 1 0 .448l-3 6a.5.5 0 1 1-.894-.448L9.44 8 6.553 2.224a.5.5 0 0 1 .223-.671z"/>
                  </svg>&nbsp;&nbsp;&nbsp;&nbsp; Room Booking</a></li>
                <li><a href="Edit Booking.php">&nbsp;<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-compact-right" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M6.776 1.553a.5.5 0 0 1 .671.223l3 6a.5.5 0 0 1 0 .448l-3 6a.5.5 0 1 1-.894-.448L9.44 8 6.553 2.224a.5.5 0 0 1 .223-.671z"/>
                </svg>&nbsp;&nbsp;&nbsp;&nbsp; Hall Booking</a></li>
              </ul>
            </li>
            <li>
              <a href="#">&nbsp;<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
                <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5Z"/>
              </svg>&nbsp;&nbsp;&nbsp;&nbsp; Room</a>

              <ul class="submenu-1">
                <li>
                  <a href="All Room.php">&nbsp;<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-compact-right" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M6.776 1.553a.5.5 0 0 1 .671.223l3 6a.5.5 0 0 1 0 .448l-3 6a.5.5 0 1 1-.894-.448L9.44 8 6.553 2.224a.5.5 0 0 1 .223-.671z"/>
                </svg>&nbsp;&nbsp;&nbsp;&nbsp; All Room</a>
              </li>
                <li>
                  <a href="Add Room.php">&nbsp;<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-compact-right" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M6.776 1.553a.5.5 0 0 1 .671.223l3 6a.5.5 0 0 1 0 .448l-3 6a.5.5 0 1 1-.894-.448L9.44 8 6.553 2.224a.5.5 0 0 1 .223-.671z"/>
                </svg>&nbsp;&nbsp;&nbsp;&nbsp; Add Room</a>
              </li>
              </ul>
            </li>
            <li>
              <a href="#">&nbsp;<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-hospital-fill" viewBox="0 0 16 16">
                <path d="M6 0a1 1 0 0 0-1 1v1a1 1 0 0 0-1 1v4H1a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h6v-2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5V16h6a1 1 0 0 0 1-1V8a1 1 0 0 0-1-1h-3V3a1 1 0 0 0-1-1V1a1 1 0 0 0-1-1H6Zm2.5 5.034v1.1l.953-.55.5.867L9 7l.953.55-.5.866-.953-.55v1.1h-1v-1.1l-.953.55-.5-.866L7 7l-.953-.55.5-.866.953.55v-1.1h1ZM2.25 9h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5A.25.25 0 0 1 2 9.75v-.5A.25.25 0 0 1 2.25 9Zm0 2h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5a.25.25 0 0 1-.25-.25v-.5a.25.25 0 0 1 .25-.25ZM2 13.25a.25.25 0 0 1 .25-.25h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5a.25.25 0 0 1-.25-.25v-.5ZM13.25 9h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5a.25.25 0 0 1-.25-.25v-.5a.25.25 0 0 1 .25-.25ZM13 11.25a.25.25 0 0 1 .25-.25h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5a.25.25 0 0 1-.25-.25v-.5Zm.25 1.75h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5a.25.25 0 0 1-.25-.25v-.5a.25.25 0 0 1 .25-.25Z"/>
              </svg>&nbsp;&nbsp;&nbsp;&nbsp; Hall</a>

              <ul class="submenu-1">
                <li>
                  <a href="All Hall.php">&nbsp;<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-compact-right" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M6.776 1.553a.5.5 0 0 1 .671.223l3 6a.5.5 0 0 1 0 .448l-3 6a.5.5 0 1 1-.894-.448L9.44 8 6.553 2.224a.5.5 0 0 1 .223-.671z"/>
                </svg>&nbsp;&nbsp;&nbsp;&nbsp; All Hall</a>
              </li>
                <li>
                  <a href="Add Hall.php">&nbsp;<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-compact-right" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M6.776 1.553a.5.5 0 0 1 .671.223l3 6a.5.5 0 0 1 0 .448l-3 6a.5.5 0 1 1-.894-.448L9.44 8 6.553 2.224a.5.5 0 0 1 .223-.671z"/>
                </svg>&nbsp;&nbsp;&nbsp;&nbsp; Add Hall</a>
              </li>
              
              </ul>
            </li>
            <li><a href="Contacs.php">&nbsp;<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-forward-fill" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511zm10.761.135a.5.5 0 0 1 .708 0l2.5 2.5a.5.5 0 0 1 0 .708l-2.5 2.5a.5.5 0 0 1-.708-.708L14.293 4H9.5a.5.5 0 0 1 0-1h4.793l-1.647-1.646a.5.5 0 0 1 0-.708z"/>
            </svg>&nbsp;&nbsp;&nbsp;&nbsp;  Contact</a></li>
          </ul>
       </div>
    </div>
    
    <div class="container0">
      <br><br>
      <h4>Add Room</h4>
        <div class="container3">
          <style> 
            .input{
              width: 60%;
              margin-left
            }

          </style>

<?php
$flag = '';

if (isset($_POST['submit'])) {
    $Room_No = $_POST['Room_No'];
    $Bed = $_POST['Room_Type'];
    $Capasity = $_POST['Bed_Capacity'];
    $Description = $_POST['Room_Description'];
    $Price = $_POST['Room_Price'];
    $Image = $_POST['Image'];

    $conn = mysqli_connect('localhost', 'root', '', 'hotel_management_system');

    // Prepare the SQL statement using placeholders
    $sql = "INSERT INTO `room`(`Room_No`, `Room_Type`, `Bed_Capacity`, `Room_Description`, `Room_Price`, `Image`) 
            VALUES (?, ?, ?, ?, ?, ?)";

    // Prepare the statement
    $stmt = mysqli_prepare($conn, $sql);

    // Bind the parameters
    mysqli_stmt_bind_param($stmt, 'ssisds', $Room_No, $Bed, $Capasity, $Description, $Price, $Image);

    // Execute the statement
    $result = mysqli_stmt_execute($stmt);

    if ($result) {
        $flag = 'success';
    } else {
        $flag = 'failed';
    }

    // Close the statement and connection
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}
?>
            

<head>
    

    <link rel="stylesheet" href="CSS\admin5.css">
</head>
<body>
          
        <form action="" method="POST" enctype="multipart/form-data">
            <br>
            <label for="" class="label3">Room No :</label> 
              <input type="text" name="Room_No"  required class="input"><br>
  
              <label for="" class="label3">Room Type :</label> 
                   <select name="Bed" id="dropdown" class="input1">
                      <option value=""></option>
                      <option value="Delux">Delux</option>
                      <option value="Super Delux">Super Delux</option>
                      <option value="Double">Double</option>
                      <option value="Single">Single</option>
                    
                   </select><br>
  
              <label for="" class="label3">No Of Bed :</label> 
                   <select name="Capasity" id="dropdown" class="input2">
                      <option value="01">01</option>
                      <option value="02">02</option>
                      <option value="03">03</option>
                    
                   </select><br>
                   <label for="" class="label3">Room Price :</label> 
              <input type="text" name="Price"  required class="input3"> 

              <label for="" class="label4">Room Description :</label> 
              <input type="text" name="Description"  required class="input4"> <br>

             <label for="" class="label4">Add Image :</label>
           

  
  <form id="uploadForm" enctype="multipart/form-data">
  <input type="file" id="imageInput" name="image" accept="image/*" class="input2" onchange="uploadImage()">

  
  </form>
  
  <div id="imagePreview"></div>
  
  <script>
    function uploadImage() {
      var fileInput = document.getElementById('imageInput');
      var file = fileInput.files[0];
      
      var reader = new FileReader();
      
    
      
      reader.readAsDataURL(file);
    }
  </script>


             
              
  
              <input type="submit" class="btn btn-primary" style= margin-left:50%; name="submit" value="ADD">
        
  
          </div>
  
      </div>

      

        </div>

    </div>

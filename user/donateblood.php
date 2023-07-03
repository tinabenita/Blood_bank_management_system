<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Donate Blood</title>
  <link rel="stylesheet" href="donateblood.css" />
  <!-- Font Awesome Cdn Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
  <script src="https://kit.fontawesome.com/2c624fbb65.js" crossorigin="anonymous"></script>
</head>
<body>
  <div class="container">
    <nav>
      <ul>
        <li><a href="#" class="logo">
          <img src="icons8-user-64.png">
          <span class="nav-item">User</span>
        </a></li>
        <li><a href="userdashboard.php">
          <i class="fas fa-solid fa-gauge"></i>
          <span class="nav-item">Dashboard</span>
        </a></li>
        <li><a href="availblood.php">
          <i class="fas fa-database"></i>
          <span class="nav-item">Blood Collection</span>
        </a></li>
        <li><a href="#">
            <i class="fas fa-solid fa-hand-holding-medical"></i>
          <span class="nav-item">Donate Blood</span>
        </a></li>
        <li><a href="donsearchbyrecp.php">
        <i class="fas fa-regular fa-align-justify"></i>
          <span class="nav-item">Recipient Form</span></a></li>

            <li><a href="search.php">
            <i class="fas fa-regular fa-magnifying-glass"></i>  
            <span class="nav-item">Search Donor</span>
        </a></li>
     
        <li><a href="viewannoun.php">
          <i class="fas fa-sharp fa-solid fa-bullhorn"></i>
          <span class="nav-item">View Announcements</span>
        </a></li>
       
        <li><a href="logout.php" class="logout">
          <i class="fas fa-sign-out-alt"></i>
          <span class="nav-item">Log out</span>
        </a></li>
      </ul>
    </nav>


    <section class="main">
      <div class="main-top">
        <h1>USER PANEL</h1>
        
      </div>
      <div class="users">
       
      </div>
      

      <section class="attendance">
        
          
          <div class="containerz">
            <div class="content">
            <h1>DONATE BLOOD</h1>
              <form action="addproc.php" method='post'>
              <?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>    
                <div class="user-details">
                  <div class="input-box">
                    <span class="details">First Name</span>
                    <input type="text" placeholder="Enter your first name" name='fname' required>
                  </div>
                  <div class="input-box">
                    <span class="details">Last Name</span>
                    <input type="text" placeholder="Enter your last name" name='lname' required>
                  </div>
                  <div class="input-box">
                    <span class="details">Date Of Birth</span>
                    <input type="date" placeholder="Enter D.O.B" name='dob' required>
                  </div>
                  <div class="input-box">
                    <span class="details">Blood Group</span>
                    <input type="text" placeholder="Example: AB+,O-" name='bldgrp' required>
                  </div>
                  <div class="input-box">
                    <span class="details">Address</span>
                    <input type="text" placeholder="Full Address" name='address' required>
                  </div>
                  <div class="input-box">
                    <span class="details">Email</span>
                    <input type="email" placeholder="Example: abc123@gmail.com" name='email' required>
                  </div>
                  <div class="input-box">
                    <span class="details">Phone Number</span>
                    <input type="text" placeholder="Enter your number" name='pno' required>
                  </div>
                  
                  
                  <div class="input-box">
                    <span class="details">Blood Quantity</span>
                    <input type="text" placeholder="Example: 1,3" name='qty' required>
                  </div>
                 
                </div>
                <div class="gender-details">
                  <input type="radio" name="gender" value='Male' id="dot-1">
                  <input type="radio" name="gender" value='female' id="dot-2">
                  
                  <span class="gender-title">Gender</span>
                  <div class="category">
                    <label for="dot-1">
                    <span class="dot one"></span>
                    <span class="gender">Male</span>
                  </label>
                  <label for="dot-2">
                    <span class="dot two"></span>
                    <span class="gender">Female</span>
                  </label>
                  
                  </div>
                </div>
                <div class="button">
                  <input type="submit" value="Donate">
                </div>
              </form>
            </div>
          </div>
                     
        
      </section>
      
    </section>
    
  </div>
  

</body>
</html>

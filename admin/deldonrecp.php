<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Delete</title>
  <link rel="stylesheet" href="del.css" />
  <!-- Font Awesome Cdn Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
  <script src="https://kit.fontawesome.com/2c624fbb65.js" crossorigin="anonymous"></script>
</head>
<body>
  <div class="container">
    <nav>
      <ul>
        <li><a href="#" class="logo">
          <img src="icons8-admin-settings-male-30.png">
          <span class="nav-item">Admin</span>
        </a></li>
        <li><a href="admindashboard.php">
          <i class="fas fa-solid fa-gauge"></i>
          <span class="nav-item">Dashboard</span>
        </a></li>
        <li><a href="bloodavail.php">
          <i class="fas fa-database"></i>
          <span class="nav-item">Blood Collection</span>
        </a></li>
        <li><a href="adddonor.php">
         <i class="fas fa-solid fa-user-plus"></i>
          <span class="nav-item">Add Donor</span>
        </a></li>
       
        <li><a href="recpavail.php">
          <i class="fas fa-sharp fa-solid fa-address-card"></i>
          <span class="nav-item">Recipient Details</span>
        </a></li>
        <li><a href="#">
          <i class="fas fa-solid fa-user-minus"></i>
          <span class="nav-item">Delete Details</span>
        </a></li>     
        <li><a href="announc.php">
          <i class="fas fa-sharp fa-solid fa-bullhorn"></i>
          <span class="nav-item">Add Announcements</span>
        </a></li>
       
        <li><a href="logout.php" class="logout">
          <i class="fas fa-sign-out-alt"></i>
          <span class="nav-item">Log out</span>
        </a></li>
      </ul>
    </nav>
    <section class="main">
        <div class="main-top">
          <h1>ADMIN PANEL</h1>
          
        </div>
       
        <section class="attendance1">
        
          
        <div class="containerz1">
          <div class="content">
          <h1>DELETE DONOR</h1>
            <form action="deldonpros.php" method='post'>
              
<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>   
              <div class="user-details">
                <div class="input-box">
                  <span class="details">DONOR ID</span>
                  <input type="text" placeholder="Enter your donor ID" name='dnrid' required>
                </div>
               
              <div class="button">
                <input type="submit" value="DELETE DONOR">
              </div>
            </form>
          </div>
        </div>
                   
      
    </section>
    <section class="attendance">
        
          
        <div class="containerz">
          <div class="content">
          <h1>DELETE RECIPIENT</h1>
            <form action="delrecppros.php" method='post'>
              
<?php if (isset($_GET['error2'])) { ?>
     		<p class="error"><?php echo $_GET['error2']; ?></p>
     	<?php } ?>   
              <div class="user-details">
                <div class="input-box">
                  <span class="details">RECIPIENT ID</span>
                  <input type="text" placeholder="Enter your recipient ID" name='recid' required>
                </div>
               
              <div class="button">
                <input type="submit" value="DELETE RECIPIENT">
              </div>
            </form>
          </div>
        </div>
                   
      
    </section>
    <section class="attendance2">
        
          
        <div class="containerz2">
          <div class="content">
          <h1>DELETE ANNOUNCEMENT</h1>
            <form action="delannpros.php" method='post'>
              
<?php if (isset($_GET['error3'])) { ?>
     		<p class="error"><?php echo $_GET['error3']; ?></p>
     	<?php } ?>   
              <div class="user-details">
                <div class="input-box">
                  <span class="details">ANNOUNCEMENT ID</span>
                  <input type="text" placeholder="Enter your announcement ID/S.NO" name='ancid' required>
                </div>
               
              <div class="button">
                <input type="submit" value="DELETE ANNOUNCEMENT">
              </div>
            </form>
          </div>
        </div>
                   
      
    </section>
      </section>
    </div>
  
  </body>
  </html>
  
<?php
// include 'dbcon.php'
require_once('dbcon.php');
$query="SELECT * FROM ANNOUNCEMENT";
$result=mysqli_query($con,$query);
?>
<?php
$stmt=$con->prepare("SELECT * FROM ANNOUNCEMENT");
    $stmt->execute();
    $stmt_result=$stmt->get_result();
    if($stmt_result->num_rows>0)
      $data=$stmt_result->fetch_assoc();
      else{
       
     echo "<h2>OOPS!<br></h2>"."<h2>NO Annoucements</h2>";

     exit();

      }

    ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Announcements</title>
  <link rel="stylesheet" href="announcss.css" />
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
        <li><a href="deldonrecp.php">
          <i class="fas fa-solid fa-user-minus"></i>
          <span class="nav-item">Delete Details</span>
        </a></li>     
        <li><a href="#">
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
       
        <section class="attendance">
          <div class="attendance-list">
            <h1>ANNOUNCEMENTS</h1>
            <table class="table">
              <thead>
                <tr>
                  <th>S.NO</th>
                  <th>EVENT DATE</th>
                  <th>ANNOUNCEMENT</th>               
                  <th>REQUIREMENTS</th>
                  <th>ORGANIZER</th>
                  <th>BLOOD NEED</th>        
                </tr>
              </thead>


                
                <tbody>
                <?php 
                  while($row=mysqli_fetch_assoc($result))
                  {
                  ?>
                <tr>
               

                  <td><?php echo $row['ANNOUNCE_ID'];?></td>
                  <td><?php echo $row['EVENT_DATE'];?></td>
                  <td><?php echo $row['ANNOUNCEMENT'];?></td>
                  <td><?php echo $row['REQUIREMENTS'];?></td>
                  <td><?php echo $row['ORGANIZER'];?></td>
                  <td><?php echo $row['BLOOD_NEED'];?></td>
                 
               

                 
                </tr>
                <?php
                  }
                  ?>                    
                </tbody>
            </table>
          </div>
        </section>
        <br>
        <br>        
          <div class="containerz">           
            <div class="content">
              <form action="announcprocess.php" method='post'>
              <h1>ADD ANNOUNCEMENT</h1>
              <?php if (isset($_GET['success'])) { ?>
     		      <p class="error"><?php echo $_GET['success']; ?></p>
     	        <?php } ?>    
                <div class="user-details">
                  <div class="input-box">
                    <span class="details">Event Date</span>
                    <input type="date" name='evntdate' required>
                  </div>
                  <div class="input-box">
                    <span class="details">Announcement</span>
                    <input type="text" placeholder="Details" name='ann' required>
                  </div>
                  <div class="input-box">
                    <span class="details">Requirements</span>
                    <input type="text" placeholder="Enter Requirements" name='req' required>
                  </div>
                  <div class="input-box">
                    <span class="details">Organizer</span>
                    <input type="text" placeholder="Organizer Name" name='organizer' required>
                  </div>
                  <div class="input-box">
                    <span class="details">Blood Need</span>
                    <input type="text" placeholder="Enter Details" name='bldneed' required>
                  </div>
                  
                </div>
                <div class="button">
                  <input type="submit" value="Add Announcement">
                </div>
              </form>
      </section>
    </div>
  
  </body>
  </html>

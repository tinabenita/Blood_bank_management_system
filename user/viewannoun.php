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
  <title>Announcement</title>
  <link rel="stylesheet" href="usrdash.css" />
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
        <li><a href="donateblood.php">
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
      
        <li><a href="#">
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
      </section>
    </div>
  
  </body>
  </html>
  
<?php 
  session_start();
  
?>
<?php
// include 'dbcon.php'
require_once('dbcon.php');
$query="SELECT * FROM DONOR";
$result=mysqli_query($con,$query);
?>
<?php
$stmt=$con->prepare("SELECT * FROM DONOR");
    $stmt->execute();
    $stmt_result=$stmt->get_result();
    if($stmt_result->num_rows>0)
      $data=$stmt_result->fetch_assoc();
      else{
       
     echo "<h2>Collection Is Empty</h2>";

     exit();

      }

    ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Donor Details</title>
  <link rel="stylesheet" href="stylee.css" />
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
        <li><a href="#">
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
        <li><a href="announc.php">
          <i class="fas fa-sharp fa-solid fa-bullhorn"></i>
          <span class="nav-item">Add Announcements</span>
        </a></li>
        <!-- <li><a href="#">
          <i class="fas fa-solid fa-clipboard-list"></i>
          <span class="nav-item">Campaigns</span>
        </a></li> -->
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
            <h1>BLOOD AVAILABE / DONOR DETAILS</h1>
            <table class="table">
              <thead>
                <tr>
                  <th>S.NO</th> 
                  <th>DONOR ID</th>
                  <th>NAME</th>
                  <th>GENDER</th>
                  <th>D.O.B</th>
                  <th>QUANTITY<br>(units)</th>
                  <th>BLOOD GROUP</th>
                  <th>ADDRESS</th>
                  <!-- <th>EMAIL</th> -->
                  <th>CONTACT</th>
                  <th>USERNAME</th>
                  <th>PASSWORD</th>                 
                </tr>
              </thead>


                
                <tbody>
                <?php 
                  $counter=0;
                  while($row=mysqli_fetch_assoc($result))
                  {
                    $counter=$counter+1;
                  ?>
                <tr>
               
                <td><?php echo $counter;?></td>
                  <td><?php echo $row['DONOR_ID'];?></td>
                  <td><?php echo $row['FNAME']." ".$row['LNAME'];?></td>
                  <td><?php echo $row['GENDER'];?></td>
                  <td><?php echo $row['DOB'];?></td>
                  <td><?php echo $row['QUANTITY'];?></td>
                  <td><?php echo $row['BLOOD_GRP'];?></td>
                  <td><?php echo $row['ADDRESS'];?></td>
                  <!-- <td><?php echo $row['EMAIL'];?></td> -->
                  <td><?php echo $row['CONTACT'];?></td>
                  <td><?php echo $row['USERNAME'];?></td>
                  <td><?php echo $row['PASSWORD'];?></td>
               

                 
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
  
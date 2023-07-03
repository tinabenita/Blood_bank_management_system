<?php 
  session_start();
  
?>
<?php include 'dbcon.php'?>

<?php
  if(isset($_SESSION['username']) && isset($_SESSION['password'])){
      $username=$_SESSION['username'];
      $password=$_SESSION['password'];
  }else{
    $username=$_POST['username'];
    $password=$_POST['password'];
  }
    $stmt=$con->prepare("SELECT * FROM ADMIN WHERE USERNAME=?");
    $stmt->bind_param("s",$username);
    $stmt->execute();
    $stmt_result=$stmt->get_result();
    if($stmt_result->num_rows>0){
      $data=$stmt_result->fetch_assoc();
      if($data['PASSWORD']===$password){
        $_SESSION['username']=$username;
        $_SESSION['password']=$password;
        
         

      }else{
        header("Location: adminlogin.php?error=Inavlid username or password");
     echo "<h2>Inavlid username or password</h2>";

     exit();

      }
      
    }
    else{
     header("Location: adminlogin.php?error=Inavlid username or password");
     echo "<h2>Inavlid username or password</h2>";

     exit();

    }

  
  
 
?>
<?php
//  $query=$con->prepare('SELECT * FROM USERS WHERE USERNAME=?');
//  $query->bind_param("s",$username);
//     $query->execute();
//     $stmt_result=$stmt->get_result();
//     $data1=$stmt_result->fetch_assoc();
//      $_SESSION['userid']=$data1['USER_ID'];
     
 ?>
 



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Admin Dashboard</title>
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
        <li><a href="#">
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
      <div class="users">
        <div class="card">
          <img src="icons8-blood-bag-64.png">
          <h4>AVAILABLE BLOOD / DONOR DETAILS </h4>
          
          <button onclick="location.href='bloodavail.php'">View Details</button>
        </div>
        <div class="card">
          <img src="icons8-user-groups-50.png">
          <h4>RECIPIENT DETAILS</h4>
          
          <button onclick="location.href='recpavail.php'">View Recipient Details</button>
        </div>
        <div class="card">
          <img src="icons8-announcement-51.png">
          <h4>ANNOUNCEMENTS</h4>
       
          <button onclick="location.href='announc.php'">View Announcements</button>
        </div>
        <div class="card">
          <img src="icons8-add-administrator-50.png">
          <h4>ADD DONOR</h4>
          
          <button onclick="location.href='adddonor.php'">Add Donor</button>
        </div>
      </div>

        </div>
      </section>
    </section>
  </div>

</body>
</html>

<?php 
  session_start();
  
?>
<?php include 'dbcon.php'?>
<?php
  if(isset($_SESSION['usernameU']) && isset($_SESSION['passwordU'])){
      $username=$_SESSION['usernameU'];
      $password=$_SESSION['passwordU'];
  }else{
    $username=$_POST['username'];
    $password=$_POST['password'];
  }
    $stmt=$con->prepare("SELECT * FROM USERS WHERE USERNAME=?");
    $stmt->bind_param("s",$username);
    $stmt->execute();
    $stmt_result=$stmt->get_result();
    if($stmt_result->num_rows===1){
      $data=$stmt_result->fetch_assoc();
      if($data['PASSWORD']===$password){
        $_SESSION['usernameU']=$username;
        $_SESSION['passwordU']=$password;
        $_SESSION['usrid']=$data['USER_ID'];
                        

      }else{
        header("Location: usrlogin.php?error=Inavlid username or password");
     echo "<h2>Inavlid username or password</h2>";

     exit();

      }
      
    }
    else{
     header("Location: usrlogin.php?error=Inavlid username or password");
     echo "<h2>Inavlid username or password</h2>";

     exit();

    }

  
  
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>User Dashboard</title>
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
        <li><a href="#">
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
        <div class="card">
          <img src="icons8-blood-bag-64.png">
          <h4>AVAILABE BLOOD</h4>
          <!-- <p>Ui designer</p> -->
          <!-- <div class="per">
            <table>
              <tr>
                <td><span>85%</span></td>
                <td><span>87%</span></td>
              </tr>
              <tr>
                <td>Month</td>
                <td>Year</td>
              </tr>
            </table>
          </div> -->
          <button onclick="location.href='availblood.php'">View Available Blood</button>
        </div>
        <div class="card">
          <img src="icons8-blood-donation-65.png">
          <h4>DONATE BLOOD</h4>
          <!-- <p>Progammer</p> -->
          <!-- <div class="per">
            <table>
              <tr>
                <td><span>82%</span></td>
                <td><span>85%</span></td>
              </tr>
              <tr>
                <td>Month</td>
                <td>Year</td>
              </tr> -->
            <!-- </table>
          </div> -->
          <button onclick="location.href='donateblood.php'">Donate Blood</button>
        </div>
        <div class="card">
          <img src="icons8-search-64.png">
          <h4>REQUEST BLOOD</h4>
          <!-- <p>tester</p> -->
          <!-- <div class="per">
            <table>
              <tr>
                <td><span>94%</span></td>
                <td><span>92%</span></td>
              </tr>
              <tr>
                <td>Month</td>
                <td>Year</td>
              </tr>
            </table>
          </div> -->
          <button onclick="location.href='search.php'">Request Blood</button>
        </div>
        <div class="card">
          <img src="icons8-announcement-64.png">
          <h4>ANNOUNCEMENTS</h4>
          <!-- <p>Ui designer</p> -->
          <!-- <div class="per">
            <table>
              <tr>
                <td><span>85%</span></td>
                <td><span>82%</span></td>
              </tr>
              <tr>
                <td>Month</td>
                <td>Year</td>
              </tr>
            </table>
          </div> -->
          <button onclick="location.href='viewannoun.php'">View Announcements</button>
        </div>
      </div>
      
<!-- 
      <section class="attendance">
        <div class="attendance-list">
          <h1>Attendance List</h1>
          <table class="table">
            <thead>
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Depart</th>
                <th>Date</th>
                <th>Join Time</th>
                <th>Logout Time</th>
                <th>Details</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>01</td>
                <td>Sam David</td>
                <td>Design</td>
                <td>03-24-22</td>
                <td>8:00AM</td>
                <td>3:00PM</td>
                <td><button>View</button></td>
              </tr>
              <tr class="active">
                <td>02</td>
                <td>Balbina Kherr</td>
                <td>Coding</td>
                <td>03-24-22</td>
                <td>9:00AM</td>
                <td>4:00PM</td>
                <td><button>View</button></td>
              </tr>
              <tr>
                <td>03</td>
                <td>Badan John</td>
                <td>testing</td>
                <td>03-24-22</td>
                <td>8:00AM</td>
                <td>3:00PM</td>
                <td><button>View</button></td>
              </tr>
              <tr>
                <td>04</td>
                <td>Sara David</td>
                <td>Design</td>
                <td>03-24-22</td>
                <td>8:00AM</td>
                <td>3:00PM</td>
                <td><button>View</button></td>
              </tr> -->
              <!-- <tr >
                <td>05</td>
                <td>Salina</td>
                <td>Coding</td>
                <td>03-24-22</td>
                <td>9:00AM</td>
                <td>4:00PM</td>
                <td><button>View</button></td>
              </tr>
              <tr >
                <td>06</td>
                <td>Tara Smith</td>
                <td>Testing</td>
                <td>03-24-22</td>
                <td>9:00AM</td>
                <td>4:00PM</td>
                <td><button>View</button></td>
              </tr> -->
            </tbody>
          </table>
        </div>
      </section>
      
    </section>
  </div>

</body>
</html>

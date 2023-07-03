<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <title>User Login</title>
    <link rel="stylesheet" href="usrlogincss.css">
    <script src="https://kit.fontawesome.com/2c624fbb65.js" crossorigin="anonymous"></script>
</head>
<body>
    <ul class="left">
        <li><a href="../index.php"><i class="fa-solid fa-house"></i> Home</a></li>
    </ul>
      <div class="login-form">
        <h2>USER LOGIN</h2>
        <form action="userdashboard.php" method="post">
        <?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
            <div class="input-field">
                <i class="fas fa-user"></i>
                    <input type="text" placeholder="Username" id="username" required name="username">
            </div>
            <div class="input-field">
                <i class="fas fa-key"></i>
                    <input type="password" placeholder="Password" id="password" required name="password">
            </div>
            <div class="input-field">                
                <input type="submit" class="hi" value="Login">
                
        </div>
         
            <!-- <button type="button" onclick="location.href='userdashboard.php'">Login</button> -->
            <!-- <button>Login</button> -->
            <div class="extra">
                <a href="signup.php">New User?</a>
                <!-- <a href="">Forgot Password?</a> -->
            </div>
        
        </form>
    </div>    
</body>
</html>
 

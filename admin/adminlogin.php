<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="adminlogincss.css">
    <script src="https://kit.fontawesome.com/2c624fbb65.js" crossorigin="anonymous"></script>
</head>
<body>
    <ul class="left">
        <li><a href="../index.php"><i class="fa-solid fa-house"></i> Home</a></li>
    </ul>
    <div class="login-form">
    
        <h2>ADMIN LOGIN</h2>
        <form action="admindashboard.php" method="post">
        <?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>    
            <div class="input-field">
                <i class="fas fa-user"></i>
                    <input type="text" placeholder="Username" id="username" name="username" required >
            </div>
            <div class="input-field">
                <i class="fas fa-lock"></i>
                    <input type="password" placeholder="Password" id="password" name="password" required  >
            </div>
            <div class="input-field">
                
                    <input type="submit" class="hi" value="Login">
                    
            </div>
            <!-- <button type="button" onclick="location.href='admindashboard.php'">Login</button> -->
            <!-- <button>Login</button> -->
        </form>
    </div>
    
</body>
</html>
 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Sign Up Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" /> 
</head>
<body>
    <div class="container">
        <h1 class="form-title">SIGN UP FORM</h1>
        <form action="signupproc.php" method='post'>
        <?php if (isset($_GET['err'])) { ?>
     		<p class="error"><?php echo $_GET['err']; ?></p>
     	<?php } ?>    
           
                <div class="main-user-info">
                    <div class="user-input-box">
                        <label for="username">Username</label>
                        <input type="text"
                                id="username"
                                name="username"
                                placeholder="Enter Full Username" required />
                    </div> 
                </div>
             
                <div class="main-user-info">
                    <div class="user-input-box">
                        <label for="password">Password</label>
                        <input type="password"
                                id="password"
                                name="password"
                                placeholder="Enter Password" required/>
                </div>
                <div class="main-user-info">
                    <div class="user-input-box">
                        <label for="confirmPassword">Confirm Password</label>
                        <input type="password"
                                id="confirmPassword"
                                name="cnfpassword"
                                placeholder="Confirm Password" required/>
                </div>
            </div>
         
            <div class="form-submit-btn">
                <input type="submit" value="Register">
               
            </div>
                      
        </form>
        
    </div>
  
</body>
</html>
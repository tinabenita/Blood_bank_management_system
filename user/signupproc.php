<?php

include 'dbcon.php';
// require_once('dbcon.php')
?>
<?php
    $usrname=$_POST['username'];
    $pass=$_POST['password'];
    $cnfpass=$_POST['cnfpassword'];

?>
<?php
    
    $stmt=$con->prepare("SELECT * FROM USERS WHERE USERNAME=?");
    $stmt->bind_param("s",$usrname);
    $stmt->execute();
    $stmt_result=$stmt->get_result();
    $data=$stmt_result->fetch_assoc();
    
    if($stmt_result->num_rows>0){
        header("Location: signup.php?err=Username already exists!");
        exit();
    }
    if($pass!=$cnfpass){
        header("Location: signup.php?err=Password doesn't match!");
        exit();
    }else{
        $MAX='SELECT MAX(USER_ID) FROM USERS';
        $ini=mysqli_query($con,$MAX);
        $ini=mysqli_fetch_assoc($ini);
        
       
        if($ini['MAX(USER_ID)']==""){
            $id=101201;
        }else{
            $id=$ini['MAX(USER_ID)']+1;
        }

        $query="INSERT INTO USERS VALUES('$id','$usrname','$pass')";
        $result=mysqli_query($con,$query);
        if($result){
            header("Location: usrlogin.php?error=User registered successfully ");
            exit();
        }

        




    }

?>
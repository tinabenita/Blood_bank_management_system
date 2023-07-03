<?php
session_start();

?>
<?php
include 'dbcon.php'

?>

<?php
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $dob=$_POST['dob'];
    $bldgrp=$_POST['bldgrp'];
    $add=$_POST['address'];
    $email=$_POST['email'];
    $pno=$_POST['pno'];
    $qty=$_POST['qty'];
    $gend=$_POST['gender'];
    $usrname=$_POST['usrname'];
    $pass=$_POST['pass'];

?>
<?php
    
    $stmt9=$con->prepare("SELECT * FROM USERS WHERE USERNAME=?");
    $stmt9->bind_param("s",$usrname);
    $stmt9->execute();
    $stmt_result9=$stmt9->get_result();
    $data=$stmt_result9->fetch_assoc();
    
    if($stmt_result9->num_rows>0){
        header("Location: adddonor.php?error=Username already exists!");
        exit();
    }
    
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
   
    

    $stmt8=$con->prepare("SELECT * FROM DONOR WHERE DONOR_ID=?");
    $stmt8->bind_param("i",$id);
    $stmt8->execute();
    $stmt_result8=$stmt8->get_result();
    $data8=$stmt_result8->fetch_assoc();
    
    if($stmt_result8->num_rows>0){
        header("Location: adddonor.php?error=Donor already exists!");
        exit();
    }
    else{
        $dnrid=$id;
        $usr=$usrname;
        $pass=$pass;
            $query="INSERT INTO DONOR VALUES('$dnrid','$fname','$lname','$gend','$dob','$qty','$bldgrp','$email','$add','$pno','$usr','$pass')";
        $result=mysqli_query($con,$query);
        if($result){
            header("Location: adddonor.php?error=Donor Added ");
            exit();
        }else{
            header("Location: adddonor.php.php?error=Error Occured!");
            exit();
        }

    }

        




    

?>
<?php

    
$MAX='SELECT MAX(DONOR_ID) FROM DONOR';
$ini=mysqli_query($con,$MAX);
$ini=mysqli_fetch_assoc($ini);


if($ini['MAX(DONOR_ID)']==""){
    $id=101201;
}else{
    $id=$ini['MAX(DONOR_ID)']+1;
}
echo $id;
echo $_SESSION['userid'];

?>
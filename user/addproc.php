<?php
session_start();
include 'dbcon.php'
// require_once('dbcon.php')


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

?>
<?php
    

    $stmt=$con->prepare("SELECT * FROM DONOR WHERE DONOR_ID=?");
    $stmt->bind_param("i",$_SESSION['usrid']);
    $stmt->execute();
    $stmt_result=$stmt->get_result();
    $data=$stmt_result->fetch_assoc();
    
    if($stmt_result->num_rows>0){
        header("Location: donateblood.php?error=Donor already exists!");
        exit();
    }
    else{
        $dnrid=$_SESSION['usrid'];
        $usr=$_SESSION['usernameU'];
        $pass=$_SESSION['passwordU'];
            $query="INSERT INTO DONOR VALUES('$dnrid','$fname','$lname','$gend','$dob','$qty','$bldgrp','$email','$add','$pno','$usr','$pass')";
        $result=mysqli_query($con,$query);
        if($result){
            header("Location: donateblood.php?error=Donor Added ");
            exit();
        }else{
            header("Location: donateblood.php?error=Error Occured!");
            exit();
        }

    }







?>
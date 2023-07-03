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
  $gend=$_POST['gender'];

?>
<?php
    


    $stmt=$con->prepare("SELECT * FROM RECIPIENT WHERE RECPT_ID=?");
    $stmt->bind_param("i",$_SESSION['usrid']);
    $stmt->execute();
    $stmt_result=$stmt->get_result();
    $data=$stmt_result->fetch_assoc();
    
    if($stmt_result->num_rows>0){
        header("Location: donsearchbyrecp.php?error=Recipient already exists!");
        exit();
    }
    else{
        $recrid=$_SESSION['usrid'];
        $usr=$_SESSION['usernameU'];
        $pass=$_SESSION['passwordU'];
            $query="INSERT INTO RECIPIENT VALUES('$recrid','$fname','$lname','$gend','$dob','$bldgrp','$email','$add','$pno','$usr','$pass')";
        $result=mysqli_query($con,$query);
        if($result){
            header("Location: donsearchbyrecp.php?error=Recipient Added ");
            exit();
        }else{
            header("Location: donsearchbyrecp.php?error=Error Occured!");
            exit();
        }

    }







?>
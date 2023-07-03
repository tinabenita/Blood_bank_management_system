<?php
include 'dbcon.php';
?>
<?php
    $dnrid=$_POST['dnrid'];
?>
<?php

$stmt5=$con->prepare("SELECT * FROM DONOR WHERE DONOR_ID=?");
$stmt5->bind_param("i",$dnrid);
$stmt5->execute();
$stmt_result5=$stmt5->get_result();
$data5=$stmt_result5->fetch_assoc();

if($stmt_result5->num_rows>0)
{
 $stm=$con->prepare("DELETE FROM DONOR WHERE DONOR_ID=?");
 $stm->bind_param("i",$dnrid);
 $stm->execute();
 $stm_result=$stm->get_result();

    header("Location: deldonrecp.php?error=Donor Deleted");
    echo "<h2>Inavlid username or password</h2>";

    exit();
}else{
    header("Location: deldonrecp.php?error=Error!");
    echo "<h2>Inavlid username or password</h2>";

    exit();
 }

?>
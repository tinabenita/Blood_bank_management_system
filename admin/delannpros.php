<?php
include 'dbcon.php';
?>
<?php
    $aid=$_POST['ancid'];
?>
<?php

$stmt7=$con->prepare("SELECT * FROM ANNOUNCEMENT WHERE ANNOUNCE_ID=?");
$stmt7->bind_param("i",$aid);
$stmt7->execute();
$stmt_result7=$stmt7->get_result();
$data7=$stmt_result7->fetch_assoc();

if($stmt_result7->num_rows>0)
{
 $stm2=$con->prepare("DELETE FROM ANNOUNCEMENT WHERE ANNOUNCE_ID=?");
 $stm2->bind_param("i",$aid);
 $stm2->execute();
 $stm_result2=$stm2->get_result();

    header("Location: deldonrecp.php?error3=Announcement Deleted");
    echo "<h2>Inavlid username or password</h2>";

    exit();
}else{
    header("Location: deldonrecp.php?error3=Error!");
    echo "<h2>Inavlid username or password</h2>";

    exit();
 }

?>
<?php
include 'dbcon.php';
?>
<?php
    $rid=$_POST['recid'];
?>
<?php

$stmt6=$con->prepare("SELECT * FROM RECIPIENT WHERE RECPT_ID=?");
$stmt6->bind_param("i",$rid);
$stmt6->execute();
$stmt_result6=$stmt6->get_result();
$data6=$stmt_result6->fetch_assoc();

if($stmt_result6->num_rows>0)
{
 $stm1=$con->prepare("DELETE FROM RECIPIENT WHERE RECPT_ID=?");
 $stm1->bind_param("i",$rid);
 $stm1->execute();
 $stm_result1=$stm1->get_result();

    header("Location: deldonrecp.php?error2=Recipient Deleted");
    echo "<h2>Inavlid username or password</h2>";

    exit();
}else{
    header("Location: deldonrecp.php?error2=Error!");
    echo "<h2>Inavlid username or password</h2>";

    exit();
 }

?>
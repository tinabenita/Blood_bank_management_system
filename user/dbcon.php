<?php
$con=new mysqli("localhost","root","","blood_sql");
  if($con->connect_error){
    die("fail to connect : ".$con->connect_error);
  }
?>
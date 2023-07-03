<?php
include 'dbcon.php'
// require_once('dbcon.php')


?>
<?php
    // $evntdate=date('Y-m-d',strtotime($_POST['evntdate']));
    $evntdate=$_POST['evntdate'];
    $annc=$_POST['ann'];
    $req=$_POST['req'];
    $org=$_POST['organizer'];
    $need=$_POST['bldneed'];
   



?>
<?php
        $MAX='SELECT MAX(ANNOUNCE_ID) FROM ANNOUNCEMENT';
        $ini=mysqli_query($con,$MAX);
        $ini=mysqli_fetch_assoc($ini);
        
       
        if($ini['MAX(ANNOUNCE_ID)']==""){
            $id=1;
        }else{
            $id=$ini['MAX(ANNOUNCE_ID)']+1;
        }

       
        


        $query="INSERT INTO ANNOUNCEMENT VALUES('$id','$evntdate','$annc','$req','$org','$need')";
        $result=mysqli_query($con,$query);
        if($result){
            header("Location: announc.php?success=Value Successfully Inserted Into Table");
            exit();
        }else{
            echo "fail";
        }
        
 ?>

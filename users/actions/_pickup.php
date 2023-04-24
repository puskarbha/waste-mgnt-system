<?php

include('../partials/connect.php');
$userid=$_POST['userid'];
$type=$_POST['wasteType'];
$eWeight=$_POST['quantity'];
$location=$_POST['location'];
$date=$_POST['date'];
$time=$_POST['time'];

$sql="INSERT INTO `pickup` (`user_id`, `type`, `weight` ,`location`,`date`,`time`)
VALUES ('$userid','$type', '$eWeight','$location','$date','$time')";

$result=mysqli_query($conn,$sql);
if($result){
    echo' <script> 
            alert("You will be on your door at $time on $date");
            window.location="../user.php";
            </script>';
}
else{
    echo"Registration unsuccessful.";
    die("Connection failed: " . mysqli_connect_error());

}
?>



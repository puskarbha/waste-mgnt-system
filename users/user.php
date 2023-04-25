<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/style.css">
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<style>
.container {
    display: grid;
    grid-template-columns: repeat(4, auto);
    grid-gap: 20px;
}

.card {
    margin: 0;
}
</style>

    <title>User</title>
</head>
<body>
<?php include 'components/user_header.php'; 
?>
   
    <div class="userpage">
    <div>
        <img src="../image/waste.png" alt="" width="700px">
        </div>
        <div>
           <?php if(!isset($_SESSION['loggedIn'])){?>
       <h2>Please Login to your account or Sign up if you are new </h2><br><br>
       <?php } ?>
<?php

include('./partials/connect.php');
if(isset($_SESSION['loggedIn']) && $_SESSION['loggedIn']==true){
    echo'<p >Welcome '.$_SESSION['username']. ' </p>
    
    <a href="partials/pickupSchedule.php">Schedule new picup</a><br>
    <br>
       <table>
    <tr><tttle>Your orders</tttle></tr>
    <tr>
        <th>Type</th>
        <th>Weight</th>
        <th>location</th>
        <th>Pickup Date</th>
        <th>Status</th>
    </tr>
    
    ';
$id=$_SESSION['id'];
    $sql = "SELECT * FROM `pickup` where user_id='$id'";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)<=0)
    {
        echo"No waste scheduled";
    }
    while($row = mysqli_fetch_assoc($result)){
        $orderTime=$row["order_time"];
        $type = $row['type'];
        $weight = $row["weight"];
        $location=$row["location"];
        $pickup_date=$row["date"];
        $status=$row["status"];



    echo '
    <tr>
     <td>'.$type.'</td>
     <td>'.$weight.'</td>
     <td>'.$location.'</td>
     <td>'.$pickup_date.'</td>
     <td>'.$status.'</td>
    </tr>
    ';
        }echo'</table>' ;
}
else{
echo' <a href="partials/loginPage.php">Log In</a>

    <a href="partials/signupPage.php">Sign Up</a><br>';

}
?>
 </div>
        
    
        </div>
<!-- Notices panel -->
<h1 align="center">Weekly notices</h1>
<div class='container'>
    
<?php
    $sql = "SELECT * FROM `notice` ";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)<=0)
    {
        echo"No notice  found";
    }
    while($row = mysqli_fetch_assoc($result))
    {
        $title=$row['title'];
        $desc=$row['description'];
        $image=$row['image'];
       
        
        echo'
        <div class="card" style="width: 18rem;" >
        <img class="card-img-top" src="../admins/partials/image/'.$image.'" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">'.$title.'</h5>
          <p class="card-text">'.substr($desc,0,90).'....</p>
          <a href="#" class="btn btn-primary">See more</a>
        </div>
      </div>';


         
    }

    ?>
</div>
</body>
</html>
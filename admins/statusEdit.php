<?php 
session_start();
if(!isset($_SESSION['user']))
{
    header('Location:login.php');
}
?>
<?php 
include('layout/header.php');?>
<div class="row">
    <?php include('layout/sidebar.php');?>
    <?php include('./partials/connect.php'); ?>
    <div class="col-9 mt-2">
     <?php 
     if($_SERVER["REQUEST_METHOD"]=="POST")
     {
       $status=$_POST['status'];
       $pickupid=$_POST['pickupid'];
       $sql="UPDATE `pickup` SET `status` = '$status' WHERE `pickup_id` = '$pickupid' ";
       $result=mysqli_query($conn,$sql);
       if($result){
           echo' <script> 
               alert("Update successful");
               window.location="./pickup.php";
               </script>';
       }
    }
     if(isset($_GET['pid']))
     { ?>
        
        <form style="background-color:aquamarine;" action="#" method="POST">
            <input type="hidden"  name="pickupid" value=<?php echo $_GET['pid'] ?>>
            <label for="wasteType"><h2>Waste Type:</h2></label><br>
            <select name="status" id="status" value=<?php echo $row['status']; ?>>
                <option value="unverified">Unverified</option>
                <option value="verified">verified</option>
                <option value="picked">picked</option>
                <option value="cancelled">cancelled</option>
            </select><br><br>
    
            <button type="submit" name="submit">Submit</button>
        </form>
       
        <?php      
      } 
        
    
    ?>



<?php include('layout/footer.php'); ?>
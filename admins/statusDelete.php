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
   
     if(isset($_GET['pid']))
     { 
        $pid=$_GET['pid'];
        $sql="DELETE FROM pickup WHERE pickup_id = '$pid' ";
        $result=mysqli_query($conn,$sql);
       if($result){
           echo' <script> 
               alert("Deleted successfully");
               window.location="./pickup.php";
               </script>';
       }
     }
    ?>



<?php include('layout/footer.php'); ?>
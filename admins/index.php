<?php 
session_start();
if(!isset($_SESSION['user']))
{
    header('Location:login.php');
}
?>
<?php include('layout/header.php');
 include('./partials/connect.php'); ?>
<div class="row">
<?php include('layout/sidebar.php'); ?>
     <div class="col-9 pt-5 ps-5">
        <div class="row ">
        <div class="card  mb-3 col-3  bg-primary text-white text-center ms-3">
        <div class="card-header h3 ">Total Post</div>
        <div class="card-body ">
        <?php
           
            $sql="SELECT * FROM notice";
            $sql_run=mysqli_query($conn,$sql);
            if($category_total=mysqli_num_rows($sql_run)){
                echo' <h5 class="card-title">'.$category_total.'</h5>';
            }else{
                echo '<h4 class="card-title">No Data </h4>';
            }
            ?>
        </div>
        <div class="card-footer h6 "><a href="editnotice.php" class="text-light text-decoration-none ">View Details</a></div>
        </div>
        
        <div class="card  mb-3 col-3 bg-success text-white text-center ms-5">
        <div class="card-header h3 ">Pickup left
        </div>
        <div class="card-body ">
            <?php
          
            $sql="SELECT * FROM pickup WHERE status ='Unverified'";
            $sql_run=mysqli_query($conn,$sql);
            if($pickup_total=mysqli_num_rows($sql_run)){
                echo' <h5 class="card-title">'.$pickup_total.'</h5>';
            }else{
                echo '<h4 class="card-title">No Data </h4>';
            }
            ?>
           
        </div>
        <div class="card-footer h6 "><a href="category.php" class="text-light text-decoration-none ">View Details</a></div>
        </div>

        <div class="card  mb-3 col-3 bg-primary text-white text-center ms-5">
        <div class="card-header h3 ">Total Users</div>
        <div class="card-body ">
        <?php
            
            $sql="SELECT * FROM user";
            $sql_run=mysqli_query($conn,$sql);
            if($user_total=mysqli_num_rows($sql_run)){
                echo' <h5 class="card-title">'.$user_total.'</h5>';
            }else{
                echo '<h4 class="card-title">No Data </h4>';
            }
            ?>
        </div>
        <div class="card-footer h6 "><a href="comment.php" class="text-light text-decoration-none ">View Details</a></div>
        </div>

</div>
</div>
<?php include('layout/footer.php'); ?>


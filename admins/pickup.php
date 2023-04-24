<?php 
session_start();
if(!isset($_SESSION['user']))
{
    header('Location:index.php');
}?>
<!DOCTYPE html>
<html>
<head>
	<title>Pickup orders</title>
	<style>
		table {
			border-collapse: collapse;
			width: 100%;
		}
		th, td {
			text-align: left;
			padding: 8px;
		}
		tr:nth-child(even) {background-color: #f2f2f2;}
		th {
			background-color: #4CAF50;
			color: white;
		}
		.edit, .delete {
			padding: 6px 10px;
			border-radius: 4px;
			color: white;
			text-decoration: none;
			margin-right: 10px;
		}
		.edit {
			background-color: #008CBA;
		}
		.delete {
			background-color: #f44336;
		}
	</style>
</head>
<body>
    <?php 
include('./layout/header.php');
?> 

 <div class="container-fluid">
     <div class="row">
      <?php 
      include('./layout/sidebar.php');
      ?>
        
        <div class="col-9 mt-3">
	<table>
	    <tr>
	        <h1 align='center'>Pickup orders</h1>
	    </tr>
	    <tr>
	        <th>S.N</th>
	        <th>username</th>
	        <th>OrderTime</th>
	        <th>Type</th>
	        <th>Weight</th>
	        <th>location</th>
	        <th>Pickup Date</th>
	        <th>Status</th>
	        <th>Change</th>
	    </tr>
	    <?php
	    include('./partials/connect.php');
	    $SN=0;
	    $sql = "SELECT * FROM `pickup` ";
	    $result = mysqli_query($conn,$sql);
	    if(mysqli_num_rows($result)<=0)
	    {
	        echo"<tr><td colspan='9'>No waste scheduled</td></tr>";
	    }
	    else
	    {
	        while($row = mysqli_fetch_assoc($result))
	        { 
	            $SN+=1;
	            $user_id=$row['user_id'];
	            $pickup_id=$row['pickup_id'];
	            $orderTime=$row["order_time"];
	            $type = $row['type'];
	            $weight = $row["weight"];
	            $location=$row["location"];
	            $pickup_date=$row["date"];
	            $status=$row["status"];
	            $sql = "SELECT * FROM user WHERE user_id = $user_id";
	            $result2 = mysqli_query($conn, $sql);

	            // Fetch the data
	            $user = mysqli_fetch_assoc($result2);
	            $username= $user['username'];
	            

	            echo"
	            <tr>
	                <td>$SN</td>
	                <td>$username</td>
	                <td>$pickup_id</td>
	                <td>$type</td>
	                <td>$weight</td>
	                <td>$location</td>
	                <td>$pickup_date</td>
	                <td>$status</td> 
	                <td><a href='statusEdit.php?pid=$pickup_id' class='edit'>Edit</a> 
	                    <a href='statusDelete.php?pid=$pickup_id' class='delete'>delete</a></td>
	            </tr>
	           "; 

	        }   
	    }                     
	    mysqli_close($conn);
	    ?>
	</table>
    </div>
    </div>
</body>
</html>

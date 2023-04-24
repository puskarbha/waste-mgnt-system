<?php 
session_start();
if(!isset($_SESSION['user']))
{
    header('Location:index.php');
}
include('layout/header.php');
?> 

 <div class="container-fluid">
     <div class="row">
      <?php 
      include('layout/sidebar.php');
      ?>
        
        <div class="col-9 mt-3">
            <div class="card">
                <div class="card-header">
                    <span class="h3">notice Details</span>
                </div>
                <div class="card-body">
                   
                        <table class="table">
                            <thead>
                                 <tr>
                                    <th scope="col">SN</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">catid</th>
                                    <th scope="col">description</th>
                                    <th scope="col">slug</th>
                                    <th scope="col">image</th>
                                    <th scope="col">date</th>
                                    <th scope="col">Action</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                             include('./partials/connect.php');
                                    $sql= "SELECT * FROM notice" ;

                                    $result= $conn->query($sql);
                                    $i=1;
                                    while($row=$result->fetch_assoc())
                                    {
                                        echo "<tr><td>".$i++."</td>";
                                       
                                        echo "<td>".$row['title']."</td>";
                                        echo "<td>".$row['category']."</td>";
                                        echo "<td>".$row['description']."</td>";
                                        echo "<td>".$row['slug']."</td>";
                                       ?> 
                                        <td>
                                            <img src="./partials/image/<?=$row['image']?>" width="60px" height="60px"/></td>
                                        <?php
                                        echo "<td>".$row['date']."</td>";
                                        echo "<td><a href='./partials/updateNotice.php?nid=".$row['nid']."'class=' edit btn btn-primary'>Update</a>&nbsp";
                                        echo "<a href='./partials/notice_delete.php?nid=".$row['nid']."'class=' delete btn btn-danger'>Delete</a></td></tr>";
                                        
                                    }
                            ?>
                            </tbody>
                        </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php 
include('layout/footer.php');
?>
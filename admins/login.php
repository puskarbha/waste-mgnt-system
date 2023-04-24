<?php

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    include('./partials/connect.php');
    $email=$_POST['a_email'];
    $password=$_POST['a_pass'];


    $sql="select * from `admin` where email='$email'";
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0)
    {
    
        $data=mysqli_fetch_array($result);
      
         if($password==$data['password']) 
         {
                   
             session_start();
             $_SESSION['loggedIn'] = true;
             $_SESSION['id'] = $data['admin_id'];
             $_SESSION['user']=$data['admin_name'];
              
              echo'<script> 
              window.location="../admins/index.php";
              alert("login successfully");
              </script>';
              
         }
         else{
            echo'<script>
            alert("#");
          window.location="/";
          </script>';
         }
        
    }
    else{
        echo'<script>
        alert("Invalid credentials");
       window.location="#";
        </script>';
    }
}
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./CS/login.css">
    <title>login Page</title>
</head>
<body>
<?php include './layout/header.php'; ?>

  
    <form action="#" method="post">
        <label>
            <input type="email" name="a_email">
        </label>
        <label>
            <input type="password" name="a_pass">
        </label>
        <button type="submit" name="submit">Submit</button>
    </form>
        </div>
        </div>
</body>
</html>
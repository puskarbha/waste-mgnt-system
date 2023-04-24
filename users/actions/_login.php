<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    include('../partials/connect.php');
    $email=$_POST['u_email'];
    $password=$_POST['u_pass'];


    $sql="select * from `user` where email='$email'";
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0)
    {
    
        $data=mysqli_fetch_array($result);
      
         if(password_verify($password,$data['password'])) 
         {
                   
             session_start();
             $_SESSION['loggedIn'] = true;
             $_SESSION['id'] = $data['user_id'];
              $_SESSION['username']=$data['username'];
             
              echo'<script> 
              window.location="../user.php";
              alert("login successfully");
              </script>';
              
         }
         else{
            echo'<script>
            alert("Invalid password");
          window.location="../partials/loginPage.php";
          </script>';
         }
        
    }
    else{
        echo'<script>
        alert("Invalid credentials");
       window.location="../partials/loginPage.php";
        </script>';
    }
}
?>
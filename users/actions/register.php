<?php
include('../partials/connect.php');
$username=$_POST['username'];
$email=$_POST['u_email'];
$address=$_POST['u_address'];
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];
$image=$_FILES['photo']['name'];
$tmp_name=$_FILES['photo']['tmp_name'];


if($password!=$cpassword){
    echo' <script> 
        alert("passwords doesnot match");
        window.location="../partials/signupPage.php";
        </script>';
}
else{
    move_uploaded_file($tmp_name,"../uploads/$image");
    $hash = password_hash($password,PASSWORD_DEFAULT);
    $sql="INSERT INTO `user` (`user_id`, `username`, `address` ,`email`, `password`, `photo`)
VALUES (NULL, '$username','$address', '$email', '$hash', '$image')";

    $result=mysqli_query($conn,$sql);
    if($result){
        echo' <script> 
            alert("Registration successful");
            window.location="../user.php";
            </script>';
    }
    else{
        echo"Registration unsuccessful.";
        die("Connection failed: " . mysqli_connect_error());
    }
}
?>
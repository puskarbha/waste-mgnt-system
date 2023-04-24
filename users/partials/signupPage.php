<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>waste mgnt sys</title>
    <link rel="stylesheet" href=".../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body class="bg-dark">
<?php include '/xampp/htdocs/waste_mgnt_sys-master/users/components/user_header.php'; ?>
<h1 class="text-center text-info p-3">Waste management System</h1>
<div class="bg-info py-4">
    <h2 class="text-center">Register Account</h2>
    <div class="container text-center">
        <form action="../actions/register.php" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <input type="text" class="form-control w-50 m-auto" placeholder="Enter your full name."
                       required="required" name="username">
            </div>
            <div class="mb-3">
                <input type="email" class="form-control w-50 m-auto" placeholder="Enter your email address"
                       required="required" name="u_email">
            </div>
            <div class="mb-3">
                <input type="location" class="form-control w-50 m-auto" placeholder="Enter your residential address"
                       required="required" name="u_address">
            </div>
            <div class="mb-3">
                <input type="password" class="form-control w-50 m-auto" placeholder="Enter your password"
                       required="required" name="password">
            </div>
            <div class="mb-3">
                <input type="password" class="form-control w-50 m-auto" placeholder="Confirm your password"
                       required="required" name="cpassword">
            </div>
            <div class="mb-3">
                <input type="file" class="form-control w-50 m-auto" name="photo">
            </div>


            <button type="submit" class="btn btn-dark my-4">Register</button>
            <p>Already have a account?<a href="../" class="text-white">Login here</a></p>
        </form>
    </div>
</div>
</body>
</html>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/style.css">
    <title>login Page</title>
</head>
<body>
<?php include '../components/user_header.php'; ?>

  
    <form action="../actions/_login.php" method="post">
        <label>
            <input type="email" name="u_email">
        </label>
        <label>
            <input type="password" name="u_pass">
        </label>
        <button type="submit" name="submit">Submit</button>
    </form>
        </div>
        </div>
</body>
</html>
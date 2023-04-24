<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <title>Login</title>
    <style>
        header {
          background-color: #fff;
          padding: 10px;
          box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.2);
          position: fixed;
          top: 0;
          left: 0;
          right: 0;
          z-index: 999;
        }

        nav {
          display: flex;
          justify-content: space-between;
          align-items: center;
          max-width: 1200px;
          margin: 0 auto;
          font-family: Arial, sans-serif;
          font-size: 16px;
          font-weight: bold;
        }

        .logo img {
          margin-right: 10px;
        }

        nav a {
          color: #333;
          text-decoration: none;
          margin-right: 20px;
          transition: all 0.3s ease;
        }

        nav a:hover {
          color: #007bff;
        }

        nav a.active {
          color: #007bff;
          border-bottom: 2px solid #007bff;
        }

        nav a:last-child {
          margin-right: 0;
        }

        nav a.button {
          background-color: #007bff;
          color: #fff;
          padding: 10px 20px;
          border-radius: 5px;
          transition: all 0.3s ease;
        }

        nav a.button:hover {
          background-color: #0056b3;
        }

        body {
          padding-top: 70px; /* Adjust the value to match the height of the header */
        }
    </style>


</head>
<body>
    <header>
        <nav>
            <div class="logo" ><img src="layout/logo.png" alt="Not found" width="40px"></div>
            <a href="./index.php">Home</a>
          
            <?php
          
            if(isset($_SESSION['loggedIn'])){ ?>
             <h2 align='center'>Admin panel</h2>
                <a href="./logout.php">Logout</a>
               
            <?php }
            else{ ?>
            <a href="../loginPage.php">Log In</a>
           
            
            <?php } ?>
        </nav>
    </header>
</body>
</html>

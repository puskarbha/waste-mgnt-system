<header>
<nav>
  
        <div class="logo" ><img src="../image/logo.png" alt="" width="40px"></div>
        <a href="#">Home</a>
        <a href="#">About</a>
        <a href="#">Contact</a>
        <?php
        session_start();
        if(isset($_SESSION['loggedIn'])){ ?>
            <a href="./actions/_logout.php">Logout</a>
            <a href="partials/pickupSchedule.php">Pickup</a>
        <?php }
        else{ ?>
        <a href="partials/loginPage.php">Log In</a>
        <a href="../partials/SignupPage.php">Sign Up</a>
        
        
<?php } ?>
    </nav>
    </header>
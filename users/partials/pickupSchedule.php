<?php
session_start();
$userid=$_SESSION['id'];
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/style.css">
    <title>Schedule pickup</title>
</head>
<body>
    
<h1>Schedule your pickup</h1>
<?php echo''.$userid.'
<form style="background-color:aquamarine;" action="../actions/_pickup.php" method="post">
    <input type="hidden"  name="userid" value="'.$_SESSION['id'].'">
    <label for="wasteType">Waste Type:</label>
    <select name="wasteType" id="wasteType">
        <option value="plastic">Plastic</option>
        <option value="Metal">Metal</option>
        <option value="paper">Decadable</option>
        <option value="Medical">Medical</option>
        <option label="Electronics">Electronics</option>
        <option label="others">others</option>
    </select><br>
    <label>Expected quantity(kg):</label>
    <input type="number" name="quantity"><br>

    <label for"Pickup>Pickup location</label>
    <input type="text" name="location"><br>

    <label>Date:</label>
    <input type="date" name="date"><br>

    <label>Time:</label>
    <input type="time" name="time"><br>
    <button type="submit" name="submit">Submit</button>
</form>' ?>
</body>
</html>

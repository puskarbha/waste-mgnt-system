<?php
//scrip to connect to the database
$servername ="localhost";
$username ="root";
$password ="";
$database ="WMS";

$conn= mysqli_connect($servername,$username,$password,$database);

if(!$conn) {
    echo"Connection error.";
    die("Connection failed: " . mysqli_connect_error());

}
?>
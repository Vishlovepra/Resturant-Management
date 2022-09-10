 
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "RestDb";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
  echo "Error: " . $user . "<br>" . mysqli_error($conn);
}


$sql = "DELETE FROM `Food`";

if (mysqli_query($conn, $sql)) {
  echo "Done Boss";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

<div class="title">
 <h1>Thanks<br/>For Orderering</h1>
 <h1>
 <?php
 session_start(); 
  echo $_SESSION['username'];?> 
 </h1>

 <h3> You Will Be Notified Soon!</h3>

 <form action="pos.php" >
     <a target="_blank" href="http://localhost/MiniProject/form/welcome.php" class="white-mode">Order More</a>
    </form>
    </div>
    
    <link rel="stylesheet" href="pos.css">
</body>

</html>

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

if($_SERVER["REQUEST_METHOD"] == "POST"){
      $food = $_POST["f"];

      $sql = "DELETE FROM `new` where `foodname`='$food'";
      if (mysqli_query($conn, $sql)){
          echo  "<p>Go To Food <a href='http://localhost/MiniProject/JS-Shopping-Cart/index.php'> Item Page</a> </p>";

      }




}
      ?>
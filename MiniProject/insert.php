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
      $price = $_POST["p"];
      $image=$_POST["i"];


$sql = "INSERT INTO `new` (`foodname`, `price`,`imglink`) VALUES ('$food', '$price','$image')";

      if (mysqli_query($conn, $sql)) {
        
        echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
        <strong>Done!</strong> Your  Food Item Added In Cart
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
          <span aria-hidden='true'>&times;</span>
        </button>
      </div>";
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }



      

    }



?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="insert.css">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<div class="login">
  <div class="login-triangle"></div>
  
  <h2 class="login-header">ADD TO CART SECTION</h2>

  <form class="login-container" action="insert.php"  method="post">
    <p><input type="text" name="f" placeholder="Foodname"></p>
    <p><input type="text" name="p" placeholder="Price"></p>
    <p><input type="text" name="i" placeholder="Image-Link"></p>
    <button>Add To CART</button>
  </form>
    <p>Go To Food <a href="http://localhost/MiniProject/JS-Shopping-Cart/index.php"> Item Page</a> </p>
</div>




<div class="login">
  <div class="login-triangle"></div>
  
  <h2 class="login-header">DELETE FOOD IN CART </h2>

  <form class="login-container" action="del.php"  method="post">
    <p><input type="text" name="f" placeholder="Foodname"></p>
    <button>REMOVE</button>
  </form>
    <p>Go To Food <a href="http://localhost/MiniProject/JS-Shopping-Cart/index.php"> Item Page</a> </p>
</div>
  
</body>
</html>

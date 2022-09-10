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
}

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = $_POST["username"];
    $email = $_POST["email"]; 
    $address = $_POST["address"];
    $city = $_POST["city"];
    session_start();
    $_SESSION['userr']=$username; 
    
    $sql="INSERT INTO `Payment_add` (`username`, `email`, `Address`, `City`)
         VALUES ('$username', '$email', '$address', '$city')";
$result=mysqli_query($conn, $sql);


  if($result){
    $showAlert=true;
    header("location: output.php");
  }
  else{
    echo"NONE";
  }
}
          /*<?php
          $servername = "localhost";
          $username = "root";
          $password = "";
          $dbname = "RestDb";
          
          
          // Create connection
          $conn = mysqli_connect($servername, $username, $password, $dbname);
          // Check connection
          if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
          }
          
          
          
          $select =   "SELECT * FROM `Payment_add` ORDER BY `Payment_add`.`City` ASC";
          $rs = mysqli_query($conn, $select);
          
          if($rs){
            while($row=mysqli_fetch_array($rs)){
              echo "<tr><td>";
              echo row['City$'];
              echo "</td><td>";
            }
            
          }
          
          
          /*
          while($row=mysqli_fetch_array($rs)){
            echo "<tr><td>".$row['table_name']."</td><td>".
            $row['table_name']."</td><td>".$row['table_name']."</td><td>".$row['table_name’]."</td></tr>";
            */
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
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <div class="wrapper">
  <div class="card">  
    <h2 class="visa">VISA</h2>
    <h3 class="num">n° 4539  7111  0342  0778</h3>

      <h4>name</br>Foulen</h4>
      <h4>EXP</br>10/21</h4>
      <h4>CVC</br>014</h4>

  </div>
  <form action="pay.php" method="post" >
  <div class="main">
    <div class="content">
      <h1>Payment Details</h1>
      
      <!--   <label>Name</label>-->
        <input id="name" name="username" type="name" placeholder="Name">
        <input type="email" name="email" placeholder="email">
        <input type="address" name="address" placeholder="Address">
        <input id="name" type="name" name="city" placeholder="City">
        
       <!-- <label>Card Number</label>-->
        <input type="text" placeholder="4539 7111 0342 0778">
        
      <!--  <label>Expiration Date</label>-->
        <input type="month" placeholder="2021-10">
        <input type="user" placeholder="014">
          <button>Pay</button>
        </div>
      </div>
    </div>
  </form>
<link rel="stylesheet" href="pay.css">
    </body>

    </html>
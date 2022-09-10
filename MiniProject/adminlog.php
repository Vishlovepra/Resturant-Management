<?php         
$login = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $servername = "localhost";
$username = "root";
$password = "";
$database = "RestDb";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);
    $username = $_POST["username"];
    $password = $_POST["password"];

    
if($username){
  $sql = "Select * from `Adminlgn` where username='$username'and password= '$password'";
  $result = mysqli_query($conn, $sql);
  $num = mysqli_num_rows($result);
  $pass=true;
  
}
    if ($num == 1){
            if ($pass==true){ 
                $login = true;
               
                header("location: index1.php");
            } 
            else{
    $showError = "Invalid Credentials";
            }
        }
         
    else{
        $showError = "Invalid Credentials";
      
    }
  }

 
    
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>ISECURE</title>
  </head>
  <body>

      <div id="login-wrap" class="login-wrap">
    <link rel="stylesheet" href="admin.css">
    <div class="login-html">
    <h1 style="color:green;" >ADMIN</h1>
        <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
        <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab"></label>
        <div class="login-form">
        <div class="sign-in-htm">
          <div class="group">
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
                      <form action="adminlog.php" method="post">
                        <label for="user" class="label">Username</label>
                        <input id="user" type="text" name="username" class="input">
                </div>
                
                <div class="group">
                <label for="pass" class="label">Password</label>
                <input id="pass" type="password" class="input" name="password" data-type="password">
                </div>
                <div class="group">
                <input id="check" type="checkbox" class="check" checked>
                <label for="check"><span class="icon"></span> Keep me Signed in</label>
                </div>
                <div class="group">
                <button  type='submit' > Submit</button>
                </div>
                </form>
                <div class="hr"></div>
                <div class="foot-lnk">
                </div>
                </div>
                </div>
                </div>
                
                </body>
                </html>
                
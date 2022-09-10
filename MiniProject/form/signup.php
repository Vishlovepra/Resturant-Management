<?php 
$showAlert=false;
    include 'partials/_dbconnect.php';
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $username = $_POST["username"];
        $password = $_POST["password"]; 
        $cpassword = $_POST["cpassword"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];

        if($password==$cpassword){   
            $sql="INSERT INTO `Lgnreg` (`username`, `password`, `email`, `phone`)
             VALUES ('$username', '$password' , '$email',  '$phone')";
            $result=mysqli_query($conn, $sql);
            if($result){
                $showAlert=true;
            }
            echo '<div  class="alert alert-success" role="alert">
            <h4 class="alert-heading">Well done! Thanks For Creating An Account!</h4>
            <p></p><hr>
            <p class="mb-0">Now you can safely login using
              USERNAME and PASSWORD</p>
          </div>';
          header("location: login.php");
            
        }
        else{
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>OOPS!</strong> You should check in on some of those fields below.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';

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

    <title>ISECURE</title>
  </head>
  <body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
      <div id="login-wrap" class="login-wrap">
    <link rel="stylesheet" href="./form.css">
    <div class="login-html">

        <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab"></label>
        <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
        <div  style="overflow:none" class="login-form">
            <div class="sign-up-htm">
                    <form action="signup.php" method='post'>
                    <div class="group">
                        <label for="username" class="label">Username</label>
                        <input id="username" name="username" type="text" class="input">
                    </div>
                    <div class="group">
                        <label for="password" class="label">Password</label>
                        <input id="password" name="password"  type="password" class="input" data-type="password">
                    </div>
                    <div class="group">
                        <label for="pass" class="label">Repeat Password</label>
                        <input id="cpassword" type="password" name="cpassword"  class="input" data-type="password">
                    </div>
                    <div class="group">
                        <label for="pass" class="label">Email Address</label>
                        <input id="pass" type="text" name="email" class="input">
                    </div>
                    <div class="group">
                        <label for="pass" class="label">Phone No:</label>
                        <input id="pass" type="text" name="phone" class="input">
                    </div>
                    <div class="group">
                     <button  type='submit' >Submit</button>
                    </div>
                </form>
                    <div class="hr"></div>
                    <div class="foot-lnk">
                    </div>
                </div>
            </div>
        </div>
    </div>
    
  </body>
</html>

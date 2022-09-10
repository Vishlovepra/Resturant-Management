
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



$sql="INSERT INTO `Payment_add` (`username`, `email`, `Address`, `City`)
VALUES ('$username', '$email', '$email', '$city')";
$result=mysqli_query($conn, $sql);


?>


<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

            <style>
            table
            {
                overflow: hidden;
                font-size:20px;
                width: 971px;
height: 80px;
position: relative;
top: 101px;
left: 290px;
            border-style:solid;
            box-shadow: 5px 10px 18px rgb(51, 51, 51);
            
            border-width:2px;
            
            border-color:pink;
            box-shadow: #27ae60;
            
            }
            body{
                overflow:hidden;
                font-weight:10px;
                color:white;
                background-image: url("https://i.pinimg.com/564x/11/c0/c1/11c0c1e40d1c8871bec2c8e37fe1fb83.jpg");
    background-color: #cccccc;
    height: 200px;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
            }
            </style>
            </head>
            
            <body bgcolor="#EEFDEF">
            
            <?php
            echo"<style>
            .ig {
                background-color:black;
                position: relative;
                top: 0px;
                height: 5px;
                z-index: -1;
                animation-name: mo;
                animation-duration: 0.90s;
                 animation-iteration-count: infinite;
                 animation-direction: normal; 
            }
            
            
            @keyframes mo{
                0% {
                    background-color:white;
                }
                100% {
                    background-color:green;
                }
            }
            </style> 
            <div class='ig'>    
            </div>";
            echo"
            <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css' integrity='sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==' crossorigin='anonymous' />

            <style>
                .aaa{
        
                    color: white;
                    display: inline-block;
                    position: relative;
                    left: 530px;
                    top: 51px;
                    font-size: 49px;
                    animation-name: move;
                    animation-duration: 2s;
                    animation-iteration-count: infinite;
                    animation-direction: normal;
                  }
                  @keyframes move {
                    0% {
                        color:white;
                    }
                    100% {
                        color:red;
                    }
                }
                
            </style>
            <div class='aaa' ><p><i class='fas fa-pizza-slice'></i> Foodie - BILL </p></div>";

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

$sql="SELECT * FROM `Food`";
$rs=mysqli_query($conn, $sql);
$rss=mysqli_query($conn, $sql);


$sum=0;


if (!$conn)

{
    
    die('Could not connect: ' . mysql_error());
    
}


echo "
<table border='1'>

<tr>

<th>FoodName</th>

<th>Customer_name</th>

<th>Price</th>


</tr>

<tr>

<th>  |  </th>

<th>  |  </th>

<th>  |  </th>


</tr>";

while($row = mysqli_fetch_array($rs)){
    
    echo "<tr>";
    
    echo "<td>". $row['foodname'] ."</td>";
    
    echo "<td>" . $row['cust'] ."</td>";
    
    echo "<td>" . $row['price'] ."</td>";
    
    echo "</tr>";
    echo"<hr>";
    
}
echo "</table>";
echo"
<style>
    .summ{
        position: relative;
left: 500px;
top: 205px;
    }
</style>
<p class='summ'>Sub-Total</p>";



echo"
<style>
    .summm{
        position: relative;
left: 500px;
top: 195px;
    }
</style>
<p class='summm'>SER-TAX : 6.0%</p>";



while($row = mysqli_fetch_array($rss)){
    $sum += $row['price'];
}
$ser = 14/100*$sum + 0.5/100*$sum + 0.5/100*$sum;

echo"
<style>
    .sum{
        position: relative;
        left: 994px;
        top: 116px;
      }
    }
</style>
<div class='sum' > $sum </div>";
echo"
<style>
    .summmm{
        position: relative;
        left: 994px;
        top: 131px;
      }
    }
</style>
<div class='summmm' > $ser </div>";
echo"
<style>
    .summmmm{
        position: relative;
        left: 502px;
        top: 154px;
      
      
    }
</style>
<div class='summmmm' > VAT 2.00% : </div>";
$VAT= 23.00/($sum + 0.2);
echo"
<style>
    .sun{
        position: relative;
        left: 994px;
        top: 131px;
      }
    }
</style>
<div class='sun' >$VAT</div>";
echo"
<style>
    .s{
        position: relative;
      }
    
</style>

<div class='s' ><h3><hr></h3></div>";
echo"
<style>
    .a{
        position: relative;
        left:0px;
        top:100px;
      }
    
</style>
<div class='a' ><h3><hr></h3></div>";
echo"
<style>
    .su{
        position: relative;
        left: 600px;
        top: 131px;
      }
    
</style>
<div class='su' ><h3> TOTAL</h3></div>";
$aa=round($VAT+$ser+$sum);
echo"
<style>
    .aa{
        background-color:black;
        color:yellow;
        display: inline-block;
        position: relative;
        left: 900px;
        top: 90px;
      }
    
</style>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css' integrity='sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==' crossorigin='anonymous'/>
<div class='aa' ><h3> <i class='fas fa-rupee-sign'></i> $aa</h3></div>";
echo"<style>
*{
    color:white;
}
.dig {
    position: relative;
    top: 100px;
}
.btn-primary {
    color: #fff;
    background-color: black;
    border-color: #0d6efd;
    width: 780px;
}
</style> 
<div class='dig'>
<div class='d-grid gap-2 col-6 mx-auto'>
    <a class='bttm' href='http://localhost/MiniProject/pay/pos.php'> <button id='btn' class='btn btn-primary' href='http://localhost/MiniProject/pay/pos.php'  type='button'> 
     Order</button></a>
</div>
</div>";

echo"<style>
.ddig {
    background-color:black;
    position: relative;
    top: 135px;
    height: 5px;
    z-index: -1;
    animation-name: mo;
    animation-duration: 0.90s;
     animation-iteration-count: infinite;
     animation-direction: normal; 
}


@keyframes mo{
    0% {
        background-color:white;
    }
    50%{
        background-color:yellow;
    }
    100% {
        background-color:green;
    }
}
</style> 
<div class='ddig'>    
</div>";





mysql_close($con);



?>

        
        


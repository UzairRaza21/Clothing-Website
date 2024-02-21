<?php
session_start();
include("conn.php");

if (isset($_POST['login'])){

    $username = $_POST['username'];
    $password = $_POST['passwor'];

    $sql = "SELECT * FROM user WHERE username = '$username' AND passwor = '$password'";
    $result = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($result);

    if ($count == 1){
        $_SESSION['username'] = $username;
        header("location: welcome.php");
    }else{
        echo "Invalid Username or Password";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suckers- Clothing Store</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="shortcut icon" href="./lmages/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">


</head>
<body style="background-color: whitesmoke;" >
    <!-- Nav Start -->
    <nav>
        <div id="logo-pic">
            <img src="./lmages/logo.jpg" alt="threads" width="180" height="60">
        </div>
        
        <div>
            <ul id="nav-links">
                <li><a href="./index.html">Home</a></li>
                <li><a href="./products.html">Products</a></li>
                <li><a href="./contact.html">Contact</a></li>
                <li><a href="./login.php">Login</a></li>
            </ul>
        </div>

        <div id="menu" onclick="openMenu()">
            <img src="./lmages/hamburger.png" alt="menu" width="20">
        </div>
    </nav>
    
    <div id="nav-col" >
        <div id="nav-col-links" class="nav-col-links">
            <a id="link" href="./index.html">Home</a>
            <a id="link" href="./products.html">Products</a>
            <a id="link" href="./contact.html">Contact</a>
            <a id="link" href="./login.php">Login</a>
        </div>
    </div>
    <!-- Nav End -->

    <!-- Login Start -->
    <div class="login-container">
        <h1>Login</h1>
        <form action="" method="post" >
            <label for="uname">Username 
                <input type="text" name="username" id="uname" style="margin-left: 10px; width:220px">
            </label><br><br>

            <label for="upassword">Password
                <input type="password" name="passwor" id="upassword" style="margin-left: 13px; width: 220px">
            </label><br><br>

            <input type="submit" value="Login" class="login-button" name="login">
            <p style="margin-top: 10px;">Don't have a account? <a href="./register.php">Register Here</a></p>

        </form>
    </div>

    <!-- Login End -->




    
<!-- Footer Start -->

<div class="footer-container">
    <div class="footer-logo">
      <img src="./lmages/logo.jpg" alt="suckers" width="160" height="60">
    </div>
  
    <div class="footer-links">
      <a href="">Return and Exchange</a>
      <a href="">Payment Methods</a>
      <a href="">Delivery Charges</a>
    </div>
  
    <div class="footer-social">
      <i class="fa-brands fa-facebook"></i>
      <i>Instagram</i>
      <i>Whatsapp</i>
      <i>Message</i>
    </div>
  
  
  
  
  </div>
    
    <script src="./app.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  </body>
  </html>
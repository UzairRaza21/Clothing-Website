<?php
include("conn.php");
if (isset($_POST['register'])){

    if($_POST['passwor'] != $_POST['cpassword']){
        echo "Please enter same password";
    }else{
        $username = $_POST['username'];
        $fullname = $_POST['fullname'];
        $email = $_POST['email'];
        $password = $_POST['passwor'];
        $cpassword = $_POST['cpassword'];

        $sql = "INSERT INTO `user`(`username`, `fullname`, `email`, `passwor`, `cpassword`) VALUES ('{$username}','{$fullname}','{$email}','{$password}','{$cpassword}')";
        $result = mysqli_query($conn, $sql);
        header ("location : login.php");

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

    <!-- Registration Start -->

    <div class="register-container">

        <h1 style="margin-bottom: 20px;">Register Yourself</h1>
        <form method="post">
            <label for="">Username
                <input type="text" name="username" id="username" >
            </label><br><br>
            <label for="">Full Name
                <input type="text" name="fullname" id="name">
            </label><br><br>
            <label for="">Email
                <input type="email" name="email" id="email" style="margin-left: 32px;">
            </label><br><br>
            <label for="">Password
                <input type="password" name="passwor" id="password">
            </label><br><br>
            <label for="">Confirm Password
                <input type="password" name="cpassword" id="cpassword">
            </label><br><br>
            
            <input type="submit" value="Submit" name="register" class="register-button">
            <br><br>
            <p>Already have Account? <a href="login.php">Login</a></p>
        </form>
        
    </div>
    



    <!-- Registration End -->
    
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
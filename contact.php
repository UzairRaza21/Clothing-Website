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


    <!-- Contact Us Start -->
    <div class="contact-container">
        <h1 >Contact Us</h1>
        <form action="insert.php" method="post" >
            <label for="cname" >Name 
                <input type="text" name="cname" id="cname" style="margin-left: 22px; width: 250px">
            </label><br><br>

            <label for="cmobile">Mobile
                <input type="text" name="cmobile" id="cmobile" style="margin-left: 17px; width: 250px" >
            </label><br><br>

            <label for="cemail">Email
                <input type="email" name="cemail" id="cemail" style="margin-left: 30px; width: 250px">
            </label><br><br>

            <label for="cmessage">Message
                <textarea name="cmessage" id="cmessage" cols="40" rows="8" style="margin-left: 5px; width: 250px"></textarea>
            </label><br><br>

            <input type="submit" value="Submit" class="contact-button" name="submitted">
        </form>

    </div>



    <!-- Contact us End -->




    
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
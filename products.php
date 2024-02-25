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
                <li><a href="./products.php">Products</a></li>
                <li><a href="./contact.php">Contact</a></li>
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
            <a id="link" href="./products.php">Products</a>
            <a id="link" href="./contact.php">Contact</a>
            <a id="link" href="./login.php">Login</a>
        </div>
    </div>
    <!-- Nav End -->

     <!-- Men T-Shirt Collection -->

     <div class="section-1" id="section-1" >
        <h1 style="font-size: 40px;">Men T-Shirt Collection</h1>
    </div>



<!-- Products Uploaded with PHP start -->
<?php
        include("conn.php");
        $sql = "SELECT * FROM `product`";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_num_rows($result);
        if($row > 0){
            ?>

            <?php
            while($row = mysqli_fetch_assoc($result)){

                ?>
     <div class="grid-container">
           <div class="T-shirts-collections">
             <div class="flex-item">
               <div><?php echo "<img src='".$row['product_image']."' height='200px' width='300px'>"  ?></div>
               <h2><?php echo $row['product_name']?></h2>
               <h3><?php echo $row['product_description']?></h3>
               <button>Buy Now</button>
              </div>
            </div>
     </div>
            <?php
        }
?>
<?php
        }else{
            echo "No Record Found";
            mysqli_close($conn);
        }

        ?>

<!-- Products Uploaded with PHP end -->
    
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
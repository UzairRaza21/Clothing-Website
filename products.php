<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suckers- Clothing Store</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="shortcut icon" href="./lmages/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>
<body style="background-color: whitesmoke;" >
    <!-- Nav Start -->
    <nav>
        <div id="logo-pic">
            <img src="./lmages/logo.jpg" alt="threads" width="180" height="60">
        </div>
        
        <div>
            <ul id="nav-links">
                <li><a href="./index.php">Home</a></li>
                <li><a href="./products.php">Products</a></li>
                <li><a href="./contact.php">Contact</a></li>
                <li><a href="./login.php">Login</a></li>
                <li><a href="./add-to-cart.php" style="margin-left: 10px; color: whitesmoke; font-size: 18px;"><i class="fa-solid fa-cart-shopping"></i><sub>1</sub></a></li>
            </ul>
        </div>

        <div id="menu" >
            <img onclick="openMenu()" src="./lmages/hamburger.png" alt="menu" width="20">
            <a href="./add-to-cart.php" style="margin-left: 10px; color: whitesmoke; font-size: 20px;"><i class="fa-solid fa-cart-shopping"></i><sub>1</sub></a>
        </div>
    </nav>
    
    <div id="nav-col" >
        <div id="nav-col-links" class="nav-col-links">
            <a id="link" href="./index.php">Home</a>
            <a id="link" href="./products.php">Products</a>
            <a id="link" href="./contact.php">Contact</a>
            <a id="link" href="./login.php">Login</a>
        </div>
        
    </div>
    <!-- Nav End -->
    <h1 style="text-align: center;">T-Shirt collections</h1>


<!-- Products Uploaded with PHP start -->
<?php
        include("conn.php");
        $sql = "SELECT * FROM `product`";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_num_rows($result);
       
        ?>
        
         <!-- Product Cart HTML Start -->
    
           <div class="T-shirts-collections-1">
                       
           <?php
        if ($row > 0) {

            while ($row = mysqli_fetch_assoc($result)) {

        ?>
                <div class="flex-item-1" id="product-cart">

                    <!-- Cart display Product Start-->
                    <div><?php echo "<img src='uploaded-Products/".$row['product_image']."' >"  ?></div>
                    <h3><?php echo $row['product_name']?></h3>
                    <h4><?php echo $row['product_description']?></h4>
                    <h4>Price : Rs. <?php echo $row['product_price']?></h4>
                    <!-- Cart dispaly Product End -->


                    <!-- Form for Order start -->
                    <form action="add-to-cart-order-insert.php" method="post">
                    <input type="hidden" name="pid" value="<?php echo $row['product_id'] ?>">
                    <input type="hidden" name="price" value="<?php echo $row['product_price'] ?>">
                    <input type="hidden" name="product_name" value="<?php echo $row['product_name'] ?>">
                        
                        <label for="">Quantity: 
                            <input type="number" name="qty" id="" value="1" min="1">
                        </label><br><br>
                        <input type="submit" value="Buy Now" name="buy" class="cart-button" > 
                    </form>
                    <!-- Form for Order end -->

                </div>
                        

            </div>
     <?php
            }
        }else {
            echo "<h4>No Products</h4>";
        };
        ?>
<!-- Product Cart HTML End -->
     
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
    <a href="./dashboard.php">Admin Dashboard</a>
  </div>

  <div class="footer-social">
    <a href=""><i class="fa-brands fa-facebook"></i></a>
    <a href=""><i class="fa-brands fa-instagram"></i> </a>
    <a href=""><i class="fa-brands fa-whatsapp"></i></a>
    <a href=""><i class="fa-solid fa-message"></i></a>
  </div>




</div>
    
    <script src="./app.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  </body>
  </html>
<?php

include 'conn.php';
include 'login-auth.php';

$uid = $_SESSION['username'];


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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>
<body style="background-color: whitesmoke;" >
    <!-- Nav Start -->
    <?php include("nav.php"); ?>

    <!-- Nav End -->
<!-- Add to Cart Star -->
    <?php

$sql = "SELECT * FROM `order`, `product` ON order.product_id = product.product_id AND order.user_id = user_id";
$result = mysqli_query($conn, $sql);
$row = mysqli_num_rows($result);
if($row > 0){
    ?>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Order No.</th>
            <th scope="col">Product Name</th>
            <th scope="col">Product Image</th>
            <th scope="col">Price</th>
            <th scope="col">Quantity</th>
            <th scope="col">Total</th>
        </tr>
    </thead>
    
    <tbody> 
        <?php
        while($row = mysqli_fetch_assoc($result)){
            ?>
            <tr>
            <td><?php echo $row['order_id']?></td>
            <td><?php echo $row['product_name']?></td>
            <td><?php echo "<img src='uploaded-Products/".$row['product_image']."' height='80px' width='80px'>"  ?></td>
            <td><?php echo $row['product_price']?></td>
            <td><?php echo $row['qty']?></td>
            <td><?php echo $row['subtotal']?></td>
            <td><a href="add-to-cart-order-del.php?order_id=<?php echo $row['order_id']?>"><button>Delete</button></a></td>
        </tr>
        <?php
        }
    }else {
        echo "No Record Found";
        mysqli_close($conn);
    }
    ?>
        </tbody>
    </table>
<!-- Table End -->











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
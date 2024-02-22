<?php
include("conn.php");
$cus_id = $_GET['id'];
$sql = "SELECT * FROM `contact` WHERE id ={$cus_id}";
$result = mysqli_query($conn, $sql) or die ("Falied to fetch customer record");

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
                <li><a href="./dashboard.php">Dashboard</a></li>
                <li><a href="./products.html">Products</a></li>
                <li><a href="./customer-contacted.php">Customer Contacted</a></li>
                <li><a href="">Orders Received</a></li>
                <li><a href="">Registrated Customer Data</a></li>
                <li><a href="./index.html">Goto Website</a></li>
            </ul>
        </div>

        <div id="menu" onclick="openMenu()">
            <img src="./lmages/hamburger.png" alt="menu" width="20">
        </div>
    </nav>
    
    <div id="nav-col" >
        <div id="nav-col-links" class="nav-col-links">
                    <a id="link" href="./dashboard.php">Dashboard</a>
                    <a id="link" href="./products.html">Products</a>
                    <a id="link" href="./customer-contacted.php">Customer Contacted</a>
                    <a id="link" href="">Orders Received</a>
                    <a id="link" href="">Registrated Customer Data</a>
                    <a id="link" href="./index.html">Goto Website</a>
        </div>
    </div>
    <!-- Nav End -->


    
<?php
$row = mysqli_num_rows($result);
if($row > 0){
   while($customer = mysqli_fetch_assoc($result)){

        ?>

<!-- Form Start -->
<form method="post" action="editeddata.php">
    <label for="">
        Customer Name: 
        <input type="text" name="cname" id="cname" value="<?php echo $customer['cname'] ?>">
    </label><br><br>
    <label for="">
        Mobile: 
        <input type="text" name="cmobile" id="cmobile" value="<?php echo $customer['cmobile'] ?>">
    </label><br><br>
    <label for="">
        Email: 
        <input type="text" name="cemail" id="cemail" value="<?php echo $customer['cemail'] ?>">
    </label><br><br>
    <label for="">
        Message: 
        <input type="text" name="cmessage" id="cmessage" value="<?php echo $customer['cmessage'] ?>">
    </label><br><br>
    
    <input type="submit" value="Update Customer" name="subBtn" id="subBtn">
    
</form>
<?php
}
}
else {
    echo "Failed to update customer record";
}
?>
<!-- Form End -->




    
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
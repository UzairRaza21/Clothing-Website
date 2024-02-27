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
                <li><a href="./products-upload.php">Upload Products</a></li>
                <li><a href="./customer-contacted.php">Customer Contacted</a></li>
                <li><a href="">Orders Received</a></li>
                <li><a href="./registratered-cus-data.php">Registrated Customer Data</a></li>
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
                    <a id="link" href="./products-upload.php">Upload Products</a>
                    <a id="link" href="./customer-contacted.php">Customer Contacted</a>
                    <a id="link" href="">Orders Received</a>
                    <a id="link" href="./registratered-cus-data.php">Registrated Customer Data</a>
                    <a id="link" href="./index.html">Goto Website</a>
        </div>
    </div>
    <!-- Nav End -->


    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" class="product-form">
    <h1>Product for Edit / Delete</h1><br>
    <label for="product-name">Product ID
    <input type="text" name="product_id" id="">
    </label><br>

    <input type="submit" value="Edit" name="product-edit" class="product-upload-button" ><br>
    <input type="submit" value="Delete" name="product-delete" class="product-upload-button">

</form>
<br>
<h2 style="text-align: center;">Product Details</h2>
<?php
if(isset($_POST['product-edit'])){
    include('conn.php');
    $p_id = $_POST['product_id'];
    $sql = "SELECT * FROM `product` WHERE product_id = {$p_id}";
    $result = mysqli_query($conn, $sql) or die ("Query unsuccessful");
    
    if(mysqli_num_rows($result) > 0){

    while($row = mysqli_fetch_assoc($result)){
        ?>
        <br>
        <form action="product-edit-code.php" method="post" enctype="multipart/form-data" class="product-form">
        <label for="product-name">Product Title
        <input type="hidden" name="product-id" value="<?php echo $row['product_id']; ?>"  style="margin-left: 50px">
            <input type="text" name="product-name" value="<?php echo $row['product_name']; ?>"  style="margin-left: 50px">
        </label><br><br>

        <label for="product-description">Product Description
            <input type="text" name="product-description" value="<?php echo $row['product_description']; ?>" >
        </label><br><br>

        <label for="product-price">Product Price
            <input type="number" name="product-price" value="<?php echo $row['product_price']; ?>" >
        </label><br><br>

        <label for="product-image">Product-Image
            <input type="file" name="product-image" id="" value="<?php echo $row['product_image']; ?>" style="margin-left: 10px">
        </label><br>

        <input type="submit" value="Edit Product" name="upload-product" class="product-upload-button">
    </form>

<?php
         }
    }
}
?>



<!-- Delete Start -->

<?php
if (isset($_POST['product-delete'])){
    include('conn.php');
    $p_id = $_POST['product_id'];
    $sql = "DELETE FROM `product` WHERE product_id = '{$p_id}'";
    $result = mysqli_query($conn, $sql) or die ("Query Unsuccessful");
    header("location: product-edit.php");
    mysqli_close($conn);
}
?>

<!-- Delete End -->


    
    <script src="./app.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  </body>
  </html>






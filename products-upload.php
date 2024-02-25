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

    <div class="product-form">
        <h1>Upload Products</h1>
        <form action="product-insert.php" method="post" enctype="multipart/form-data" >

            <label for="product-title">Product Title
                <input type="text" name="product-name" id="product-name" style="margin-left: 60px; width: 200px">
            </label><br><br>

            <label for="product-description">Product Description
                <input type="text" name="product-description" id="product-description" style="margin-left: 10px;width:200px">
            </label><br><br>

            <label for="">Product Image
                <input type="file" name="product-image" style="margin-left: 45px"> <br><br>
            </label><br><br>

            <input type="submit" value="Upload Product" name="upload-product" class="product-upload-button"  style="margin-left: 120px;">
        </form>
        <br>
        <br>

        <h1>Edit and Delete Product</h1>
        <button class="product-upload-button"> <a href="./product-edit.php" class="product-upload-button" >Edit OR Delete Product </a></button>        
        
    </div>


    

    
    <script src="./app.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  </body>
  </html>
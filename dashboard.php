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
                    <a id="link" href="./products-upload.php">Upload Products</a>
                    <a id="link" href="./customer-contacted.php">Customer Contacted</a>
                    <a id="link" href="">Orders Received</a>
                    <a id="link" href="">Registrated Customer Data</a>
                    <a id="link" href="./index.html">Goto Website</a>
        </div>
    </div>
    <!-- Nav End -->




    

    
    <script src="./app.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  </body>
  </html>
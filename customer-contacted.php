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
include ('conn.php');
$sql = "SELECT * FROM `contact`";
$result = mysqli_query($conn, $sql);
$row = mysqli_num_rows($result);
if($row > 0){
    ?>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Customer Name</th>
            <th scope="col">Mobile</th>
            <th scope="col">Email</th>
            <th scope="col">Message</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    
    <tbody>
        <?php
        while($row = mysqli_fetch_assoc($result)){
            ?>
            <tr>
            <td><?php echo $row['id']?></td>
            <td><?php echo $row['cname']?></td>
            <td><?php echo $row['cmobile']?></td>
            <td><?php echo $row['cemail']?></td>
            <td><?php echo $row['cmessage']?></td>
            <td><a href="customer-contacted-edit.php?id=<?php echo $row['id'] ?>"><button>Edit</button></a></td>
            <td><a href="customer-contacted-delete.php?id=<?php echo $row['id']?>"><button>Delete</button></a></td>
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
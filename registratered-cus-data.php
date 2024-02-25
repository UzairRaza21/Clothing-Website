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

    <!-- Registrated Customer Data Start -->
    <?php
include ('conn.php');
$sql = "SELECT * FROM `user`";
$result = mysqli_query($conn, $sql);
$row = mysqli_num_rows($result);
if($row > 0){
    ?>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Customer ID</th>
            <th scope="col">User Name</th>
            <th scope="col">Full Name</th>
            <th scope="col">Email</th>
            <th scope="col">Password</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    
    <tbody>
        <?php
        while($row = mysqli_fetch_assoc($result)){
            ?>
            <tr>
                <!-- We enter column name mention in sql database -->
            <td><?php echo $row['id']?></td>
            <td><?php echo $row['username']?></td>
            <td><?php echo $row['fullname']?></td>
            <td><?php echo $row['email']?></td>
            <td><?php echo $row['passwor']?></td>
            <td><a href="registrated-cus-edit-del.php?cid=<?php echo $row['id'] ?>"><button>Edit</button></a></td>
            <td><a href="registrated-cus-delete.php?cid=<?php echo $row['id']?>"><button>Delete</button></a></td>
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
    
   <!-- Registrated Customer Data End -->
    
    <script src="./app.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  </body>
  </html>
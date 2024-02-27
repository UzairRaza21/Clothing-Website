<?php
    $p_id = $_POST['product-id'];
    $pname = $_POST['product-name'];
    $pdescription = $_POST['product-description'];
    $pprice = $_POST['product-price'];
    $pimage = $_POST['product-image'];
    include('conn.php');


$sql = "UPDATE `product` SET `product_name` = '{$pname}', `product_description` = '{$pdescription}', `product_price` = '{$pprice}', `product_image` = '{$pimage}' WHERE product_id = '{$p_id}'";
$result = mysqli_query($conn, $sql) or die ("Query not successful");

header('location: product-edit.php');
mysqli_close($conn);


?>
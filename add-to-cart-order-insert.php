<?php
session_start();
  if(isset($_POST['buy'])){
    include 'login-auth.php';
    include ("conn.php");

    $uid = $_SESSION['id'];
    $ordered_pid = $_POST['pid'];
    $order_product_name = $_POST['product_name'];
    $ordered_price = $_POST['price'];
    $qty = $_POST['qty'];
    $subtotal = $ordered_price * $qty;
echo $uid;
    $sql_order = "INSERT INTO `order`( `product_id`, `user_id` , `product_name`, `product_price`, `qty`, `subtotal`) VALUES ('$ordered_pid', '$uid', '$order_product_name', '$ordered_price','$qty','$subtotal')";

    $result = mysqli_query($conn, $sql_order);

    header('location: add-to-cart.php');
}

?>
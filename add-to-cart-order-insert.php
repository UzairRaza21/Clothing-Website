<?php
  if(isset($_POST['buy'])){
    include 'login-auth.php';
    include ("conn.php");

    $uid = $_SESSION['id'];
    $ordered_pid = $_POST['pid'];
    $ordered_price = $_POST['price'];
    $qty = $_POST['qty'];


    $subtotal = $ordered_price * $qty;

    $sql_order = "INSERT INTO `order`( `pid`, `uid`, `price`, `qty`, `subtotal`) VALUES ('$ordered_pid','$uid','$ordered_price','$qty','$subtotal')";

    $result = mysqli_query($conn, $sql_order);

    header('location: add-to-cart.php');
}

?>
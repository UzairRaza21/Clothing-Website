<?php
echo $customer_id = $_GET['cid'];
include('conn.php');
$sql = "DELETE FROM `user` WHERE id = '{$customer_id}'";
$result = mysqli_query($conn, $sql) or die ("Query Unsuccessful");
header("location: http://localhost/Clothing Store/registratered-cus-data.php");
mysqli_close($conn);
?>
<?php
echo $cus_id = $_GET['id'];
include('conn.php');
$sql = "DELETE FROM `contact` WHERE id = '{$cus_id}'";
$result = mysqli_query($conn, $sql) or die ("Query Unsuccessful");
header("location: customer-contacted.php");
mysqli_close($conn);
?>
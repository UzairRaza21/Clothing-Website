<?php

if (isset($_POST['subBtn'])){
include('conn.php');

$cname = $_POST['cname'];
$cmobile = $_POST['cmobile'];
$cemail = $_POST['cemail'];
$cmessage = $_POST['cmessage'];

$sql = "UPDATE `contact` SET `cname` = '{$cname}', `cmobile` = '{$cmobile}', `cemail` = '{$cemail}', `cmessage` = '{$cmessage}' WHERE id = '{$cus_id}'";
$result = mysqli_query($conn, $sql) or die ("Query not successful");

header('location: customer-contacted.php');
mysqli_close($conn);

}
?>
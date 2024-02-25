<?php

$contact_id = $_POST['contact-id'];
$contact_name = $_POST['contact-name'];
$contact_mobile = $_POST['contact-mobile'];
$contact_email = $_POST['contact-email'];
$contact_message = $_POST['contact-message'];
include('conn.php');

$sql = "UPDATE `contact` SET `cname` = '{$contact_name}', `cmobile` = '{$contact_mobile}', `cemail` = '{$contact_email}', `cmessage` = '{$contact_message}' WHERE id = '{$contact_id}'";
$result = mysqli_query($conn, $sql) or die ("Query not successful");
mysqli_close($conn);
header("Location: http://localhost/Clothing Store/customer-contacted.php");

?>
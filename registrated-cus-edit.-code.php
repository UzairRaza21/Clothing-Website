<?php

$customer_id =$_POST['userid'];
$c_username = $_POST['username'];
$c_fullname = $_POST['fullname'];
$c_email = $_POST['email'];
$c_passwor = $_POST['passwor'];
$c_cpassword = $_POST['cpassword'];

include('conn.php');
$sql = "UPDATE `user` SET `username`='{$c_username}',`fullname`='{$c_fullname}',`email`='{$c_email}',`passwor`='{$c_passwor}',`cpassword`='{$c_cpassword}' WHERE id = {$customer_id} ";
$result = mysqli_query($conn, $sql) or die ("Query Unsuccessful");
mysqli_close($conn);
header("Location: http://localhost/Clothing Store/registratered-cus-data.php");
   
?> 
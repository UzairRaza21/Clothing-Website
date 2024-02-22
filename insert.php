<?php

if(isset($_POST['submitted'])){
    include("conn.php");

    $cname = $_POST['cname'];
    $cmobile = $_POST['cmobile'];
    $cemail = $_POST['cemail'];
    $cmessage = $_POST['cmessage'];

    $sql = "INSERT INTO `contact`(`cname`, `cmobile`, `cemail`, `cmessage`) VALUES ('$cname','$cmobile','$cemail','$cmessage')";
    $result = mysqli_query($conn, $sql) or die ("Query not Successfull");
    mysqli_close($conn);
    header("location: contact.php");

}

?>
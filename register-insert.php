<?php
if (isset($_POST['register'])){
    include("conn.php");

    if($_POST['passwor'] != $_POST['cpassword']){
        echo "Please enter same password";
    }else{
        $cusername = $_POST['username'];
        $cfullname = $_POST['fullname'];
        $cemail = $_POST['email'];
        $cpassword = $_POST['passwor'];
        $ccpassword = $_POST['cpassword'];

        $sql = "INSERT INTO `user`(`username`, `fullname`, `email`, `passwor`, `cpassword`) VALUES ('{$cusername}','{$cfullname}','{$cemail}','{$cpassword}','{$ccpassword}')";
        $result = mysqli_query($conn, $sql) or die ("Query not successful");
        mysqli_close($conn);
        header ("Location: http://localhost/Clothing Store/login.php");

    }
}

?>
<?php

if(isset($_POST['upload-product'])){
    include("conn.php");

    $pname = $_POST['product-name'];
    $pdescription = $_POST['product-description'];
    $pprice = $_POST['product-price'];

    // image upload code start
    $pimage_name = $_FILES['product-image']['name'];
    $pimage_temp_name = $_FILES['product-image']['tmp_name'];
    move_uploaded_file($pimage_temp_name,  "uploaded-Products/" . $pimage_name ); 
    // image upload code end

    $sql = "INSERT INTO `product`(`product_name`, `product_description`, `product_price` , `product_image`) VALUES ('{$pname}','{$pdescription}','{$pprice}' ,'{$pimage_name}')";

    $result = mysqli_query($conn, $sql) or die ("Query not Successfull");
   
    mysqli_close($conn);
    header("location: products-upload.php");

}

?>
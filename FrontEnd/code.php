<?php

require 'dbconnection.php';

if(isset($_POST['save_product'])){
    $product_name = mysql_real_escape_string($con, $_POST['productName']);
    $product_discription = mysql_real_escape_string($con, $_POST['productDiscription']);
    $product_image = mysql_real_escape_string($con, $_POST['productImage']);
    $product_quantity = mysql_real_escape_string($con, $_POST['productQuantity']);
    $product_price = mysql_real_escape_string($con, $_POST['productPrice']);

    $query = "INSERT INTO playtech (productName, productDiscription, productImage, productQuantity, productPrice) values ()"
}

?>
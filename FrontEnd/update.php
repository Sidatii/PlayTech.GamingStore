<?php
    require 'dbconnection.php';

        $product_id = mysqli_real_escape_string($con, $_GET['ID']);
        $product_name = mysqli_real_escape_string($con, $_POST['productName']);
        $product_discription = mysqli_real_escape_string($con, $_POST['productDiscription']);
        $product_quantity = mysqli_real_escape_string($con, $_POST['productQuantity']);
        $product_price = mysqli_real_escape_string($con, $_POST['productPrice']);
        $category_id = mysqli_real_escape_string($con, $_POST['IDC']);


        $filename = $_FILES["productImage"]["name"];
        $tempname = $_FILES["productImage"]["tmp_name"];
        $folder = "./image/" . $filename;

        move_uploaded_file($tempname, $folder);

        if ($filename == null ) {

            $query = "UPDATE `produits` SET `ProductName`='$product_name', `Discription`='$product_discription', `Quantity`='$product_quantity', `Price en DH`='$product_price' WHERE ID='$product_id'";
            
        } else{
           $query = "UPDATE `produits` SET `ProductName`='$product_name', `Discription`='$product_discription', `Quantity`='$product_quantity', `Price en DH`='$product_price', `IDC`='$category_id', `img`='$filename' WHERE ID='$product_id'";
        }


        // Now let's move the uploaded image into the folder: image
        $query_run = mysqli_query($con, $query);

        if ($query_run) {
            $_SESSION['message'] = "Product updated successfully";
            header("Location: GestionProduits.php");
            exit(0);
        } else {
            $_SESSION['message'] = "Product not updated";
            header("Location: GestionProduits.php");
            exit(0);
        }
    

    ?>
<?php
session_start();
include_once('dbconnection.php');
?>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="ajoutez.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit product</title>
</head>

<body>

    

    <div class="form" style="margin-top:20px;">
        <?php include('message.php') ?>
        <?php

        if (isset($_GET['ID'])) {
            $product_id = mysqli_real_escape_string($con, $_GET['ID']);
            $query = "SELECT * from produits where ID='$product_id'";
            $query_run = mysqli_query($con, $query);

            if (mysqli_num_rows($query_run) > 0) {
                $products = mysqli_fetch_array($query_run);
        ?>


        <a href="GestionProduits.php" class="back_btn"><img src="images/back.png"> Retour</a>
        <h2>Edit product</h2>
        <form method="POST" enctype="multipart/form-data" action="update.php?ID=<?=  $_GET['ID'] ?>">
            <input type="hidden" name="product_id" value="<?= $product_id ?>">
            <label>Product name</label>
            <input type="text" value=" <?= $products['ProductName'] ?>" name="productName" required>
            <label>Product discription</label>
            <input class="discription" type="text" value=" <?= $products['Discription'] ?>" name="productDiscription" id="" style="height: 100px;" required></input>
            <label>Product image</label>
            <input type="file" name="productImage" accept="image/*" >
            <label>Product Quantity</label>
            <input type="text" value=" <?= $products['Quantity'] ?>" name="productQuantity" required>
            <label>Product Price</label>
            <input type="float" value=" <?= $products['Price en DH'] ?>" name="productPrice" required>
            <label>Product Price</label>

            <select name="IDC" id="">
            
            <?php
            include('dbconnection.php');
            //requête pour afficher la liste des employés
            $req = mysqli_query($con, "SELECT * FROM category");

            while ($row = mysqli_fetch_assoc($req)) {
            ?>
            <di class="filterbox w-10">

            <option value="<?= $row['IDC'] ?>">
            <?= $row['CatName'] ?>
            </option>
            <?php
            }
            ?>
            </select>

            <input type="submit" value="Edit product" name="edit_product">
        </form>

            <?php

            } else {
                echo "ID not found";
            }
        }
        ?>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
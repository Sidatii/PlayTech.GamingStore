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
    <title>Document</title>
</head>

<div class="form" style="margin-top:20px;">
    <?php include('message.php') ?>

        <a href="GestionProduits.php" class="back_btn"><img src="images/back.png"> Retour</a>
        <h2>Update product</h2>
        <?php

        if(isset($_GET['id']))
        {
            $product_id = mysqli_real_escape_string($con, $_GET['ID']);
            $query = "SELECT * FROM produits WHERE id='$product_id'";
            $query_run = mysqli_query($con, $query);

            if(mysqli_num_rows($query_run) > 0)
            {
                $produits = mysqli_fetch_array($query_run);
                ?>
        <form method="POST">
            <label>Product name</label>
            <input type="text" name="productName" required>
            <label>Product discription</label>
            <textarea name="productDiscription" id="" style="height: 100px;" required></textarea>
            <label>Product image</label>
            <input type="file" name="productImage" accept="image/*" required>
            <label>Product Quantity</label>
            <input type="number" name="productQuantity" required>
            <label>Product Price</label>
            <input type="float" name="productPrice" required>
            <label>Product Price</label>
            <select name="IDC" id="">
                <?php
                include('connexion.php');
                //requête pour afficher la liste des employés
                $req = mysqli_query($conn, "SELECT * FROM category");

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

            <input type="submit" value="Add product" name="add_product">
        </form>
        <?php
                            }
                            else
                            {
                                echo "<h4>No Such Id Found</h4>";
                            }
                        }
                        ?>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
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
    <title>Edit category</title>
</head>

<body>

    

    <div class="form" style="margin-top:20px;">
        <?php include('message.php') ?>
        <?php

        if (isset($_GET['IDC'])) {
            $category_id = mysqli_real_escape_string($con, $_GET['IDC']);
            $query = "SELECT * from category where ID='$category_id'";
            $query_run = mysqli_query($con, $query);

            if (mysqli_num_rows($query_run) > 0) {
                $category = mysqli_fetch_array($query_run);
        ?>


        <a href="GestionProduits.php" class="back_btn"><img src="images/back.png"> Retour</a>
        <h2>Edit category</h2>
        <form method="POST" enctype="multipart/form-data" action="updatecategory.php?ID=<?=  $_GET['IDC'] ?>">
            <input type="hidden" name="category_id" value="<?= $category_id ?>">
            <label>Category name</label>
            <input type="text" value=" <?= $pcategory['catName'] ?>" name="catName" required>
            
            
                <?php
                include('dbconnection.php');
                $req = mysqli_query($con, "SELECT * FROM category");

                while ($row = mysqli_fetch_assoc($req)) {
                ?>
                <di class="filterbox w-10">

                    <?php
                }
        ?>
            </select>

            <input type="submit" value="Edit category" name="edit_category">
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
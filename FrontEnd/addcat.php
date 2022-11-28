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

<body style="background: linear-gradient(122.71deg, #3A6186 0%, #89253E 89.58%);
  background-repeat: no-repeat; height: 100vh">

    <?php
    require 'dbconnection.php';

    if (isset($_POST['add_category'])) {
        $product_name = mysqli_real_escape_string($con, $_POST['productName']);
       
        $query = "INSERT INTO `category` ( `CatName`)
         VALUES ('$product_name')";

        $query_run = mysqli_query($con, $query);
        
        if ($query_run) {
            $_SESSION['message'] = "category added successfully";
            header("Location: addcat.php");
            exit(0);
        } else {
            $_SESSION['message'] = "category not added";
            header("Location: addcat.php");
            exit(0);
        }
    }

    ?>

    <div class="form" style="margin-top:20px;">
    <?php include('message.php') ?>

        <a href="GestionProduits.php" class="back_btn"><img src="images/back.png"> Retour</a>
        <h2>Add new product</h2>
        <form method="POST"  enctype="multipart/form-data">
            <label>Product name</label>
            <input type="text" name="productName" required>

            <input type="submit" value="Add product" name="add_category">
        </form>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
<?php
require('dbconnection.php');
include('message.php');

if (isset($_POST['edit_category'])) {
    $category_id = mysqli_real_escape_string($con, $_GET['ID']);
    $category_name = mysqli_real_escape_string($con, $_POST['catName']);

    $query = "UPDATE `category` SET `catName`='$category_name' WHERE IDC='$category_id'";

    $query_run = mysqli_query($con, $query);
    if ($query_run) {
        $_SESSION['message'] = "category updated successfully";

    } else {
        $_SESSION['message'] = "category not updated";
exit(0);
    }

}
header('Location: GestionProduits.php');
exit(0);

?>
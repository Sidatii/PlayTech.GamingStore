<html lang="en">
<head>
    <link rel="stylesheet" href="ajoutez.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
       //verify whether the button is clicked
       if(isset($_POST['button'])){
        // extraction of Information sent through variables using POST method
           extract($_POST);
           //verify whether all fields are filled
           if(isset($nom) && isset($prenom) && $age){
                //database connection
                include_once "connexion.php";
                //requête d'ajout
                $req = mysqli_query($con , "INSERT INTO produits VALUES( '$nom', '$prenom','$age')");
                if($req){//si la requête a été effectuée avec succès , on fait une redirection
                    header("location: GestionProduits.php");
                }else {//si non
                    $message = "Employé non ajouté";
                }

           }else {
               //si non
               $message = "Veuillez remplir tous les champs !";
           }
       }
    
    ?>

<div class="form">
    <a href="GestionProduits.php" class="back_btn"><img src="images/back.png"> Retour</a>
    <h2>Add new product</h2>
    <p class="error_message">
        <?php 
        // si la variable message existe , affichons son contenu
        if(isset($message)){
            echo $message;
        }
        ?>

    </p>
    <form action="" method="POST">
        <label>Product name</label>
        <input type="text" name="productName">
        <label>Product discription</label>
        <textarea name="productDiscription" id="" cols="30" rows="10"></textarea>
        <label>Product image</label>
        <input type="file">
        <label>Product Quantity</label>
        <input type="number" name="quantity">
        <label>Product Price</label>
        <input type="number" name="productPrice">
        <input type="submit" value="Add product" name="button">
    </form>
</div>

</body>
</html>
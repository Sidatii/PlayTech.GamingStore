<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter</title>
    <link rel="stylesheet" href="ajoutez.css">
</head>

<body>
    <?php
    include_once "connexion.php";
    //vérifier que le bouton ajouter a bien été cliqué
    if (isset($_POST['button'])) {
        $nom = $_POST['nom'];
        $quantite = $_POST['quantite'];
        //extraction des informations envoyé dans des variables par la methode POST
        //verifier que tous les champs ont été remplis
        $req = mysqli_query($conn, "INSERT INTO produits ( ProductName,Quantity,) VALUES( '$nom',$quantite)");
        if (mysqli_query($conn, $req)) {
            echo "New record created successfully";
          } else {
            echo "Error: " . $req . "<br>" . mysqli_error($conn);
          }
          
    }


    ?>
    <div class="form">
        <p class="erreur_message">
            <?php
            // si la variable message existe , affichons son contenu
            if (isset($message)) {
                echo $message;
            }
            ?>

        </p>
        <form action="" method="POST">
            <label>Nom</label>
            <input type="text" name="nom">
            <label>âge</label>
            <input type="number" name="quantite">
            <input type="submit" value="Ajouter" name="button">
        </form>
    </div>
</body>

</html>
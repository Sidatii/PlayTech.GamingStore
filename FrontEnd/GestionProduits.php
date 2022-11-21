<?php
//inclure la page de connexion
include_once "connexion.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  <style>
    input {
      width: 100%;
      height: 100%;
      border: none;
      background: none;
    }

    img {
      height: 25px;
    }
  </style>
</head>

<body class="body">

  <?php
  include('navbar.php');
  ?>
  <br><br><br>
  <div class="container">
    <!-- categorie table  -->
    <table class="table table-bordered bg-light text-center">
      <thead>
        <th colspan="2">
          <h3>catégorie</h3>
          <?php
          //requête pour afficher la liste des employés
          $req = mysqli_query($conn, "SELECT * FROM category");
          if (mysqli_num_rows($req) == 0) {
            //s'il n'existe pas d'employé dans la base de donné , alors on affiche ce message :
            echo "Il n'y a pas encore de category ajouter !";
          } else { ?>
        </th>
      </thead>
      <tr>
        <th>IDC</th>
        <th>CatName</th>
      </tr>
      <tr>
        <?php
            //si non , affichons la liste de tous les employés
            while ($row = mysqli_fetch_assoc($req)) {
        ?>
          <td><?= $row['IDC'] ?></td>
          <td><?= $row['CatName'] ?></td>

      </tr>
  <?php
            }
          }
  ?>


    </table>
    <!-- ajouter categorie -->
    <table class="table table-bordered bg-light text-center">
      <thead>
        <tr>
          <th colspan="2">
            <H3>ajouter une nouvelle catégorie</H3>
          </th>
        </tr>
      </thead>
      <tr>
        <?php
        if (isset($_POST['button'])) {
          //extraction des informations envoyé dans des variables par la methode POST
          extract($_POST);
          //verifier que tous les champs ont été remplis
          if (isset($CatName)) {
            //connexion à la base de donnée
            include_once "connexion.php";
            //requête d'ajout
            $req = mysqli_query($conn, "INSERT INTO category VALUES( '$CatName')");
            if ($req) { //si la requête a été effectuée avec succès , on fait une redirection
              header("location: GestionProduits.php");
            } else { //si non
              $message = "Employé non ajouté";
            }
          } else {
            //si non
            $message = "Veuillez remplir tous les champs !";
          }
        }

        ?>
        <form action="">
          <td><input type="text" placeholder="name" name="CatName"></td>
          <td><input value="ajouter" type="button"></td>
        </form>
      </tr>
    </table>
    <!-- produit table  -->
    <table class="table table-bordered bg-light text-center">
      <thead>
        <th colspan="6">
          <h3>produit</h3>
          <?php
          //requête pour afficher la liste des employés
          $req = mysqli_query($conn, "SELECT * FROM produits");
          if (mysqli_num_rows($req) == 0) {
            //s'il n'existe pas d'employé dans la base de donné , alors on affiche ce message :
            echo "Il n'y a pas encore d'employé ajouter !";
          } else {
          ?>
        </th>
      </thead>
      <tr>
        <th>id</th>
        <th>Name</th>
        <th>prix</th>
        <th>quantité</th>
        <th>idc</th>
        <th>Modifier</th>
        <th>Supprimer</th>
      </tr>
      <?php
            //si non , affichons la liste de tous les employés
            while ($row = mysqli_fetch_assoc($req)) {
      ?>
        <tr>
          <td><?= $row['ID'] ?></td>
          <td><?= $row['ProductName'] ?></td>
          <td><?= $row['Price en DH'] ?></td>
          <td><?= $row['Quantity'] ?></td>
          <td><?= $row['IDC'] ?></td>
          <!--Nous alons mettre l'id de chaque employé dans ce lien -->
          <td><a href="modifier.php?ID=<?= $row['ID'] ?>"><img src="images/pen.png"></a></td>
          <td><a href="supprimer.php?ID=<?= $row['ID'] ?>"><img src="images/trash.png"></a></td>

        </tr>
    <?php
            }
          }
    ?>
    </table>
    <!-- ajouter produit -->
    <table class="table table-bordered bg-light text-center">
      <thead>
        <tr>
          <th colspan="5">
            <H3>ajouter un nouveau produit</H3>
          </th>
        </tr>
      </thead>
      <tr>
        <form action="" method="POST">
          <td><input type="text" placeholder="ProductName" name="ProductName"></td>
          <td><input type="number" placeholder="Price" name="Price"></td>
          <td><input type="number" placeholder="Quantity"></td>
          <td><input type="text" placeholder="IDC"></td>
          <!-- <td><input type="submit" value="Ajouter" name="button"></td> -->
          <td><a href="ajouter.php">ajouter</a></td>
        </form>
      </tr>
    </table>
  </div>


  <?php
  include('footer.php');
  ?>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
</body>

</html>
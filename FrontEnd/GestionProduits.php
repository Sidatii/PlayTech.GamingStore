<?php
session_start();
include_once "dbconnection.php";
?>
<!DOCTYPEhtml>
  <html lang="en">

  <head>
    <link rel="shotcut icon" type="image/x-icon" href="images/playtech_logo.svg">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
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
      <?php include('message.php'); ?>
      <!-- categorie table  -->
      <table class="table table0">
        <thead>
          <th colspan="3">
            <!-- colspan="4" -->
            <h3>catégorie</h3>
            <?php
            //requête pour afficher la liste des category
            $req = mysqli_query($con, "SELECT * FROM category");
            if (mysqli_num_rows($req) == 0) {
              //s'il n'existe pas d'category dans la base de donné , alors on affiche ce message :
              echo "Il n'y a pas encore de category ajouter !";
            } else {
              //si non , affichons la liste 
            ?>
          </th>
        </thead>
        <tr>
          <th>IDC</th>
          <th>CatName</th>
          <th>Action</th>
        </tr>
        <tr>
          <?php
              //si non , affichons la liste 
              while ($row = mysqli_fetch_assoc($req)) {
          ?>
            <td>
              <?= $row['IDC'] ?>
            </td>
            <td>
              <?= $row['CatName'] ?>
            </td>
            <td>
              <a href="editcategory.php?ID=<?= $row['IDC'] ?>"><img class="hh" src="images/pen.png"></a>
            </td>
        </tr>
    <?php }
            } ?>

    <tr>
      <td class="preactions" colspan="7"><a class="actions" href="addcat.php">Ajouter</a></td>
    </tr>


      </table>
      <!-- produit table  -->
      <table class="table table0">
        <thead>
          <?php include('message.php'); ?>
          <th colspan="8">
            <h3>produit</h3>
            <?php
            //requête pour afficher la liste des produits
            $req = mysqli_query($con, "SELECT * FROM produits");
            if (mysqli_num_rows($req) == 0) {
              //s'il n'existe pas de produits dans la base de donné , alors on affiche ce message :
              echo "Il n'y a pas encore de produits ajoutés !";
            } else {
              //si non , affichons la liste de tous les produits
            ?>
          </th>
        </thead>
        <tr>
          <th>id</th>
          <th>Name</th>
          <th>prix</th>
          <th>quantité</th>
          <th>images</th>
          <th>Action</th>
        </tr>
        <?php
              while ($row = mysqli_fetch_assoc($req)) {
        ?>
          <tr>
            <td>
              <?= $row['ID'] ?>
            </td>
            <td>
              <?= $row['ProductName'] ?>
            </td>
            <td>
              <?= $row['Price en DH'] ?>
            </td>
            <td>
              <?= $row['Quantity'] ?>
            </td>
            <td><img src="./image/<?php echo $row['img']; ?>"></td>
            <td>
              <!--Nous alons mettre l'id de chaque produits dans ce lien (editproduct.php?ID=)pour modifier -->
              <a href="editproduct.php?ID=<?= $row['ID'] ?>"><img class="hh" src="images/pen.png" style="margin-right: 5px;"></a>
              <!--Nous alons mettre l'id de chaque produits dans ce lien (editproduct.php?ID=)pour supprimer -->
              <a href="supprimer.php?ID=<?= $row['ID'] ?>"><img class="hh" src="images/trash.png"></a>
            </td>
          </tr>
      <?php
              }
            }
      ?>
      <tr>
        <td colspan="7"><a class="actions" href="add.php">Ajouter</a></td>
      </tr>
      </table>
    </div>



  </body>

  </html>
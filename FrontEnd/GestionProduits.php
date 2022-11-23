<?php
session_start();
include_once "connexion.php";
?>
<!DOCTYPEhtml>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous"> -->
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
          <th colspan="4">
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
              //si non , affichons la liste 
              while ($row = mysqli_fetch_assoc($req)) {
            ?>
          <td>
            <?= $row['IDC'] ?>
          </td>
          <td>
            <?= $row['CatName'] ?>
          </td>
          <td><a href="editcategory.php?ID=<?= $row['IDC'] ?>"><img class="hh" src="images/pen.png"></a></td>
  

        </tr>
        <?php }
            } ?>

        <tr>
          <td colspan="7"><a href="addcat.php">ajouter</a></td>

        </tr>


      </table>
      <!-- produit table  -->
      <table class="table table-bordered bg-light text-center">
        <thead>
          <?php include('message.php'); ?>
          <th colspan="8">
            <h3>produit</h3>
            <?php
            //requête pour afficher la liste des employés
            $req = mysqli_query($conn, "SELECT * FROM produits");
            if (mysqli_num_rows($req) == 0) {
              //s'il n'existe pas de produits dans la base de donné , alors on affiche ce message :
              echo "Il n'y a pas encore de produits ajoutés !";
            } else {
            ?>
              </th>
              </thead>
              <tr>
                <th>id</th>
                <th>Name</th>
                <th>prix en DH</th>
                <th>quantité</th>
                <th>images</th>
                <th>Modifier</th>
                <th>Supprimer</th>
              </tr>
              <?php
              //si non , affichons la liste de tous les employés
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
                <!--Nous alons mettre l'id de chaque employé dans ce lien -->
                <td><a href="editproduct.php?ID=<?= $row['ID'] ?>"><img class="hh" src="images/pen.png"></a></td>
                <td><a href="supprimer.php?ID=<?= $row['ID'] ?>"><img class="hh" src="images/trash.png"></a></td>
              </tr>
              <?php
              }
            }
            ?>
        <tr>
          <td colspan="7"><a href="add.php">ajouter</a></td>
        </tr>
      </table>
    </div>


    <?php
    include('footer.php');
    ?>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script> -->
  </body>

  </html>
<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="styles.css">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PlayTech | Gallery</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>

<body class="body">
  <?php
  include('navbar.php');
  ?>
  <br><br><br>
  <div class="galleryheader" id="galleryheader">
    <img src="images/gallery.jpg" alt="Gaming room">
    <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit, animi! Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos qui sint non autem? Molestiae ratione quae cum, nihil ipsum officia sed assumenda, eos at optio aperiam et accusamus odio asperiores.</h3>
  </div>
  <!-- change by mokh -->
  <?php
  include('connexion.php');
  //requête pour afficher la liste des employés
  $req = mysqli_query($conn, "SELECT * FROM category");

  while ($row = mysqli_fetch_assoc($req)) {
  ?>
    <di class="filterbox w-10">
      <button class="btn btn-outline-light"><?= $row['CatName'] ?></button>
    <?php
  }
    ?>
    </di>
    <div class="products">
  
        <?php
        include('connexion.php');
        //requête pour afficher la liste des employés
        $req = mysqli_query($conn, "SELECT * FROM produits");

        while ($row = mysqli_fetch_assoc($req)) {
        ?>
            <div class="productCard" style="width:300px; height:250px;">
          <img src="image/<?= $row['img'] ?>" alt="product photo">
          <h4><?= $row['ProductName'] ?></h4>
          <h4><?= $row['Price en DH'] ?> DH</h4>
          <h4><?= $row['Quantity'] ?></h4>
          <h4><?= $row['Discription'] ?></h4>
      </div>
      <?php
        }
        ?>
    </div>
        <!-- mokh change termine -->
        <?php
        include('footer.php');
        ?>

</body>

</html>
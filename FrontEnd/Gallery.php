<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="styles.css">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PlayTech | Gallery</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body class="body">
  <?php
  include('navbar.php');
  ?>
  <br><br><br>
  <div class="opening">

    <img class="atari div1" src="images/gallery.jpg" alt="Remember our past" width="50%">
    <p class="text-light div2">Lorem ipsum dolor sit amet consectetur adipisicing elit. A quod ea doloribus dolorem? Suscipit, porro ullam necessitatibus quod at officiis velit consectetur veritatis tenetur quia. Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur accusamus corrupti quod, totam ratione officiis? Quisquam, eveniet laudantium. Recusandae, earum.</p>
    <img class="atari div4" src="images/2738.jpg" alt="all about gaming" width="50%">
  </div>
  <!-- change by mokh -->

  <center>
    <div class="filterbox w-10 filter0">
      <?php
      include('connexion.php');
      //requête pour afficher la liste des category
      $req = mysqli_query($conn, "SELECT * FROM category");

      while ($row = mysqli_fetch_assoc($req)) {
        echo '<a class="btn btn-outline-light m-1 filter" href="?category=' . $row["IDC"] . '">' . $row['CatName'] . '</a>';
      }
      ?>
    </div>
  </center>

  <div class="products">

    <?php
    include('connexion.php');
    //requête pour afficher la liste des produits
    if (isset($_GET['category'])) {

       {
        if($_GET['category']==1){
          $sql = "SELECT * FROM produits";
      $req = mysqli_query($conn, $sql);
      $docimg="image/";
      while ($row = mysqli_fetch_assoc($req)) {
        echo '
              <div class="productCard" style="width:300px; height:250px;">
                <img src="'.$docimg. $row['img'] . '" alt="product photo">
                <h4>' . $row['ProductName'] . '</h4>
                <h4>' . $row['Price en DH'] . ' dh</h4>
                <h4>' . $row['Discription'] . '</h4>
              </div>
              ';
      }
        }else{
        $category = $_GET['category'];
        $sql = "SELECT * FROM produits WHERE IDC = $category";
        $req = mysqli_query($conn, $sql);
        $docimg="image/";
        while ($row = mysqli_fetch_assoc($req)) {
          echo '
                <div class="productCard" style="width:300px; height:250px;">
                  <img src="' .$docimg. $row['img'] . '" alt="product photo">
                  <h4>' . $row['ProductName'] . '</h4>
                  <h4>' . $row['Price en DH'] . ' dh</h4>
                  <h4>' . $row['Discription'] . '</h4>
                </div>';
        }
       }
      }
    }
     else {
      $sql = "SELECT * FROM produits";
      $req = mysqli_query($conn, $sql);
      $docimg="image/";
      while ($row = mysqli_fetch_assoc($req)) {
        echo '
              <div class="productCard" style="width:300px; height:250px;">
                <img src="' .$docimg. $row['img'] . '" alt="product photo">
                <h4>' . $row['ProductName'] . '</h4>
                <h4>' . $row['Price en DH'] . ' dh</h4>
                <h4>  '  . $row['Discription'] . '</h4>
              </div>
              ';
      }
    }
    ?>
  </div>
  <!-- mokh change termine -->
  <?php
  include('footer.php');
  ?>

</body>

</html>
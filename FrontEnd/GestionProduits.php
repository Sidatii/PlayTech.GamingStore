<?php
$servername = "localhost";
$username = "playtech";
$password = "";
$root="root";

// Create connection
$conn = new mysqli($servername,$root , $password, $username);

// Check connection
// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }
// echo "Connected successfully";
$sql = "INSERT INTO `category`( `CatName`) 
        VALUES ('pc')";
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
      width: 100% ;
      height: 100%;
      border: none;
      background: none;
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
        </th>
      </thead>
      <tr>
        <th>idc</th>
        <th>Name</th>
      </tr>
      <tr>
        <td>1</td>
        <td>c1</td>
      </tr>
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
        <td><input type="text"  placeholder="name" required ></td>
        <td><button class="btn btn-primary"> ajouter </button></td>
      </tr>
    </table>
    <!-- produit table  -->
    <table class="table table-bordered bg-light text-center">
      <thead>
        <th colspan="6">
          <h3>produit</h3>
        </th>
      </thead>
      <tr>
        <th>id</th>
        <th>Name</th>
        <th>prix</th>
        <th>quantité</th>
        <th>idc</th>
        <th>Modification</th>
      </tr>
      <tr>
        <td>1</td>
        <td>p1</td>
        <td>1000dh</td>
        <td>20</td>
        <td>1</td>
        <td><button type="button" class="btn btn-primary"> modifier </button><button type="button" class="btn btn-danger">supprimer</button></td>
      </tr>
      <tr>
        <td>2</td>
        <td>p2</td>
        <td>1000dh</td>
        <td>20</td>
        <td>1</td>
        <td><button type="button" class="btn btn-primary"> modifier </button><button type="button" class="btn btn-danger">supprimer</button></td>
      </tr>
      <tr>
        <td>3</td>
        <td>p2</td>
        <td>1000dh</td>
        <td>20</td>
        <td>1</td>
        <td><button type="button" class="btn btn-primary"> modifier </button><button type="button" class="btn btn-danger">supprimer</button></td>
      </tr>
      <tr>
        <td>4</td>
        <td>p2</td>
        <td>1000dh</td>
        <td>20</td>
        <td>1</td>
        <td><button type="button" class="btn btn-primary"> modifier </button><button type="button" class="btn btn-danger">supprimer</button></td>
      </tr>
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
        <td><input type="text" placeholder="name"></td>
        <td><input type="number" placeholder="prix"></td>
        <td><input type="number" placeholder="quantité"></td>
        <td><input type="text" placeholder="idc"></td>
        <td><button type="button" class="btn btn-primary"> ajouter </button></td>
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
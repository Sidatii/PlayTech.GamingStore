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
include ('navbar.php');
?>
<br><br><br>
<div class="galleryheader" id="galleryheader">
  <img src="images/gallery.jpg" alt="Gaming room">
  <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit, animi! Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos qui sint non autem? Molestiae ratione quae cum, nihil ipsum officia sed assumenda, eos at optio aperiam et accusamus odio asperiores.</h3>
</div>
<di class="filterbox w-10">
      <ul class="filter">
        <li class="category1"><button onclick="filterProduct('category1')">category 1</button> </li>
        <li class="category2"><button onclick="filterProduct('category2')">category 2</button></li>
        <li class="category3"><button onclick="filterProduct('category3')">category 3</button></li>
        <li class="category4"><button onclick="filterProduct('category4')">category 4</button></li>
        <li class="category5"><button onclick="filterProduct('category5')">category 5</button></li>
      </ul>
    </di>
<div class="products">
  <div class="productCard">
    <img src="images/test.png" alt="product photo">
    <h4>Product title</h4>
    <h4>Product price</h4>
    <h4>Product quantity</h4>
  </div>
  <div class="productCard">
    <img src="images/test.png" alt="product photo">
    <h4>Product title</h4>
    <h4>Product price</h4>
    <h4>Product quantity</h4>
  </div>
  <div class="productCard">
    <img src="images/test.png" alt="product photo">
    <h4>Product title</h4>
    <h4>Product price</h4>
    <h4>Product quantity</h4>
  </div>
  <div class="productCard">
    <img src="images/test.png" alt="product photo">
    <h4>Product title</h4>
    <h4>Product price</h4>
    <h4>Product quantity</h4>
  </div>
  <div class="productCard">
    <img src="images/test.png" alt="product photo">
    <h4>Product title</h4>
    <h4>Product price</h4>
    <h4>Product quantity</h4>
  </div>
  <div class="productCard">
    <img src="images/test.png" alt="product photo">
    <h4>Product title</h4>
    <h4>Product price</h4>
    <h4>Product quantity</h4>
  </div>
  <div class="productCard">
    <img src="images/test.png" alt="product photo">
    <h4>Product title</h4>
    <h4>Product price</h4>
    <h4>Product quantity</h4>
  </div>
  <div class="productCard">
    <img src="images/test.png" alt="product photo">
    <h4>Product title</h4>
    <h4>Product price</h4>
    <h4>Product quantity</h4>
  </div>
  <div class="productCard">
    <img src="images/test.png" alt="product photo">
    <h4>Product title</h4>
    <h4>Product price</h4>
    <h4>Product quantity</h4>
  </div>
  
</div>
</body>
</html>
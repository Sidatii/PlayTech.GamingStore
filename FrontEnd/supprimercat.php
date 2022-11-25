<?php
  //connexion a la base de données
  include_once "connexion.php";
  //récupération de l'id dans le lien
  $id= $_GET['IDC'];
  //requête de suppression
  $req = mysqli_query($conn , "DELETE FROM category WHERE IDC = $id");
  //redirection vers la page index.php
  header("Location:GestionProduits.php")
?>
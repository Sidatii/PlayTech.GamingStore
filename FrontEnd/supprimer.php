<?php
  //connexion a la base de données
  require 'dbconnection.php';
  //récupération de l'id dans le lien
  $id= $_GET['ID'];
  //requête de suppression
  $req = mysqli_query($con , "DELETE FROM produits WHERE ID = $id");
  //redirection vers la page index.php
  //
  header("Location:GestionProduits.php")
?>
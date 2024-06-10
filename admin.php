<!doctype html>
<html lang="en">
<head>
    <?php include 'include/head.php' ?>
    <title>Admin</title>
</head>
<body>
<?php include 'include/nav.php' ?>
<div class="container py-2">
    <?php
        if(!isset($_SESSION['utilisateur'])){
            header('location: connexion.php');
        }
    ?>

        <h3> Bonsoir <?php echo $_SESSION['utilisateur']['login'] ?> Voici quelque panier de course</h3>
        <div class="card" style=" max-width: 90%;">
  <img src="upload/produit/bourette.jpeg" class="card-img-top" alt="20">
</div>

</body>
</html>
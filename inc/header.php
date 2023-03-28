<?php
require_once("./inc/init.php")

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <!--  Universal Character Set Transformation Format - 8(est un format de codage de caractères)(viewport;pour responsive web design) -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--- link css ---->
    <link rel="stylesheet" href="css/style.css">
    <!--- link bootstrap5---->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <!--- link font google---->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Courgette&family=Montserrat&display=swap" rel="stylesheet">

    <title> Oye Men's Cosmetics </title>
</head>

<body class="pb-4">
    <header>
        <!--- header---->
        <nav class="navbar navbar-expand-lg navbar-light  ">
            <div class="container-fluid d-flex justify-content-end">
                <!--<div class=" container-fluid text-center">--->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand text-dark" href="index.php">
                    <img src="./img/ loressnina.PNG" width="50" height="50" class="d-inline-block align-center" alt="">
                    
                </a>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                    <ul class="navbar-nav ">
                        <li class="nav-item active">
                            <a class="nav-link text-dark" href="produit.php">Produits </a>
                        </li>
                        <!-- Si j'affiche les pages connexion/inscription -->
                        <?php if (!internauteEstConnecte()) { ?>
                            <li class="nav-item ">
                                <a class="nav-link text-dark outline-success" href="connexion.php">Connexion</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-dark" href="inscription.php">Inscription</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-dark" href="contact.php">Contact</a>
                            </li>
                        <?php } else { ?>
                            <li class="nav-item">
                                <a class="nav-link text-dark" href="profil.php">Mon Profil</a>
                            </li>


                        <?php } ?>

                        <li class="nav-item position_relative">
                            <?php if (isset($_SESSION["panier"]["id_produit"]) && count($_SESSION["panier"]["id_produit"]) > 0) { ?>
                                <span class='number_elem_in_cart'> <?php echo afficherNombreProduitsPanier(); ?> </span>

                            <?php } ?>
                            <a class="nav-link text-dark" href="panier.php">Panier</a>
                        </li>

                        <!-- Si l'internaute est connecté j'affiche le bouton de déconnexion -->
                        <?php if (internauteEstConnecte()) { ?>

                            <li class="nav-item">
                                <a class="nav-link  text-dark font-italic" href="connexion.php?action=deconnexion">
                                    Se déconnecter
                                </a>
                            </li>

                        <?php } ?>
                        <!-- pour connecté un theme des adminstateur  -->
                        <?php if (internauteEstConnecteEtAdmin()) { ?>
                            <li class="nav-item">
                                <a class="nav-link text-dark" href="admin/index.php">Back Office</a>
                            </li>
                        <?php } ?>

                    </ul>
                </div>
            </div>
            <!--< fin div class=" container-fluid text-center">--->

        </nav>
    </header>
    <main class="p-6">
        <div class="row col-sm-12 ">

</html>
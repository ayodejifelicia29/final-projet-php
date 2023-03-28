<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--- link bootstrap5---->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <!--- link font google---->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Courgette&family=Montserrat&display=swap" rel="stylesheet">
    <!--- link css ---->
    <link rel="stylesheet" href="css/styleAdmin.css">
    <title>Oye Men's Cosmetics</title>

</head>

<body class="pb-4">

    <header>
        <nav id="navigation" class="navbar navbar-expand-lg navbar-light justify-content-start ">
            <div class="container-fluid">
                <!--<div class=" container-fluid text-center">--->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand text-dark" href="index.php">
                    <img src="../img/female.png" width="100" height="100" class="d-inline-block align-center " alt="">
                    Espace Administrateur
                </a>

                <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                    <ul class="navbar-nav ">
                        <!-- Si je ne suis pas connecté j'affiche les pages connexion/inscription -->
                        <li class="nav-item active">
                            <a class="nav-link text-dark" href="../index.php">Oye men's Cosmetics</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="gestion_produits.php">Gestion des fiches produits</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="gestion_commandes.php">Gestion des commandes</a>
                        </li>


                        <!-- Si l'internaute est connecté j'affiche le bouton de déconnexion -->
                        <?php if (internauteEstConnecte()) { ?>

                            <li class="nav-item">
                                <a class="nav-link text-dark" href="../connexion.php?action=deconnexion">
                                    Se déconnecter
                                </a>
                            </li>

                        <?php } ?>
                    </ul>
                </div> <!--<fin div class nav>--->
            </div> <!--<fin div containner>--->
        </nav><!--<fin nav>--->
    </header><!--<fin header>--->
    <main class="bg-light p-5">
        <!--<commencer des main>--->
        <div class="row col-md-10 mx-auto justify-content-center">
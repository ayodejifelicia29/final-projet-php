<?php
require_once("./inc/init.php");

// SI je ne suis pas connecté je suis redirigé vers la page de connexions

if (!internauteEstConnecte()) {
    header("location:connexion.php");
    exit();
}

////////////////////////////////////////////
//////////// Récupération des commandes ////////////////
////////////////////////////////////////////

$stmt = $pdo->query('SELECT * FROM commande WHERE id_membre ="' . $_SESSION["membre"]["id_membre"] . '"');
require_once("./inc/header.php");
?>

<div class="col-md-12 p-2">
    <!-- Message de bienvenu si c'est le mr ou mme a connecte un admin -->
    <?php if ($_SESSION["membre"]["civilite"] == "m") { ?>
        <h2 class="text-center mb-5">Bonjour Mr <?= $_SESSION["membre"]["prenom"] . " " . $_SESSION["membre"]["nom"] ?>, bienvenue sur ma espace personnel !</h2>
    <?php } else { ?>
        <h2 class="text-center mb-5">Bonjour Mme <?= $_SESSION["membre"]["prenom"] . " " . $_SESSION["membre"]["nom"] ?>, bienvenue sur mon espace personnel !</h2>
    <?php } ?>
</div>

<div class="card col-md-8 p-2 m-auto" style="width:20rem">

    <!-- Avatar pictures -->
    <?php if ($_SESSION["membre"]["civilite"] == "m") { ?>
        <img src="./img/male.jpeg" alt="avatar male" class="card-img-top">
    <?php } else { ?>
        <img src="./img/female.png" alt="avatar female" class="card-img-top">
    <?php } ?>
    <!-- the formulaire for the admin when you connect to the profil -->
    <div class="card-body">
        <h5 class="card-title text-center"> <?= $_SESSION["membre"]["prenom"] . " " . $_SESSION["membre"]["nom"] ?> </h5>
    </div>

    <ul class="list-group list-group-flush p-4">
        <li class="list-group-item text-center"> <?= $_SESSION["membre"]["email"] ?> </li>
        <li class="list-group-item text-center"> <?= $_SESSION["membre"]["adresse"] ?> </li>
        <li class="list-group-item text-center "> <?= $_SESSION["membre"]["code_postal"] . " " . $_SESSION["membre"]["ville"] ?> </li>
    </ul>
    </body>
    <?php
    require_once("inc/footer.php");
    ?>
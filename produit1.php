<?php

require_once("./inc/init.php");

// je fais un select en base avec la catégorie sélectionnée pour récupérer les produits(dans la bdd)($r-request)
$r = $pdo->query("SELECT * FROM produit WHERE categorie = 'Parfum homme' ");
// Ouverture de la partie concernant les produits
$content .= "<div class='row col-md-12'>";
// j'itère dans mon PDOSTATEMENT EN FETCHANT LES DONNÉES EN ITÉRANT DANS CHAQUE ARRAY GÉNÉRÉ PAR LE FETCH
while ($produit = $r->fetch(PDO::FETCH_ASSOC)) { // retourne un tableau indexé par le nom de la colonne comme retourné dans le jeu de résultats
  // Génération de card boostrap à chaque fois qu'un produit est récupéré
  $content .= "<div  class=' container col-md-6 col-lg-3 pl-3 pr-2 pb-5'> 
    <div class='card pt-2 col-md-15  border border-secondary' style='width:17rem;'>
            <img style='cursor:pointer' class='shadow p-1 mb-5 bg-body rounded <p></p>card-img-top' src='$produit[photo]' alt='$produit[titre]' title='$produit[description]'>
                <div class='card-body'>
                    <h5 class='text-center card-title'>$produit[titre]</h5>
                    <p class='text-center card-text'>" . substr($produit["description"], 0, 35) . "..." . "</p>
                    <p class='text-center card-text'>$produit[prix] €</p>
                    <a href='fiche_produit.php?idProduit=$produit[id_produit]' class='d-flex justify-content-center btn btn-secondary' style='background-color:#c09167'>Voir le produit</a>
                </div>
            </div> </div>";
};
// Fermeture concernant la partie des produits
$content .= "</div >";


require_once("./inc/header.php");


?>

<div class="container p-5">

  <!-- Affiche une chaîne de caractères  dans le html -->
  <?php echo $content; ?>


</div>

<!-- Bootstrap CSS v5.2.0-beta1 -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">


<body>

  <?php
  require_once("inc/footer.php");
  ?>

  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous">
  </script>
</body>

</html>
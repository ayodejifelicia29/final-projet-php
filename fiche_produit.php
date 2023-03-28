<?php
require_once("./inc/init.php");

// idée générale : afficher les informations produit du produit sélectionné depuis index.php

if (!isset($_GET["idProduit"])) { // si je n'ai pas de paramètre $_GET["id_produit"]
    header("location:indexs.php"); // je suis redirigé vers index.php
    exit();
}

// Je récupère mon paramètre $_GET["id_produit"]
// je requête en base avec la valeur de id_produit récupérée
 //$stmt-variable (statement)
if (isset($_GET["idProduit"])) {
    $stmt = $pdo->query("SELECT * FROM produit WHERE id_produit = '$_GET[idProduit]' ");
    if ($stmt->rowCount() <= 0) {
        header("location:index.php"); // Si le produit n'éxiste pas en base je redirige(if the produt don't exit in the base i recrete it)
        exit();
    }
    $produit = $stmt->fetch(PDO::FETCH_ASSOC); // Je récupère le produit(i will get the produt )
}

require_once("./inc/header.php");

?>
       <!-- the  begining of card for panier  -->
<div class='card col-md-3 container my-5 py-5 ' style='width: 18rem;'>
    <img class='card-img-top' src='<?php echo $produit["photo"] ?>' alt='<?php echo $produit["titre"] ?>'>
    <div class='card-body'>
        <h5 class='card-title text-center'><?php echo $produit["titre"] ?></h5>
        <p class='card-text text-center'><?php echo $produit["description"] ?></p>
    </div>

    <ul class="list-group">
        <li class="list-group-item">Catégorie :<?php echo $produit["categorie"] ?> </li>
        <li class="list-group-item">Prix : <?php echo $produit["prix"] ?> </li>


        <!-- CRÉATION D'UN FORMULAIRE POUR RÉCUPÉRER LE PRODUIT SELECTIONNÉ ET LA QUANTITÉ POUR L'AJOUTER AU PANIER (creating a formulaire to get the produt selected and the quantity to put in basket)-->

        <form method="POST" action="panier.php">

            <li class="list-group-item">
                <p> <span class="title"> Quantité : </span> </p>
                <input type="hidden" name="id_produit" value="<?php echo $produit["id_produit"] ?>">
                <input type="hidden" name="categorie" value="<?php echo $produit["categorie"] ?>">
                <select class="custom-select" name="quantite" id="selectQuantity">
                <!-- Je créé dynamiquement la quantité sélectionnable dans la limite du stock (I'm creating a dymanique of quantities selectionable on the limite stocks)-->
                        <option disabled selected> Choisir une quantité </option>
                        <?php for ($i = 1; $i <= $produit["stock"]; $i++) { ?>
                            <option value="<?php echo $i ?>"> <?php echo $i ?> </option>
                        <?php }
                        ?>
                    </select>
            </li>
                <div class="text-center mb-3">
            <input class="btn btn-outline-secondary mt-5" style='background-color:#c09167' type="submit" value="Ajouter au Panier" name="ajout_panier" style="width:100%" id="addCart">
            </div>
        </form>
     </ul> <!--fin de ul class list -->
   </div>  <!--fin de container -->



<?php
    require_once("inc/footer.php");
    ?>

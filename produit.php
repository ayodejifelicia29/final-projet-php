<?php
require_once("./inc/header.php");
?>

<html>

<body>

  <!--Pour la produit ,je utiliser le bs5 pour la page accuiel---->
  <div class="container">

    <div id="produit" class="display-5 text-center my-5">Nos Produits</div>

    <div class="row row-cols-2 row-cols-md-2 mb-5 g-4 mt-5 card-group my-5 ">
      <div class="col ">
        <div class=" card h-100 style=" width: 18rem;>
          <a href="./produit1.php"><img src="./img/parhommelogo.png" class="card-img-top" alt="..."></a>
          <div class="card-body">
            <h3>Parfum homme</h3>
          </div>
        </div>
      </div>

      <div class="col">
        <!-- pour avoir les affichager sur la deuxieme produit sur page accueil--->
        <div class="card h-100">
          <a href="./produit2.php"><img src="./img/oyebread.png" class="card-img-top" alt="..."></a>
          <div class="card-body">
            <h3>Oyé Vegan Cosmetics</h3>
          </div>
        </div>
      </div>
      <!---fin col2 ---->

    </div> <!-- fin row----->



  </div>
  <!--- fIN Div container bootstrap-->


  <!-- Bootstrap CSS v5.2.0-beta1 -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

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
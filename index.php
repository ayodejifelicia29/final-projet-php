<?php
require_once("inc/header.php");
?>

<!-- carousel  -->

<div class="container mt-5">
  <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="./img/oye men.jpg" height="400px" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="./img/front page.png" height="400px" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="./img/frontpage2.png" height="400px" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <!-- end of carousel -->


  <!-- card pour la  product -->

  <div id="produit" class="display-5 text-center mt-5">Nos Produits</div>

  <div class="row row-cols-2 row-cols-md-2 mt-5 g-4">
    <div class="col">
      <div class="card h-100">
        <a href="./produit1.php"><img src="./img/parhommelogo.png" class="card-img-top" alt="..."></a>
        <div class="card-body">
          <h3>Parfum Homme</h3>

        </div>
      </div>
    </div>

    <div class="col">
      <div class="card h-100">
        <a href="./produit2.php"><img src="./img/oyebread.png" class="card-img-top" alt="..."></a>
        <div class="card-body">
          <h3>Oyé Vegan Cosmetics</h3>

        </div>
      </div>

    </div> <!-- end of cards -->

  </div>  <!-- fin footer cards -->


  <div class="about m-5">
    <div class="display-5 text-center my-5">
      <p id="propos" class="display-5">À PROPOS BOUTIQUE
      </p>
    </div>
    <p>À PROPOS DE NOTRE BOUTIQUE Nous voulons juste commencer notre boutique en ligne , c’est à propos de l’homme produt, nous allons faire produt pour l’huile de barbe pour faire pousser la barbe de l’homme, après-rasage huile et nous allons produire des parfums de l’homme aussi, notre huile sera faite à la main. Non seulement nous avons l’expérience de la vente de parfums, nous avons également l’expertise pour correspondre. En ligne, nous offrons la livraison standard GRATUITE sur toutes les commandes .

  </div>  <!-- fin class m-5 -->

  </html>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous">
  </script>
  <!-- Bootstrap CSS v5.2.0-beta1 -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Courgette&family=Montserrat&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">

  <?php
  require_once("inc/footer.php");
  ?>

  </body>

  </html>
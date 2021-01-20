<?php
    require_once "Partials/header.php";
?>
<div class="row">
  <!-- Categoriën -->
  <div class="col-lg-3">
    <h3 class="my-3">Categoriën</h3>
    <div class="list-group">
      <?php
        $alleCats = $cat->getAllCats();
        if ($alleCats){
          while ($resultaat = $alleCats->fetch_assoc()){
      ?>
      <a href="#" class="list-group-item"><?php echo htmlentities($resultaat['cat_naam']); ?></a>
      <?php
          }}
      ?>
    </div>
  </div>
  <!-- product 1 -->

  <div class="col-lg-6">
    <?php
      $alleProducten = $prod->getAllProducts();
      if ($alleProducten){
        while ($resultaat = $alleProducten->fetch_assoc()){

    ?>

    <div class="card mt-4">
      <a href="single.php?id=<?php echo htmlentities($resultaat['id']);?>" class="mx-auto">
      <img class="card-img-top img-fluid mx-auto" src="<?php echo htmlentities($resultaat['afbeelding']);?>" alt="">
      </a>
      <div class="card-body">
        <h3 class="card-title text-center">
          <a href="single.php?id=<?php echo htmlentities($resultaat['id']);?>"><?php echo htmlentities($resultaat['naam']);?></a></h3>
        <h4>€<?php echo htmlentities($resultaat['prijs']/100);?></h4>
        <p class="card-text"><?php echo htmlentities($resultaat['omschrijving']);?></p>
        <span class="text-warning">&#9733; &#9733; &#9733; &#9733; &#9734;</span>
        4.0 sterren
        <button class="btn btn-primary float-right mr-2" type="submit">Bestel</button>
      </div>
    </div>
   <?php
    }}
    ?>
  </div>
  <!-- /.col-lg-9 -->

  <?php 
    $laatste_prod = $prod->getProdById(1);
    if ($laatste_prod){
      while ( $resultaat = $laatste_prod->fetch_assoc() ){
  ?>
  <!-- Aside prod van de maand -->
  <div class="col-lg-3">
    <aside class="text-center">
    <div class="card mt-4">
      <img class="card-img-top img-fluid mx-auto" src="<?php echo htmlentities($resultaat['afbeelding']);?>" alt="">
      <div class="card-body">
        <h3 class="card-title text-center"><a href="single.php?id=<?php echo htmlentities($resultaat['id']);?>">
        <?php echo htmlentities($resultaat['naam']);?></a></h3>
        <h4>€<?php echo htmlentities($resultaat['prijs']/100);?></h4>
        <p class="card-text"><?php echo htmlentities($resultaat['omschrijving']);?><br>
          <span class="text-warning">&#9733; &#9733; &#9733; &#9733; &#9733;</span>
        </p>
        <button class="btn btn-primary px-4 mx-auto" type="submit">Bestel</button>
      </div>
    </div>
    <?php 
      }}
    ?>
    <div class="card mt-4">
      <div class="card-body">
        <h3 class="card-title text-center">Reviews</h3>
        <hr>
        <p class="card-text">Fantastische levering! Binnen 1 dag thuisgekregen.
        <span class="text-muted">- Piet Appelscha</span><br>
          <span class="text-warning">&#9733; &#9733; &#9733; &#9733; &#9733;</span>
        </p>
        <hr>
        <p class="card-text">Zelfs de klantenservice is top.
          <span class="text-muted">- Henk Jansen</span><br>
          <span class="text-warning">&#9733; &#9733; &#9733; &#9733; &#9734;</span>
        </p>
      </div>
    </div>
    </aside>
  </div>

</div>

 <?php
 require_once "Partials/footer.php";
 ?>
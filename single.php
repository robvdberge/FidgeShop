<?php
    require_once "Partials/header.php";
    if (array_key_exists('id', $_GET)){
      $id = $_GET['id'];
    } else {
      header('location: index.php');
      exit;
    }
     
?>
   <div class="row">

<div class="col-lg-3">
  <h3 class="my-3">Categoriën</h3>
  <div class="list-group">
    <a href="#" class="list-group-item active">Rond</a>
    <a href="#" class="list-group-item">Vierkant</a>
    <a href="#" class="list-group-item">Meerdere hoeken</a>
  </div>
</div>
<!-- /.col-lg-3 -->

<div class="col-lg-9">

<?php
      $product = $prod->getProdById($id);
      if ($product){
        while ($resultaat = $product->fetch_assoc()){

    ?>

    <div class="card mt-4">
      <img class="card-img-top img-fluid mx-auto" src="<?php echo $resultaat['afbeelding'];?>" alt="">
      <div class="card-body">
        <h3 class="card-title text-center"><a href="single.php?id=<?php echo $resultaat['id'];?>"><?php echo $resultaat['naam'];?></a></h3>
        <h4>€<?php echo $resultaat['prijs']/100;?></h4>
        <p class="card-text"><?php echo $resultaat['omschrijving'];?></p>
        <span class="text-warning">&#9733; &#9733; &#9733; &#9733; &#9734;</span>
        4.0 sterren
        <button class="btn btn-primary float-right mr-2" type="submit">Bestel</button>
      </div>
    </div>
   <?php
    }}
    ?>
  <!-- /.card -->

  <div class="card card-outline-secondary my-4">
    <div class="card-header">
      Product Reviews
    </div>
    <div class="card-body">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis et enim aperiam inventore, similique necessitatibus neque non! Doloribus, modi sapiente laboriosam aperiam fugiat laborum. Sequi mollitia, necessitatibus quae sint natus.</p>
      <small class="text-muted">Posted by Anonymous on 3/1/17</small>
      <hr>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis et enim aperiam inventore, similique necessitatibus neque non! Doloribus, modi sapiente laboriosam aperiam fugiat laborum. Sequi mollitia, necessitatibus quae sint natus.</p>
      <small class="text-muted">Posted by Anonymous on 3/1/17</small>
      <hr>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis et enim aperiam inventore, similique necessitatibus neque non! Doloribus, modi sapiente laboriosam aperiam fugiat laborum. Sequi mollitia, necessitatibus quae sint natus.</p>
      <small class="text-muted">Posted by Anonymous on 3/1/17</small>
      <hr>
      <a href="#" class="btn btn-success">Leave a Review</a>
    </div>
  </div>
  <!-- /.card -->

</div>
<!-- /.col-lg-9 -->

</div>

 <?php
 require_once "Partials/footer.php";
 ?>
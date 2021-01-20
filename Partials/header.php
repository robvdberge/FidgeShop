<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/Fidgetshopnlx/lib/Database.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/Fidgetshopnlx/classes/Product.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/Fidgetshopnlx/classes/Categorie.php';
$db = new Database();
$prod = new Product();
$cat = new Categorie();
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fidgetshopnlx</title>
    <link rel="stylesheet" href="styles/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles/all.min.css">
    <link rel="stylesheet" href="styles/fontawesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/litera.css">
</head>
<body>
<nav class="navbar navbar-expand-lg fixed-top">
    <div class="container">
      <a class="navbar-brand display-4 text-white" href="index.php"><img src="images/logo.png" alt=""></a>
      <a href="index.php" class="text-decoration-none"><span class="brandname">Fidgetshopnlx</span><a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link text-light fw-bold" href="index.php">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light fw-bold" href="about.php">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light fw-bold" href="services.php">Service</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light fw-bold" href="contact.php">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light fw-bold" href="cart.php"><i class="fas fa-shopping-cart"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light fw-bold" href="#"><i class="fab fa-instagram text-white"></i></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="main container mt-5">

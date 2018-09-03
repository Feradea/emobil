<?php
    global $connection;
    require_once "config.php";
    require_once "db_config.php";
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Superior14 Webshop">
    <meta name="author" content="Orosz Andrea">

    <title>Shop Homepage - Superior 14</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/shop-homepage.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
      
        <a class="navbar-brand" href="index.php"><img src="img/S14Logo_small.png" alt="Superior 14 logo" height="55px"/></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php?page=home">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php?page=products">Products</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php?page=about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php?page=qrcode">Qr Code</a>
            </li>
          </ul>
        </div>
    
    </nav>

    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <div class="col-lg-3">

          <h4 class="my-4">Brands: </h4>
          <div class="list-group">
            <a href="#" class="list-group-item">Brand 1</a>
            <a href="#" class="list-group-item">Brand 1</a>
            <a href="#" class="list-group-item">Brand 1</a>
          </div>

          <h4 class="my-4">Category: </h4>
          <div class="list-group">
            <a href="#" class="list-group-item">Category 1</a>
            <a href="#" class="list-group-item">Category 1</a>
            <a href="#" class="list-group-item">Category 1</a>
          </div>
        </div>
        <!-- /.col-lg-3 -->

        <div class="col-lg-9">

            <?php

            $page = isset($_GET['page']) ? $_GET['page'] : null;

            switch ($page){

                case "home":
                include "carousel.php";
                break;

                case "products":
                    include "products_list.php";
                    break;

                case "about":
                    include "about.php";
                    break;

                case "qrcode":
                    include "qrcode.php";
                    break;

                default:
                    include "carousel.php";
                    break;
            }

            ?>

        </div>
        <!-- /.col-lg-9 -->

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2018</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>

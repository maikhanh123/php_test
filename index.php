<?php require_once('controllers/HomeController.php') ?>
    <!-- header -->
    <?php include('views/header.php') ?>
    <!-- header -->

    <!-- content -->
    <div class="container theme-showcase" role="main">
      <?php 
        $home = new HomeController();
        $home->checkRequest();
      ?>

    </div> 
    <!-- content -->

    <!-- footer -->
    <?php include('views/footer.php') ?>
    <!-- footer -->


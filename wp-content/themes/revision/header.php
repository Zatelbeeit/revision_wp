<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>revision</title>

  <?php wp_head(); ?>
</head>

<body>
<nav class="navbar navbar-expand-lg bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">

  
<?php
    wp_nav_menu(array(
        'theme_location' => 'my-custom-menu',
        'container_class'=> 'navbar-nav',
    ));
        ?>

</div>
</nav>

        
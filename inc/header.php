<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <title><?php echo $title ?></title>
    <meta name="description" content="<?php echo $descr ?>" />
    <meta property="og:title" content="<?php echo $title ?>" />
    <meta property="og:type" content="website" />
    <meta property="og:locale" content="ru_RU" />
    <meta property="og:image" content="/img/opengraph.jpg" />
    <meta property="og:description" content="<?php echo $descr ?>" />


    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-grid.css" rel="stylesheet">
    <link href="css/bootstrap-reboot.css" rel="stylesheet">
    <link href="css/bootstrap-utilities.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">

    <!-- Font-Awesome -->
    <script src="https://kit.fontawesome.com/c0532d145a.js" crossorigin="anonymous"></script>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700&amp;subset=cyrillic" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700,800&amp;subset=cyrillic" rel="stylesheet">

    <!-- Animate.css for cool animations -->
    <link href="css/animate.css" rel="stylesheet">

  </head>
<body role="document">

<header class="header">
  <div class="container-fluid">
    <div class="container">
      <div class="row">
        <div class="col-12 col-lg-10 offset-lg-1 text-center">
          <img src="img/logo_somatik_black.svg" alt="Somatik Logo" class="logo">
          <h1 class="title"><span class="glitch" data-text="Somatik">Somatik</span><span class="glitch" data-text="Sound">Sound</span><span class="glitch" data-text="System">System</span></h1>
          <p class="description"><?php echo $descr ?></p>
        </div>
      </div>
    </div>
  </div>
</header>
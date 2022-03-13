<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">

  <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>


<!-- Header Start -->
<div class="main-header-container">
  <div class="container">
    <div class="row">

      <div class="col-12 col-sm-12 col-md-12 col-lg-12 align-self-center">
        <a href="<?php echo get_home_url(); ?>">
          <img class="header-logo" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo.png" alt="Cuda">
        </a>
        <?php require "nav.php"; ?>
      </div>

    </div>

  </div>
</div><!-- Header End -->


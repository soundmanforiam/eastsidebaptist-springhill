<!doctype html>

<html <?php language_attributes(); ?>>

  <head>

    <!-- Required meta tags -->

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">



    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css"  media="all" />

    <title>East Side Baptist Church in Springhill, LA - <?php wp_title(); ?></title>

    <?php wp_head();?>

  </head>

  <body <?php body_class( $class ); ?>>

  <header class="container-fluid header">
    <div class="container-fluid">
       <div class ="container-fluid" id="main-nav">
          <?php wp_nav_menu( array( 'theme_location' => 'max_mega_menu_1' ) ); ?>
       </div>

       <div class="logo">
          <img src="https://eastsidebaptist-springhill.org/img/compass.png"  alt="compass" class="logo" height="100" width="100">
       </div>
    </div>
    </header>
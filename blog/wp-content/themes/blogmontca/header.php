<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title><?php bloginfo(title); ?></title>
  <meta name=”description” content=”<?php bloginfo(description) ?>” />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,700" rel="stylesheet">
  <link rel="stylesheet" href="<?php bloginfo(stylesheet_url) ?>">
  <link rel="stylesheet" href="<?php bloginfo(stylesheet_directory); ?>/css/jdmc.css">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

</head>
<body class="bg">

  <!-- nav -->
  <div class="nav-blog">
    <nav class="df jc-b ai-b m header">
      <div class=''>
        <a href="#" class="lk bm m">
          <img src="<?php echo get_locale_stylesheet_uri(); ?>/img/Hamburguesa.png" width='50' alt="Menu" id="bm" class="f">
        </a>
        <div class="mr df jc-c ai-c h fd-c" id='mr'>
            <a href="index.html">
              <img src="https://scontent.fbog2-2.fna.fbcdn.net/v/t1.0-9/12208684_10153253626258697_7413417102236425354_n.jpg?oh=21ea85c9c67f5f2bf6413421451576b9&oe=598ED021" alt="Avatar" class="a-1">
            </a>
          <?php
            wp_nav_menu(
              array(
                'theme_location' => 'top-menu',
                'menu_class' => 'ls-n df fd-c ai-l mw',
              ) )
           ?>
          <!-- <ul class="ls-n">
            <li><a href="<?php echo home_url('/index.html') ?>" class="lk ac">Blog</a></li>
            <li><a href="#" class="lk">Diseño</a></li>
            <li><a href="#" class="lk">Frontend</a></li>
            <li><a href="#contacto" class="lk">Contacto</a></li>
          </ul> -->
        </div>
      </div>
      <div class="">
        <img src="<?php echo get_locale_stylesheet_uri(); ?>/img/isotipo.png" width='60' alt="">
      </div>
    </nav>
  </div>
  <!-- /nav -->

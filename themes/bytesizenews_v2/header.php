<!DOCTYPE html>
<html lang="en">

<head>

  <!--

  @@@@@@@@@@@@@@@@@  @@@   @@@          @@@
  @@@@@@@@@@@@@@@@@  @@@   @@@@        @@@@
         @@@         @@@   @@@ @      @ @@@
         @@@         @@@   @@@  @@  @@  @@@
         @@@         @@@   @@@   @@@    @@@
         @@@         @@@   @@@          @@@
         @@@         @@@   @@@          @@@
         @@@         @@@   @@@          @@@

  How much does a polar bear weigh? Just enough to break the ice.

  Made with love in beautiful Saint Paul, Minnesota.

  © 2013 Anythin’ Goes LLC and Timothy B. Smith.

  -->

  <meta charset="utf-8" />
  <title><?php is_home() ? bloginfo('description') : wp_title(''); ?></title>
  <meta name="viewport" content="width=device-width" />


  <!-- My styles -->
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/assets/css/global.css"/>

  <!-- Typekit Code -->
  <script type="text/javascript" src="//use.typekit.net/vnu4dui.js"></script>
  <script type="text/javascript">try{Typekit.load();}catch(e){}</script>


  <!--WP Generated Header -->
  <?php wp_head(); ?>
  <!--End WP Generated Header -->

</head>
<body <?php body_class($class); ?>>

<div class="contain">

  <header class="site__header" role="banner">
    <a href="/"><img src="<?php bloginfo('template_url'); ?>/assets/img/bytesize-artwork_1400.png" alt="Cover Art for Bytesize"></a>
    <nav class="header__nav" role="navigation">
      <ul>
        <li><a href="/">Home</a></li>
        <li><a href="http://goodstuff.fm/contact">Contact</a></li>
        <li><a href="http://goodstuff.fm/advertise">Sponsor</a></li>
        <li><a href="http://twitter.com/bytesize">@bytesize</a></li>
      </ul>
    </nav>
  </header>

  <main class="content__main" role="main">

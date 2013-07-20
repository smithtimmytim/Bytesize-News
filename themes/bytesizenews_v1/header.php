<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title><?php is_home() ? bloginfo('description') : wp_title(''); ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  
  <!-- My styles -->
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/global.css"/>

  <!-- Typekit Code -->
  <script type="text/javascript" src="//use.typekit.net/vnu4dui.js"></script>
  <script type="text/javascript">try{Typekit.load();}catch(e){}</script>


  <!--WP Generated Header -->
  <?php wp_head(); ?>
  <!--End WP Generated Header -->
  
</head>
<body>
  

  <header class="site__header" role="banner"> 
    <div class="contain"> 
      <nav class="site__nav" role="navigation">
        <ul>
          <li><a href="#">Episodes</a></li>
          <li><a href="#">Sponsorship</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
      </nav>
    </div><!-- .contain -->
  </header><!-- .site__header -->
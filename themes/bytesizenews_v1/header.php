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
  The East Wing © 2013 Anythin’ Goes LLC and Timothy B. Smith.

  -->

  <meta charset="utf-8" />
  <title><?php is_home() ? bloginfo('description') : wp_title(''); ?></title>
  <meta name="viewport" content="width=device-width" />

  <link rel="alternate" type="application/rss+xml" href="/feed/bytesize/" />


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


  <header class="site__header" role="banner">
    <div class="contain">
      <nav class="site__nav" role="navigation">
        <ul>
          <li><a href="/">Episodes</a></li>
          <li><a href="/sponsorship">Sponsorship</a></li>
          <li><a href="/contact">Contact</a></li>
        </ul>
      </nav>
    </div><!-- .contain -->
  </header><!-- .site__header -->

  <section class="newsletter__wrapper">
    <div class="contain">
      <div class="newsletter">
        <form action="http://anythingoes.createsend.com/t/t/s/gtdhr/" method="post" id="subForm">
          <div>
            <h4>Get the News in Your Inbox <small>Sponsored by <a href="http://www.campaignmonitor.com/">Campaign Monitor</a></small></h4>
            <label class="screen-reader-text" for="name">Name</label><input type="text" name="cm-name" id="name" placeholder="Full Name" />
            <label class="screen-reader-text" for="gtdhr-gtdhr">Email</label><input type="email" name="cm-gtdhr-gtdhr" id="gtdhr-gtdhr" placeholder="Email Address" />
            <input type="submit" value="Subscribe" />
          </div>
        </form>
      </div><!-- .newsletter -->

    </div>
  </section><!-- .newsletter -->

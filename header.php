<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo('name') ?></title>

  <!-- Icon CDN -->
  <script type="module" src="https://unpkg.com/ionicons@5.2.3/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule="" src="https://unpkg.com/ionicons@5.2.3/dist/ionicons/ionicons.js"></script>

  <?php wp_head(); ?>
</head>

<body>
  <div class="header-container">
    <div id="logo"> DETROIT PARKS COALITION </div>
    <!-- Navigation -->

    <nav class="dpc-nav">
        <?php
        $args = array(
          "theme_location" => "primary",
          "menu" => "Navigation",         // Same name as menu we registered in register-settings.php
          "menu_class" => "nav"
        );
        wp_nav_menu($args);
        ?>

     
    </nav>

  </div>

  <!-- body tag is closed in ./footer.php -->
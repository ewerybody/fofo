
<?php
// header.php
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
  <?php wp_head(); ?>
  <script type="text/javascript" src="<?php echo bloginfo('template_url')?>/nav.js"></script>
</head>
<body <?php body_class(); ?>>

<header>
  <div class="header-content">
    <h1 class="site-title">
      <a href="<?php echo home_url(); ?>">
        <img id="header-logo" src="http://nascenteviva.com/wp-content/uploads/2021/07/NV-Logo.jpg">
        <?php bloginfo('name'); ?>
      </a>
    </h1>
    <button id="overlay-open" class="overlay-open overlay-btn"></button>

    <nav class="menu-overlay" role="navigation">
      <?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'container' => false,)); ?>
    </nav>
  </div>

</header>

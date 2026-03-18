
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
    <button class="overlay-open header-icon">
        <img src="<?php echo bloginfo('template_url')?>/assets/menu.svg">
    </button>

    <h1 class="site-title">
      <a href="<?php echo trailingslashit(home_url()); ?>">
        <img id="header-logo" src="<?php echo bloginfo('template_url')?>/assets/nv.svg">
        <?php bloginfo('name'); ?>
      </a>
    </h1>

    <a class="social-icon header-icon" href="https://www.instagram.com/nascentevivadourados" target="_blank">
        <img src="<?php echo bloginfo('template_url')?>/assets/insta.svg">
    </a>

    <nav class="menu-overlay" role="navigation">
      <?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'container' => false,)); ?>
    </nav>
  </div>
  <ul class="lang-list"><?php pll_the_languages(); ?></ul>
</header>

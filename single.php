
<?php
// single.php
get_header(); ?>

<?php
$introtext = get_post_meta($post->ID, 'intro', true);
$custom_class = get_post_meta($post->ID, 'post_class', true);
?>

<main>
<?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>

    <div class="container">
      <h1><?php the_title(); ?></h1>
      <?php the_excerpt(); ?>
    </div>

	<?php if ( $custom_class != 'big-thumb' && $custom_class != 'no-thumb' && '' != get_the_post_thumbnail() && ! post_password_required() ) : ?>
      <article class="post post-with-thumbnail">
        <div class="post-thumbnail-container">
          <?php the_post_thumbnail('full', array('class' => 'post-thumbnail-bg')); ?>
	    </div><!-- end .entry-thumbnail -->
    <?php else : ?>
      <article id="post-<?php the_ID(); ?>" <?php post_class($custom_class); ?>>
	<?php endif; ?>

    <div class="container post-single">
        <?php the_content(); ?>
    </div>

    </article><!-- end post -<?php the_ID(); ?> -->

  <?php endwhile; ?>
<?php endif; ?>
</main>

<?php get_footer(); ?>
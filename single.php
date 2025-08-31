
<?php
// single.php
get_header(); ?>

<div class="container">
  <main>
    <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>

		<?php get_template_part( 'template-parts/contentsingle' ); ?>

      <?php endwhile; ?>
    <?php endif; ?>
  </main>
</div>

<?php get_footer(); ?>
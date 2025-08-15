
<?php
// single.php
get_header(); ?>

<div class="container">
  <main>
    <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
        <article class="post">
          <h1><?php the_title(); ?></h1>
          <div class="post-content">
            <?php the_content(); ?>
          </div>
        </article>
      <?php endwhile; ?>
    <?php endif; ?>
  </main>
</div>

<?php get_footer(); ?>
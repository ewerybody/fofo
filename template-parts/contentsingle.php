<?php
/**
 * Template for single post content.
 * @package fofo
 * @since fofo 1.0
 * @version 1.0
 */
?>

<?php
$introtext = get_post_meta($post->ID, 'intro', true);
$custom_class = get_post_meta($post->ID, 'post_class', true);
?>

<article id="post-<?php the_ID(); ?>" <?php post_class($custom_class); ?>>

		<header class="entry-header cf">
			<?php if ( $custom_class != 'no-thumb' && $custom_class == 'big-thumb' && '' != get_the_post_thumbnail() ) : ?>
				<div class="entry-thumbnail">
					<?php the_post_thumbnail('uku-bigthumb'); ?>
				</div><!-- end .entry-thumbnail -->
			<?php endif; ?>

			<div class="title-wrap">
				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

				<?php if ( get_post_meta($post->ID, 'intro', true) ) { ?>
					<p class="intro"><?php echo $introtext; ?></p>
				<?php } ?>
			</div><!-- end .title-wrap -->
		</header><!-- end .entry-header -->

		<div class="contentwrap">
			<?php if ( $custom_class != 'big-thumb' && $custom_class != 'no-thumb' &&  'serif' != get_theme_mod( 'uku_main_design' ) && '' != get_the_post_thumbnail() && ! post_password_required() ) : ?>
				<div class="entry-thumbnail">
					<?php the_post_thumbnail(); ?>
				</div><!-- end .entry-thumbnail -->
			<?php endif; ?>

			<div id="socialicons-sticky">
				<div id="entry-content" class="entry-content">
				<?php the_content(); ?>
				<?php
					wp_link_pages( array(
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'uku' ),
						'after'  => '</div>',
					) );
				?>
				<?php if ( function_exists( 'sharing_display' ) ) {sharing_display( '', true );}
					if ( class_exists( 'Jetpack_Likes' ) ) {
					$custom_likes = new Jetpack_Likes;
					echo $custom_likes->post_likes( '' );
				} ?>
				</div><!-- end .entry-content -->

			<footer class="entry-footer cf">
				<?php $tags_list = get_the_tag_list();
					if ( $tags_list ): ?>
					<div class="entry-tags"><span><?php esc_html_e('Tags', 'uku') ?></span><?php the_tags('',' &bull; ', ''); ?></div>
				<?php endif; ?>
				<?php
				// Author bio.
				if ( get_the_author_meta( 'description' ) ) :
					get_template_part( 'template-parts/authorbox' );
				endif;
				?>
			</footer><!-- end .entry-footer -->

			<?php
			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;
			?>

		</div><!-- end #socialicons-sticky -->
		</div><!-- end .content-wrap -->

	</article><!-- end post -<?php the_ID(); ?> -->

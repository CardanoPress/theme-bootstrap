<?php

/**
 * Template Name: Content - Sidebar
 *
 * @package CardanoPress Bootstrap
 * @since 0.1.0
 */

get_header();

?>

<div class="container">
	<div class="content-sidebar row">

		<main class="<?php echo cardanopress_bootstrap_class( 'content' ); ?>">

			<?php while ( have_posts() ) : ?>
				<?php the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; ?>

		</main><!-- .content -->

		<?php get_sidebar(); ?>

	</div><!-- .content-sidebar -->
</div><!-- .container -->

<?php

get_footer();

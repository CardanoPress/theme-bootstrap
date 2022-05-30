<?php

/**
 * Template Name: Full Width Page
 *
 * @package CardanoPress Bootstrap
 * @since 0.1.0
 */

get_header();

?>

	<main class="<?php echo cardanopress_bootstrap_class( 'content-full' ); ?>">

		<?php while ( have_posts() ) : ?>
			<?php the_post(); ?>
			<?php the_content(); ?>
		<?php endwhile; ?>

	</main><!-- .content -->

<?php

get_footer();

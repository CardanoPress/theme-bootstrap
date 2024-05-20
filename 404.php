<?php

/**
 * The template for displaying 404
 *
 * @package CardanoPress Bootstrap
 * @since 0.1.0
 */

get_header();

?>

<div class="container">
	<div class="content-sidebar row">
		<main class="<?php echo cardanopress_bootstrap_class( 'content' ); ?>">
			<?php dynamic_sidebar( 'error404' ); ?>
		</main><!-- .content -->

		<?php get_sidebar(); ?>
	</div><!-- .container -->
</div>

<?php

get_footer();

<?php

/**
 * The main template file
 *
 * @package CardanoPress Bootstrap
 * @since 0.1.0
 */

get_header();

?>

<div class="container">
	<div class="content-sidebar row">
		<main class="<?php echo cardanopress_bootstrap_class( 'content' ); ?>">

			<?php if ( have_posts() ) : ?>
				<?php while ( have_posts() ) : ?>
					<?php the_post(); ?>

					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

						<?php if ( has_post_thumbnail() ) : ?>
							<div class="entry-featured">
								<?php the_post_thumbnail(); ?>
							</div>
						<?php endif; ?>

						<div class="entry-wrap">
							<header class="entry-header">
								<h2 class="entry-title"><a href="<?php the_permalink(); ?>">
									<?php the_title(); ?>
								</a></h2>

								<div class="entry-meta">
									<time><?php the_date(); ?></time>
									<span><?php the_author(); ?></span>
								</div>
							</header>

							<div class="entry-content">
								<?php the_excerpt(); ?>
							</div>

							<footer class="entry-footer">
								<?php the_tags(); ?>
							</footer>
						</div>
					</article><!-- #post-<?php the_ID(); ?> -->

				<?php endwhile; ?>

				<?php the_posts_pagination(); ?>

			<?php endif; ?>

		</main><!-- .content -->

		<?php get_sidebar(); ?>

	</div><!-- .content-sidebar -->
</div><!-- .container -->

<?php

get_footer();

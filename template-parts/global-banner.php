<?php

/**
 * The template for displaying the banner
 *
 * @package CardanoPress Bootstrap
 * @since 0.1.0
 */

if ( is_single() || is_404() ) {
	return;
}

if ( is_archive() ) {
	$heading = get_the_archive_title();
} else {
	$heading = single_post_title( '', false );
}

if ( empty( $heading ) ) {
	return;
}

?>

<div class="banner py-3">
	<div class="container">
		<h1 class="mb-0"><?php echo $heading; ?></h1>
	</div>
</div><!-- .banner -->

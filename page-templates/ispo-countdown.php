<?php

/**
 * Template Name: ISPO Countdown Page
 *
 * @package CardanoPress Bootstrap
 * @since 0.1.0
 */

use PBWebDev\CardanoPress\ISPO\Actions;

$commence = cpISPO()->option('rewards_commence');
$conclude = cpISPO()->option('rewards_conclude');
$pool = cpISPO()->delegationPool();

get_header();

?>

<div class="container">
	<main class="<?php echo cardanopress_bootstrap_class( 'content-full' ); ?>">

		<script>
			var countDownDate = new Date( 1000 * <?php echo Actions::toUnixTimestamp( $conclude ); ?> ).getTime();

			var x = setInterval( function() {
				var now = new Date().getTime();
				var distance = countDownDate - now;

				var days = Math.floor( distance / ( 1000 * 60 * 60 * 24 ) );
				var hours = Math.floor( ( distance % ( 1000 * 60 * 60 * 24 ) ) / ( 1000 * 60 * 60 ) );
				var minutes = Math.floor( ( distance % ( 1000 * 60 * 60 ) ) / ( 1000 * 60 ) );
				var seconds = Math.floor( ( distance % ( 1000 * 60 ) ) / 1000 );

				document.getElementById( "ispo-countdown" ).innerHTML = days + " days " + hours + " hours " + minutes + " minutes " + seconds + " seconds ";

				if ( distance < 0 ) {
					clearInterval( x );
					document.getElementById( "ispo-countdown" ).innerHTML = "ENDED";
				}
			}, 1000);
		</script>


		<?php while ( have_posts() ) : ?>
			<?php the_post(); ?>

			<div class="text-center">
				<h1><?php echo esc_html( $pool['name'] ); ?> Initial Stake Pool Offering (ISPO)</h1>
				<p>Starts: <?php echo Actions::toUTC( $commence ); ?> UTC | Ends: <?php echo Actions::toUTC( $conclude ); ?> UTC</p>

				<div id="ispo-countdown" class="fw-bold fs-1"></div>
			</div>

			<?php the_content(); ?>
		<?php endwhile; ?>

	</main><!-- .content -->
</div>

<?php

get_footer();

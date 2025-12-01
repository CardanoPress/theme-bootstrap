<?php

/**
 * Page template for displaying the payment flow.
 *
 * This can be overridden by copying it to yourtheme/cardanopress/page/Payment.php.
 *
 * @package ThemePlate
 * @since   0.1.0
 */

get_header();

?>

<main class="container">
    <div class="py-5">
        <?php the_content(); ?>

        <?php cardanoPress()->template('payment-form'); ?>
    </div>
</main>

<?php

get_footer();

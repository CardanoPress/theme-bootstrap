<?php

/**
 * Page template for displaying stake pool delegation flow.
 *
 * This can be overridden by copying it to yourtheme/cardanopress/page/Delegation.php.
 *
 * @package ThemePlate
 * @since   0.1.0
 */

get_header();

?>

<main class="container">
    <div class="py-5">
        <?php the_content(); ?>

        <?php cardanoPress()->template('pool-delegation'); ?>
    </div>
</main>

<?php

get_footer();

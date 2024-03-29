<?php

/**
 * Page template for displaying user's asset collection.
 *
 * This can be overridden by copying it to yourtheme/cardanopress/page/Collection.php.
 *
 * @package ThemePlate
 * @since   0.1.0
 */

get_header();

?>

<main class="container">
    <div class="py-5">
		<?php the_content(); ?>
        <?php cardanoPress()->template('collection-list'); ?>
    </div>
</main>

<?php

get_footer();

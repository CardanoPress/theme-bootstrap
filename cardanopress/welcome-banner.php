<?php

/**
 * The template for displaying the welcome banner.
 *
 * This can be overridden by copying it to yourtheme/cardanopress/welcome-banner.php.
 *
 * @package ThemePlate
 * @since   0.1.0
 */

$userProfile = cardanoPress()->userProfile();

?>

<div class="d-flex align-items-center justify-content-between pb-6">
    <h2 class="mb-0 mr-2">
        Welcome <span class="fst-italic text-break"><?php echo esc_html($userProfile->getData('user_login')); ?></span>!
    </h2>
</div>

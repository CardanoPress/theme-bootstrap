<?php

/**
 * The template for displaying the ADA Handles.
 *
 * This can be overridden by copying it to yourtheme/cardanopress/part/profile-adahandles.php.
 *
 * @package ThemePlate
 * @since   0.1.0
 */

$userProfile = cardanoPress()->userProfile();
$handles = $userProfile->storedHandles();

if (! $handles) {
    return;
}

?>

<h3 class="fs-3">Available $handles</h3>

<ul class="list-unstyled d-flex flex-wrap">
    <?php foreach ($handles as $handle) : ?>
        <?php cardanoPress()->template('part/adahandle-item', compact('handle')); ?>
    <?php endforeach; ?>
</ul>

<?php cardanoPress()->template('part/adahandle-save'); ?>

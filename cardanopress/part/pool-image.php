<?php

/**
 * The template for displaying the stake pool favicon.
 *
 * This can be overridden by copying it to yourtheme/cardanopress/part/pool-image.php.
 *
 * @package ThemePlate
 * @since   0.1.0
 */

if (empty($pool)) {
    return;
}

?>

<div class="position-relative d-inline-block m-2" style="width: 64px; height: 64px;">
    <div class="position-absolute top-0 bottom-0 start-0 end-0">
        <?php if ('mainnet' === cardanoPress()->userProfile()->connectedNetwork()) : ?>
            <img
                src="https://static.adapools.org/pool_logo/<?php echo $pool['hex']; ?>.png"
                alt="<?php echo $pool['name']; ?>"
                class="w-100"
            >
        <?php else : ?>
            <div class="h-100">
                <div class="w-100 h-100 d-inline-flex justify-content-center align-items-center rounded-circle bg-secondary">
                    <div
                        role="image"
                        class="display-6 text-uppercase"
                        aria-label="<?php echo $pool['name']; ?>"
                    >
                        <?php echo $pool['name'][0]; ?>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>
</div>

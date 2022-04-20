<?php

/**
 * The template for displaying the single asset image.
 *
 * This can be overridden by copying it to yourtheme/cardanopress/part/asset-image.php.
 *
 * @package ThemePlate
 * @since   0.1.0
 */

if (empty($source)) {
    $source = $asset['parsed_image'] ?? '';
}

if (empty($label)) {
    $label = $asset['packed_name'] ?? '';
}

if (! $source && ! $label) {
    return;
}

?>

<div class="position-relative w-100" style="padding-top: 100%">
    <div class="position-absolute top-0 bottom-0 start-0 end-0">
        <?php if ($source) : ?>
			<div class="card-img-top">
				<img
					src="<?php echo $source; ?>"
					alt="<?php echo $label; ?>"
					class="w-100"
				>
			</div>
        <?php else : ?>
            <div class="h-100 p-4">
                <div class="w-100 h-100 d-inline-flex justify-content-center align-items-center rounded-circle bg-secondary">
                    <div
                        role="image"
                        class="display-1 text-uppercase"
                        aria-label="<?php echo $label; ?>"
                    >
                        <?php echo $label[0]; ?>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>
</div>

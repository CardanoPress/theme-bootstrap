<?php

/**
 * The template for displaying the single item in collection.
 *
 * This can be overridden by copying it to yourtheme/cardanopress/part/collection-item.php.
 *
 * @package ThemePlate
 * @since   0.1.0
 */

if (empty($asset)) {
    return;
}

?>

<li class="col-sm-3 my-2">
	<div class="card">
		<?php cardanoPress()->template('part/asset-image', compact('asset')); ?>

		<div class="card-body">
			<h2 class="card-title"><?php cardanoPress()->template('part/asset-name', compact('asset')); ?></h2>

			<p class="mb-1"><b>Quantity:</b> <?php echo $asset['quantity']; ?></p>

			<?php if (! empty($asset['onchain_metadata'])) : ?>
				<?php foreach ($asset['onchain_metadata'] as $key => $value) : ?>
					<?php if (! in_array($key, ['name', 'image', 'arweaveId'])) : ?>
						<p class="mb-1">
							<b><?php echo ucfirst($key); ?>:</b>

							<?php if (is_array($value)) : ?>
								<?php echo implode(', ', $value); ?>
							<?php else : ?>
								<?php echo $value; ?>
							<?php endif; ?>
						</p>
					<?php endif; ?>
				<?php endforeach; ?>
			<?php endif; ?>
		</div>
	</div>
</li>

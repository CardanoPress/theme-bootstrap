<?php

/**
 * The template for displaying the stake pool delegation.
 *
 * This can be overridden by copying it to yourtheme/cardanopress/pool-delegation.php.
 *
 * @package ThemePlate
 * @since   0.1.0
 */

?>

<div x-data="poolDelegation" class="text-center">
    <div class="py-3">
		<h1>Delegate</h1>

		<template x-if="isConnected">
			<div class="py-3">to</div>
		</template>

        <?php cardanoPress()->template('part/delegation-details'); ?>
    </div>

    <div class="py-3">
		<h2>Step 1</h2>

        <?php cardanoPress()->template('part/delegation-connect'); ?>
    </div>

	<div class="bg-primary mx-auto" style="width: 2px; height: 3em;"></div>

    <div class="py-3">
		<h2>Step 2</h2>

        <?php cardanoPress()->template('part/delegation-process'); ?>
    </div>

    <div class="py-3">
        <?php cardanoPress()->template('part/delegation-result'); ?>
    </div>
</div>

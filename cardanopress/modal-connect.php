<?php

/**
 * The template for displaying the connect-to-wallet in a modal popup.
 *
 * This can be overridden by copying it to yourtheme/cardanopress/modal-connect.php.
 *
 * @package ThemePlate
 * @since   0.1.0
 */

?>

<div
    class="modal fade show"
    x-init="$watch('showModal', value => value ? $el.classList.add('show', 'd-block') : $el.classList.remove('show', 'd-block'))"
    x-show="showModal"
>
    <div
        class="modal-dialog"
        x-show="showModal"
        x-transition:enter="transition ease-out duration-150"
        x-transition:enter-start="transform opacity-0 scale-75"
        x-transition:enter-end="transform opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-75"
        x-transition:leave-start="transform opacity-100 scale-100"
        x-transition:leave-end="transform opacity-0 scale-75"
        @click.away="showModal = false"
    >
		<div class="modal-content">
			<?php cardanoPress()->template('part/modal-header'); ?>
			<?php cardanoPress()->template('part/modal-content'); ?>
		</div>
    </div>
</div>

<template x-if="showModal">
	<div class="modal-backdrop fade show"></div>
</template>

<?php

/**
 * The template for displaying the contents of the connect-modal popup.
 *
 * This can be overridden by copying it to yourtheme/cardanopress/part/modal-content.php.
 *
 * @package ThemePlate
 * @since   0.1.0
 */

?>

<div class="modal-body">
	<div class="d-grid gap-2">
		<template x-for="(type, index) in supportedWallets" :key="index">
			<button class="btn btn-outline-primary" x-on:click.prevent="walletConnect(type)" x-bind:disabled="isDisabled(type)">
				<span x-text="type"></span>

				<template x-if="!walletAvailable(type)">
					<small class="d-block fst-italic">(Not available)</small>
				</template>
			</button>
		</template>
	</div>
</div>

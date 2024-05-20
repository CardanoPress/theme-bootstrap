<?php

/**
 * The template for displaying the queried payment address.
 *
 * This can be overridden by copying it to yourtheme/cardanopress/part/payment-address.php.
 *
 * @package ThemePlate
 * @since   0.1.0
 */

?>


<div class="row align-items-center">
	<div class="col-sm-auto d-flex align-items-center justify-content-center">
		<img src="<?php echo cardanopress_bootstrap_payment_address(); ?>" alt="QR Code" />
	</div>

	<div class="col-sm">
		<div class="input-group my-3">
			<input x-bind:value="paymentAddress" type="text" class="form-control" readonly disabled>
			<button class="btn btn-outline-secondary" x-on:click.prevent="clipboardValue(paymentAddress)">Copy</button>
		</div>
	</div>
</div>

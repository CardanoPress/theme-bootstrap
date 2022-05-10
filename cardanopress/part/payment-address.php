<?php

/**
 * The template for displaying the queried payment address.
 *
 * This can be overridden by copying it to yourtheme/cardanopress/part/payment-address.php.
 *
 * @package ThemePlate
 * @since   0.1.0
 */

use chillerlan\QRCode\QRCode;

$qrCode = (new QRCode)->render(cardanoPress()->paymentAddress())

?>


<div class="row">
	<div class="col-auto">
		<img src="<?php echo $qrCode; ?>" alt="QR Code" />
	</div>

	<div class="col">
		<div class="input-group my-3">
			<input x-bind:value="paymentAddress" type="text" class="form-control" readonly disabled>
			<button class="btn btn-outline-secondary" @click.prevent="clipboardValue(paymentAddress)">Copy</button>
		</div>
	</div>
</div>

<?php

/**
 * The template for displaying the actual payment form.
 *
 * This can be overridden by copying it to yourtheme/cardanopress/payment-form.php.
 *
 * @package ThemePlate
 * @since   0.1.0
 */

?>

<form <?php cardanoPress()->component()->paymentForm(); ?>>
    <div class='py-3'>
        <h2 class="fs-3"><span x-text="payAmount"></span> ADA Per Mint</h2>

        <div class="row mb-3">
            <label for="payment-quantity" class="col-sm-auto col-form-label">Quantity</label>

            <div class="col-sm">
                <?php cardanoPress()->template('part/payment-quantity'); ?>
            </div>
        </div>

        <h2 class="fs-3">Your Total: <?php cardanoPress()->template('part/payment-total'); ?> ADA</h2>
    </div>

    <hr style="color: #7e55f3;">

    <div class='py-3'>
        <h2 class="fs-3">Make Payment</h2>

        <div class="my-3">
            <?php cardanoPress()->template('part/payment-button'); ?>
        </div>

        <p>or reveal payment address</p>

        <template x-if='!isVerified'>
            <div class="my-3">
                <?php cardanoPress()->template('part/payment-recaptcha'); ?>
            </div>
        </template>

        <template x-if='!showAddress'>
            <?php cardanoPress()->template('part/payment-toggle'); ?>
        </template>

        <template x-if='showAddress'>
            <?php cardanoPress()->template('part/payment-address'); ?>
        </template>
    </div>

    <template x-if='transactionHash'>
        <div class="py-3">
            <?php cardanoPress()->template('part/payment-output'); ?>
        </div>
    </template>
</form>

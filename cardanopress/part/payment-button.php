<?php

/**
 * The template for displaying the actual pay button.
 *
 * This can be overridden by copying it to yourtheme/cardanopress/part/payment-button.php.
 *
 * @package ThemePlate
 * @since   0.1.0
 */

if (empty($text)) {
    $text = 'Pay';
}

if (empty($textNotConnected)) {
    $textNotConnected = '(Not connected)';
}

?>

<template x-if='!isConnected'>
    <?php cardanoPress()->template('part/modal-trigger', ['text' => 'Connect Wallet']); ?>
</template>

<template x-if='isConnected'>
    <button
        x-on:click.prevent='handlePayment()'
        x-bind:disabled='!isReady()'
        class="btn btn-primary"
    >
        <?php echo $text; ?>

        <small class='d-block fst-italic' x-text="'(Connected to ' + connectedExtension + ')'"></small>
    </button>
</template>

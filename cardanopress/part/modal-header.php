<?php

/**
 * The template for displaying the header of the connect-modal popup.
 *
 * This can be overridden by copying it to yourtheme/cardanopress/part/modal-header.php.
 *
 * @package ThemePlate
 * @since   0.1.0
 */

?>

<div class="modal-header">
    <h2 class="modal-title">
        <span x-text="isConnected ? 'Reconnect' : 'Connect'">Connect</span>

        wallet
    </h2>

    <button type="button" class="btn-close" aria-label="Close" @click="showModal = false">
    </button>
</div>

<?php

/**
 * The template for displaying the single notice to toast.
 *
 * This can be overridden by copying it to yourtheme/cardanopress/part/notice-item.php.
 *
 * @package ThemePlate
 * @since   0.1.0
 */

?>

<div
    class="my-2 py-2 px-3 d-inline-block shadow rounded text-white"
    :class="{
        'bg-success': notice.type === 'success',
        'bg-primary': notice.type === 'info',
        'bg-warning': notice.type === 'warning',
        'bg-danger': notice.type === 'error',
        }"
    style="cursor: pointer; pointer-events:all;"
>
    <p class="mb-0 fw-bold fs-5" x-text="notice.text"></p>
</div>

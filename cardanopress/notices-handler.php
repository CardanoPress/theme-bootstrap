<?php

/**
 * The template for displaying the toast notifications.
 *
 * This can be overridden by copying it to yourtheme/cardanopress/page/Collection.php.
 *
 * @package ThemePlate
 * @since   0.1.0
 */

?>

<div class="position-fixed top-0 bottom-0 start-0 end-0 d-flex flex-column align-items-end justify-content-start pe-none" style="z-index: 1060;">
    <div class="m-6 d-flex flex-column align-items-end" style="max-width: 320px;">
        <template x-for="notice of $store.toastNotification.list" :key="notice.id">
            <div
                x-show="$store.toastNotification.visible.includes(notice)"
                x-transition:enter="transition ease-in duration-200"
                x-transition:enter-start="transform opacity-0 translate-x-40"
                x-transition:enter-end="transform opacity-100"
                x-transition:leave="transition ease-out duration-500"
                x-transition:leave-start="transform translate-x-0 opacity-100"
                x-transition:leave-end="transform translate-x-full opacity-0"
                @click="$store.toastNotification.remove(notice.id)" class="z-10"
            >
                <?php cardanoPress()->template('part/notice-item'); ?>
            </div>
        </template>
    </div>
</div>

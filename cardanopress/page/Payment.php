<?php

/**
 * Page template for displaying the payment flow.
 *
 * This can be overridden by copying it to yourtheme/cardanopress/page/Payment.php.
 *
 * @package ThemePlate
 * @since   0.1.0
 */

use ThemePlate\Enqueue;

Enqueue::asset('script', 'cardanopress-payment');
Enqueue::asset('script', 'cardanopress-recaptcha');

get_header();

?>

<main class="container">
    <div class="py-6">
        <h1>Payments</h1>
		<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, commodi voluptates praesentium quia dolore laboriosam possimus,<br>voluptatem molestiae, impedit laudantium provident. Enim cumque quibusdam adipisci? At fugiat repellendus minima magni?</p>

        <?php cardanoPress()->template('payment-form'); ?>
    </div>
</main>

<?php

get_footer();

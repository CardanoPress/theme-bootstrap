<?php

/**
 * Page template for displaying the payment flow.
 *
 * This can be overridden by copying it to yourtheme/cardanopress/page/Payment.php.
 *
 * @package ThemePlate
 * @since   0.1.0
 */

cardanoPress()->enqueue('script', 'cardanopress-payment');

$recaptchaKeys = cardanoPress()->option('recaptcha_key');
$recaptchaKey = $recaptchaKeys['site'] ?? '';

if (! empty($recaptchaKey)) {
    cardanoPress()->enqueue('script', 'cardanopress-recaptcha');
}

get_header();

?>

<main class="container">
    <div class="py-5">
		<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, commodi voluptates praesentium quia dolore laboriosam possimus,<br>voluptatem molestiae, impedit laudantium provident. Enim cumque quibusdam adipisci? At fugiat repellendus minima magni?</p>

        <?php cardanoPress()->template('payment-form', compact('recaptchaKey')); ?>
    </div>
</main>

<?php

get_footer();

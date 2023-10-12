<?php

/**
 * Page template for displaying split payments flow.
 *
 * This can be overridden by copying it to yourtheme/cardanopress/page/Split.php.
 *
 * @package ThemePlate
 * @since   0.1.0
 */

cardanoPress()->enqueue('script', 'cardanopress-split');
cardanoPress()->enqueue('script', 'cardanopress-payment');

$fixedFee = cardanoPress()->option('payment_split');
$recaptchaKeys = cardanoPress()->option('recaptcha_key');
$recaptchaKey = $recaptchaKeys['site'] ?? '';

if (! empty($recaptchaKey)) {
    cardanoPress()->enqueue('script', 'cardanopress-recaptcha');
}

get_header();

?>

<main class="container">
    <div class="py-5">
		<?php the_content(); ?>

        <form
            x-data="paymentForm"
            data-amount="<?php echo $fixedFee; ?>"
            data-recaptcha="<?php echo $recaptchaKey; ?>"
        >
            <div class='py-3'>
                <h2>Fixed Fee: <span><?php echo $fixedFee; ?></span> ADA</h2>

                <p class='fs-5 fst-italic'>
                    <?php cardanoPress()->template('part/payment-lovelace'); ?> Lovelace
                </p>

                <h2>Current Balance: <?php cardanoPress()->template('part/payment-balance'); ?> ADA</h2>
                <p class='fs-5 fst-italic'>
                    <?php cardanoPress()->template('part/payment-balance', ['format' => 'lovelace']); ?> Lovelace
                </p>

                <template x-if='!syncedBalance'>
					<?php cardanoPress()->template('part/balance-sync'); ?>
                </template>
            </div>

            <template x-if='!isVerified'>
				<div class="py-3">
					<?php cardanoPress()->template('part/payment-recaptcha'); ?>
				</div>
			</template>

            <table class="table">
                <thead>
                    <tr>
                        <th>Percentage</th>
                        <th>Address</th>
                        <th>Amount</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    <?php for ($i = 1; $i <= 5; $i++) : ?>
                        <tr x-data="splitForm" data-fee="<?php echo $fixedFee; ?>">
                            <td>
                                <input x-model="percentage" type="number" min='0' max='100' class="form-control">
                            </td>
                            <td class="w-50">
                                <input x-model="address" type="text" class="form-control">
                            </td>
                            <td class="w-25">
                                <input x-bind:value='paymentAmount' type="text" class="form-control" readonly disabled>
                            </td>
                            <td>
                                <button
                                    x-on:click.prevent='handleSend()'
                                    x-bind:disabled='!isConnected || !isReady()'
									class="btn btn-primary"
                                >
                                    Send
                                </button>

                                <span x-text='transactionHash'></span>
                            </td>
                        </tr>
                    <?php endfor; ?>
                </tbody>

                <tfoot>
                    <tr>
                        <td colspan='4'>
                            <h2>
								Remaining Balance: <?php cardanoPress()->template(
									'part/payment-balance',
									['type' => 'remaining']
								); ?> ADA
							</h2>
                            <p class='fs-5 fst-italic'>
                                <?php cardanoPress()->template(
									'part/payment-balance',
									['type' => 'remaining', 'format' => 'lovelace']
								); ?> Lovelace
                            </p>
                        </td>
                    </tr>
                </tfoot>
            </table>
        </form>
    </div>
</main>

<?php

get_footer();

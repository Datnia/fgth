<?php
/**
 * Checkout Payment Section
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/payment.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.5.3
 */

defined('ABSPATH') || exit;

if (!is_ajax()) {
    do_action('woocommerce_review_order_before_payment');
}
?>
<div id="payment" class="woocommerce-checkout-payment hidden-slide">
	<h4>Payment Confirmation</h4>
	<?php if (WC()->cart->needs_payment()): ?>
		<ul class="wc_payment_methods payment_methods methods">
			<?php
if (!empty($available_gateways)) {
    foreach ($available_gateways as $gateway) {
        wc_get_template('checkout/payment-method.php', array('gateway' => $gateway));
    }
} else {
    echo '<li class="woocommerce-notice woocommerce-notice--info woocommerce-info">' . apply_filters('woocommerce_no_available_payment_methods_message', WC()->customer->get_billing_country() ? esc_html__('Sorry, it seems that there are no available payment methods for your state. Please contact us if you require assistance or wish to make alternate arrangements.', 'woocommerce') : esc_html__('Please fill in your details above to see available payment methods.', 'woocommerce')) . '</li>'; // @codingStandardsIgnoreLine
}
?>
		</ul>
	<?php endif;?>
	<?php

defined('ABSPATH') || exit;

if (!wc_coupons_enabled()) { // @codingStandardsIgnoreLine.
    return;
}

?>
<div class="woocommerce-form-coupon-toggle">
	<?php wc_print_notice(apply_filters('woocommerce_checkout_coupon_message', esc_html__('Have a coupon?', 'woocommerce') . ' <a href="#" class="showcoupon">' . esc_html__('Click here to enter your code', 'woocommerce') . '</a>'), 'notice');?>
</div>

<form class="checkout_coupon woocommerce-form-coupon" method="post">
	<h4>Promo Code</h4>
	<label><?php esc_html_e('If you have a coupon code, please apply it below.', 'woocommerce');?></label>
	<div class="wrapper">

		<input type="text" name="coupon_code" class="input-text"  id="coupon_code" value="" />
		<button type="submit" class="button" name="apply_coupon" value="<?php esc_attr_e('Apply coupon', 'woocommerce');?>"><?php esc_html_e('Apply coupon', 'woocommerce');?></button>
	</div>
	<div class="clear"></div>

</form>



	<div class="form-row place-order">
		<div class="overlay">
		<div class="container">
			<h4>Terms & Conditions <i class="fas fa-chevron-down close-terms"></i></h4>
			<p><strong>Payment Approval / Aprobación de Pago</strong></p>
			<p>I hereby authorize Cathleen Cueto and From Grieving to Healing to bill my credit card listed based on the payment terms I selected on this billing agreement.
			<p>Autorizo ​​a Cathleen Cueto y a From Grieving to Healing a cargar mi tarjeta de crédito según los términos de pago que seleccioné en este Acuerdo de Facturación.</p>
			<p><strong>Enrollment Form / Formulario de Inscripción</strong></p>
				<div  class="content">
					<p class="header">I have read, and agree to the terms stated in <a target="_blank" href=<?php echo wp_get_attachment_url(1309) ?>>The Enrollment Form</a><i class="fas fa-chevron-down"></i></p>
					<div class="overflow">
					<p><strong>Program Enrollment Agreement Terms and Conditions</strong></p>
					<p>Once I sign up for any From Grieving to Healing program, I authorize From Grieving to Healing to chargemy credit card based on the payment option I select.  I understand and commit to working with totalintegrity, honesty and confidentiality. I understand and agree that, by completing and signing this enrollment form, I will have my credit card charged (or check cashed) at the billing rates described onthe Billing Form based on my selected payment option for my inclusion in these programs.</p>
					<p>I understand and agree that by completing and signing this enrollment form that I am committing to the full program period that I select. I further understand and agree that, if, for any reason, I choose to remove or cancel myself out of the program prior to the program end date, I am obligated to pay or continue paying any outstanding baIance(s) for the entire program period for any payment option I select. I understand this is a non-cancelable commitment and I understand the program details described in the Billing Form which preceded this agreement.</p>
					<p>Further, I fully understand and acknowledge that Cathleen Cueto or any representative of From Grieving to Healing make no promises, guarantees or other claims regarding any results that may be obtained from the program. All products and services are for educational and informational purposes only. Use caution and seek the advice of qualified professionals. Participants’ results will vary depending on a number of factors, including but not limited to personality, open-mindedness, willingness to follow instructions, perform recommended tasks and participate in all follow-up exercises, and I understand that all actions and results are up to me. I therefore agree to hold harmless Cathleen Cueto, From Grieving to Healing, and any representative from any/all claims that may arise from my participation in any From Grieving to Healing programs.</p>
					<p>From Grieving to Healing has sole discretion to terminate this agreement and remove any participant from continuing in the program at any time without a refund if the participant is disrupting the program or is difficult to work with, becomes difficult to work with, or ceases to follow the From Grieving to Healing and/or Grief Recovery Method guidelines. If From Grieving to Healing terminates the agreement and participant is on any type of payment plan or billing plan, participant will no longer be charged the outstanding balance remaining up to that point.  </p>
					<p>Please note that depending on your method of payment, the payments to From Grieving to Healing will reflect on your credit card billing statement as GRIEVE2HEAL or From Grieving to Healing, LLC. </p>
				</div>
				</div>
				<div class="content">
					<p class="header">He leído y acepto los términos establecidos en el <a target="_blank" href=<?php echo wp_get_attachment_url(1310) ?>>Formulario de Inscripción</a><i class="fas fa-chevron-down"></i></p>
					<div class="overflow">
					<p><strong>Términos y Condiciones del Acuerdo de Inscripción en la Programa</strong></p>
					<p>Una vez que me inscriba en cualquier programa de From Grieving to Healing, autorizo a From Grieving to Healing a cobrar mi tarjeta de crédito de acuerdo a la opción de pago que seleccione. Entiendo y me comprometo a trabajar con total integridad, honestidad y confidencialidad. Entiendo y acepto que, al completar y firmar este formulario de inscripción, se cargará mi tarjeta de crédito (o se cobrará el cheque) a las tasas de facturación descritas en el Acuerdo de Facturación basado en mi opción de pago seleccionada para mi inclusión en estos programas. </p>
					<p>Entiendo y acepto que al completar y firmar este formulario de inscripción que me estoy comprometiendo para el período completo del programa que seleccione. Además, entiendo y acepto que, si, por cualquier motivo, elijo eliminar o cancelar mi participación en el programa antes de la fecha de finalización del programa, estoy obligado a pagar o continuar pagando cualquier saldo (s) pendiente (s) durante todo el período del programa por cualquier opción de pago que seleccione.</p>
					<p>Entiendo que este es un compromiso que no se puede cancelar y entiendo los detalles del programa descrito en el Acuerdo de Facturación.</p>
					<p>Además, entiendo completamente y reconozco que Cathleen Cueto o cualquier representante de From Grieving to Healing no hace promesas, garantías u otras reclamaciones con respecto a los resultados que se pueden obtener del programa y que todos los productos y servicios son solo para fines educativos e informativos. Utilizare precaución y si es necesario buscare el consejo de profesionales calificados. Los resultados de los participantes variarán según un número de factores, que incluyen, pero no se limitan a la personalidad, apertura de mente, voluntad de seguir instrucciones y realizar las tareas recomendadas y la participación en todos los ejercicios de seguimiento, y entiendo que todas las acciones y resultados dependen de mí. Por lo tanto, estoy de acuerdo en mantener indemne a Cathleen Cueto, From Grieving to Healing, y cualquier representante de todos los reclamos que puedan surgir de mi participación en cualquier programa de From Grieving to Healing.</p>
					<p>From Grieving to Healing tiene la exclusiva discreción de rescindir este acuerdo y eliminar a cualquier participante de continuar en el programa en cualquier momento sin ningún reembolso si el participante está interrumpiendo el programa o es difícil trabajar con él, se vuelve difícil trabajar con él o deja de seguir los protocolos establecidos por From Grieving to Healing y El Método Grief Recovery. Si From Grieving to Healing finaliza el acuerdo y el participante está en cualquier tipo de plan de pago o plan de facturación, ya no se le cobrará al participante el saldo pendiente restante lo que se ha pagado hasta ese punto.</p>
					<p>Dependiendo de su método de pago, los pagos a From Grieving to Healing se reflejarán en el estado de cuenta de su tarjeta de crédito como GRIEVE2HEAL o From Grieving to Healing, LLC.</p>
				</div>
				</div>
		</div>
		</div>
		<noscript>
			<?php
/* translators: $1 and $2 opening and closing emphasis tags respectively */
printf(esc_html__('Since your browser does not support JavaScript, or it is disabled, please ensure you click the %1$sUpdate Totals%2$s button before placing your order. You may be charged more than the amount stated above if you fail to do so.', 'woocommerce'), '<em>', '</em>');
?>
			<br/><button type="submit" class="button alt" name="woocommerce_checkout_update_totals" value="<?php esc_attr_e('Update totals', 'woocommerce');?>"><?php esc_html_e('Update totals', 'woocommerce');?></button>
		</noscript>

		<?php wc_get_template('checkout/terms.php');?>

		<?php do_action('woocommerce_review_order_before_submit');?>

		<?php echo apply_filters('woocommerce_order_button_html', '<button type="submit" class="button alt" name="woocommerce_checkout_place_order" id="place_order" value="' . esc_attr($order_button_text) . '" data-value="' . esc_attr($order_button_text) . '">' . esc_html($order_button_text) . '</button>'); // @codingStandardsIgnoreLine                 ?>

		<?php do_action('woocommerce_review_order_after_submit');?>

		<?php wp_nonce_field('woocommerce-process_checkout', 'woocommerce-process-checkout-nonce');?>
	</div>
</div>
<?php
if (!is_ajax()) {
    do_action('woocommerce_review_order_after_payment');
}

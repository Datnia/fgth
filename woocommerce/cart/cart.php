<?php
/**
 * Cart Page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/cart.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.7.0
 */

defined('ABSPATH') || exit;

do_action('woocommerce_before_cart');

?>

<form class="woocommerce-cart-form" action="<?php
echo esc_url(wc_get_cart_url());
?>" method="post">

    <h3>Cart</h3>

    <?php
do_action('woocommerce_before_cart_table');
?>

    <div class="shop_table shop_table_responsive cart woocommerce-cart-form__contents">

    <?php
do_action('woocommerce_before_cart_contents');
?>

<?php
foreach (WC()->cart->get_cart() as $cart_item_key => $cart_item) {
    $_product = apply_filters('woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key);
    $product_id = apply_filters('woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key);

    if ($_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters('woocommerce_cart_item_visible', true, $cart_item, $cart_item_key)) {
        $product_permalink = apply_filters('woocommerce_cart_item_permalink', $_product->is_visible() ? $_product->get_permalink($cart_item) : '', $cart_item, $cart_item_key);
        ?>

<div class="woocommerce-cart-form__cart-item <?php
echo esc_attr(apply_filters('woocommerce_cart_item_class', 'cart_item', $cart_item, $cart_item_key));
        ?>">

<div class="product-remove">
                            <?php
echo apply_filters( // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
            'woocommerce_cart_item_remove_link', sprintf('<a href="%s" class="remove" aria-label="%s" data-product_id="%s" data-product_sku="%s">&times;</a>', esc_url(wc_get_cart_remove_url($cart_item_key)), esc_html__('Remove this item', 'woocommerce'), esc_attr($product_id), esc_attr($_product->get_sku())), $cart_item_key);
        ?>
                     </div>

     <div class="prod-wrapper">
    <div class="upper-wrapper">
     <div class="product-thumbnail">
                        <?php
$thumbnail = apply_filters('woocommerce_cart_item_thumbnail', $_product->get_image(), $cart_item, $cart_item_key);

        if (!$product_permalink) {
            echo $thumbnail; // PHPCS: XSS ok.
        } else {
            printf('<a href="%s">%s</a>', esc_url($product_permalink), $thumbnail); // PHPCS: XSS ok.
        }
        ?>
                     </div>

                        <div class="product-name" data-title="<?php
esc_attr_e('Product', 'woocommerce');
        ?>">
                        <?php
if (!$product_permalink) {
            echo wp_kses_post(apply_filters('woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key) . '&nbsp;');
        } else {
            echo "<p><strong>" . wp_kses_post(apply_filters('woocommerce_cart_item_name', sprintf('<a href="%s">%s</a>', esc_url($product_permalink), $_product->get_title()), $cart_item, $cart_item_key)) . "</strong></p>";
        }
        ?>
      </div>
      </div>
        <div class="lower-wrapper">
        <div>
        <?php
if ($_product->is_type('simple')) {
            echo "<p>One Time Payment of $" . $_product->get_price() . "</p>";
        } else {
            $str = strlen($_product->get_title());
            $strMax = strlen($_product->get_name());
            $strDif = ($strMax - $str) - 3;
            echo "<p>" . substr($_product->get_name(), -$strDif) . "</p>";
            if (strpos($_product->get_name(), 'Two-Payments') !== false) {
                echo "<span>The second payment will be auto-debited from your credit card 30 days after the first payment.</span>";
            }
            $initialPayment = $initialPayment + (get_post_meta($_product->get_id(), "_subscriptio_signup_fee", true)) * $cart_item['quantity'];
        }

        do_action('woocommerce_after_cart_item_name', $cart_item, $cart_item_key);

        // Meta data.
        echo wc_get_formatted_cart_item_data($cart_item); // PHPCS: XSS ok.

        // Backorder notification.
        if ($_product->backorders_require_notification() && $_product->is_on_backorder($cart_item['quantity'])) {
            echo wp_kses_post(apply_filters('woocommerce_cart_item_backorder_notification', '<p class="backorder_notification">' . esc_html__('Available on backorder', 'woocommerce') . '</p>', $product_id));
        }

        ?>
      </div>

        <div class="product-quantity" data-title="<?php
esc_attr_e('Quantity', 'woocommerce');
        ?>">
               <i class="fas inc fa-caret-up"></i>
                        <?php
if ($_product->is_sold_individually()) {
            $product_quantity = sprintf('1 <input type="hidden" name="cart[%s][qty]" value="1" />', $cart_item_key);
        } else {
            $product_quantity = woocommerce_quantity_input(array(
                'input_name' => "cart[{$cart_item_key}][qty]",
                'input_value' => $cart_item['quantity'],
                'max_value' => $_product->get_max_purchase_quantity(),
                'min_value' => '0',
                'product_name' => $_product->get_name(),
            ), $_product, false);
        }

        echo apply_filters('woocommerce_cart_item_quantity', $product_quantity, $cart_item_key, $cart_item); // PHPCS: XSS ok.
        ?>
        <i class="fas dec fa-caret-down"></i>
                     </div>
                     </div>

     </div>


    </div>

    <?php
}
}
?>

</div>

<?php do_action('woocommerce_cart_contents');?>
					<button type="submit" class="button" name="update_cart" value="<?php esc_attr_e('Update cart', 'woocommerce');?>"><?php esc_html_e('Update cart', 'woocommerce');?></button>
					<?php do_action('woocommerce_cart_actions');?>
                    <?php wp_nonce_field('woocommerce-cart', 'woocommerce-cart-nonce');?>
                    <?php do_action('woocommerce_after_cart_contents');?>
				</td>
			</tr>




    <?php
do_action('woocommerce_before_cart_table');
?>



<?php
do_action('woocommerce_cart_contents');
?>



            <?php
do_action('woocommerce_after_cart_contents');
?>
     </tbody>
    </table>
    <?php
do_action('woocommerce_after_cart_table');
?>


<?php
do_action('woocommerce_before_cart_collaterals');
?>

<div class="cart-collaterals">
    <?php
/**
 * Cart collaterals hook.
 *
 * @hooked woocommerce_cross_sell_display
 * @hooked woocommerce_cart_totals - 10
 */
do_action('woocommerce_cart_collaterals');
?>
</div>

<div class="wrapper">
<h3 id="order_review_heading"><?php
esc_html_e('Your order', 'woocommerce');
?></h3>

    <?php
global $woocommerce;
$totalDueToday = $woocommerce->cart->total - $initialPayment;
?>
<table style="margin: 0" class="shop_table">
<tfoot><tr class="order-total due-today">
<td>Total Due Today<span>?</span><span class="help">If you selected a two-payment option, the Total Due Today includes only the first payment.</span></td>
<td><?php echo "<strong>$" . number_format($totalDueToday) . ".00</strong>" ?></td>
</tr></tfoot>
</table>
<?php

do_action('woocommerce_checkout_before_order_review');
?>

    <div id="order_review" class="woocommerce-checkout-review-order">
        <?php
do_action('woocommerce_checkout_order_review');
?>
 </div>
</div>

    <?php
do_action('woocommerce_checkout_after_order_review');
?>


<?php
do_action('woocommerce_after_cart');
?>
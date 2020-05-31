<?php get_header();?>
<section id="cart">
	<h1>Checkout</h1>

<div class="component-wrapper">

<?php
if (WC()->cart->get_cart_contents_count() == 0) {

    include "empty-cart.php";

} else {
    if (have_posts()) {
        while (have_posts()) {
            the_post();
            the_content();
        }
    }
}
?>
</div>


</section>



<?php get_footer();?>
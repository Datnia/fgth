
<?php get_header();?>


<section id="product-banner">
    <header>
    <h1>
    <?php
foreach ((get_the_terms($post->ID, 'product_cat')) as $category) {
    echo $category->name;
}?>


</h1>
<div class="img-wrapper">
    <?php the_post_thumbnail();?>
</div>
</header>
<div class="circle light-blue one  " data- -speed="2"></div>
<div class="circle dark-blue two  " data- -speed="-1" ></div>
<div class="circle light-blue three  " data- -speed="1"></div>
<div class="half-circles"></div>
</section>



<?php
$product_categories = (get_the_terms($post->ID, 'product_cat'));
$count = count($product_categories); 
if ($count > 0) {
    foreach ($product_categories as $product_category) {
        $args = array(
            'posts_per_page' => -1,
            'tax_query' => array(
                'relation' => 'AND',
                array(
                    'taxonomy' => 'product_cat',
                    'field' => 'slug',
                    'terms' => $product_category->slug,
                ),
            ),
            'post_type' => 'product',
            'orderby' => 'title,',
        );
        $products = new WP_Query($args);
        ?>
        <section id="product" class="<?php echo $product_category->slug ?>">
        <nav>
<?php
        while ($products->have_posts()) {
            $products->the_post();
            ?>
                <li>
                    <a href="<?php the_permalink();?>">
                        <?php $product = wc_get_product();
            echo $product->get_attribute('nav_display');?>
            <span><?php echo $product->get_attribute('nav_time'); ?></span>
                    </a>
                </li>
            <?php
}
    }
}
wp_reset_query();
?>
<a class="arrow" href=<?php
$link = '';
$terms = get_the_terms($post->ID, 'product_cat');
if (!empty($terms[0])) {
    $link = get_term_link($terms[0]->term_id, 'product_cat');
}
echo $link;?>><img src=<?php echo wp_get_attachment_url(232) ?> alt="arrow"></a>
</nav>
<div class="container">
<?php the_title("<h2>", "</h2>");?>
<div class="component-wrapper">
 <div class="major">
            <header>

                <?php
$terms = wp_get_post_terms($post->ID, 'product_cat');
foreach ($terms as $term) {
    $categories[] = $term->slug;
}

if (in_array('group-programs', $categories)) {
    echo '<a style="width: 162px" class="link1 active" href="#about-the-program">About the Program</a>
                        <a style="width: 155px" class="link2" href="#program-structure">Program Structure</a>
                        <a style="width: 131px" class="link3" href="#program-dates">Program Dates</a>';
} else if (strpos(get_the_title(), "Emergencia") !== false) {
    echo '<a style="width: 69px" class="link1 active" href="#detalles-del-programa">Detalles</a>
    <a style="width: 90px" class="link2" href="#estructura">Estructura</a>
    <a style="width: 145px" class="link3" href="#nota-importante">Nota Importante</a>';
} elseif (in_array('programas-en-grupo', $categories)) {
    echo '<a style="width: 185px" class="link1 active" href="#detalles-del-programa">Detalles del Programa</a>
                    <a style="width: 90px" class="link2" href="#estructura">Estructura</a>
                    <a style="width: 145px" class="link3" href="#nota-importante">Nota Importante</a>';
} else if (in_array('programas-privados', $categories)) {
    echo '<a style="width: 185px" class="link1 active" href="#detalles-del-programa">Detalles del Programa</a>
            <a style="width: 90px" class="link2" href="#estructura">Estructura</a>
            <a style="width: 145px" class="link3" href="#nota-importante">Nota Importante</a>';
} else if (strpos(get_the_title(), "Emergency") !== false) {
    echo '<a style="width: 59px" class="link1 active" href="#about-the-program">Details</a>
    <a style="width: 155px" class="link2" href="#program-structure">Program Structure</a>
    <a style="width: 131px" class="link3" href="#program-dates">Important Note</a>';
} else {
    echo '<a style="width: 162px" class="link1 active" href="#about-the-program">About the Program</a>
            <a style="width: 155px" class="link2" href="#program-structure">Program Structure</a>
            <a style="width: 131px" class="link3" href="#important-note">Important Note</a>';
}

?>
            </header>
            <div class="content">
            <?php
if (have_posts()) {
    while (have_posts()) {
        the_post();
        the_content();
    }
}
?>
            </div>
        </div>
        <div class="minor">
    <?php

    if ($product->is_purchasable() && strpos($product->get_title(), "Emergency") !== false) {
        echo
        "<div class='has-price wrapper'>
    <h3>Pricing</h3>";
    
        echo "<h4>Option 1</h4>
        <p>One-Time Payment of $" . number_format(preg_replace('/.00/', '', $variation_max_price = $product->get_variation_price())) . "</p>
        <p>Phone Session</p>
        <p><strong>Total: $" . number_format(preg_replace('/.00/', '', $variation_max_price = $product->get_variation_price())) . "</strong></p>
        <h4>Option 2</h4>
        <p>One-Time Payment of $" . preg_replace('/.00/', '', $variation_min_price = $product->get_variation_price("max")) . "</p>
        <p>In-Person Session</p>
        <p><strong>Total: $" . number_format($variation_min_price = $product->get_variation_price("max")) . "</strong></p></div>
        <div class='option-wrapper'>
        <h4>Select Your Payment Option</h4>";

        if (!defined('ABSPATH')) {
            exit;
        }
        global $product;
        echo apply_filters('woocommerce_variable_add_to_cart',
            sprintf('<a rel="nofollow" href="%s" data-quantity="%s" data-product_id="%s" data-product_sku="%s" class="%s">%s</a>',
                esc_url($product->add_to_cart_url()),
                esc_attr(isset($quantity) ? $quantity : 1),
                esc_attr($product->id),
                esc_attr($product->get_sku()),
                esc_attr(isset($class) ? $class : 'button'),
                esc_html($product->add_to_cart_text())
            ),
            $product);
        echo "</div>";
    
    echo "</div>";

    } else if ($product->is_purchasable() && strpos($product->get_title(), "Emergencia") !== false) {
        echo
        "<div class='has-price wrapper'>
    <h3>Precios</h3>";
    
        echo "<h4>Opción 1</h4>
        <p>Pago Único de $" . number_format(preg_replace('/.00/', '', $variation_max_price = $product->get_variation_price())) . "</p>
        <p>Sesión por Teléfono</p>
        <p><strong>Total: $" . number_format(preg_replace('/.00/', '', $variation_max_price = $product->get_variation_price())) . "</strong></p>
        <h4>Opción 2</h4>
        <p>Pago Único de $" . preg_replace('/.00/', '', $variation_min_price = $product->get_variation_price("max")) . "</p>
        <p>Sesión en Persona</p>
        <p><strong>Total: $" . number_format($variation_min_price = $product->get_variation_price("max")) . "</strong></p></div>
        <div class='option-wrapper'>
        <h4>Seleccione Su Opción de Pago</h4>";

        if (!defined('ABSPATH')) {
            exit;
        }
        global $product;
        echo apply_filters('woocommerce_variable_add_to_cart',
            sprintf('<a rel="nofollow" href="%s" data-quantity="%s" data-product_id="%s" data-product_sku="%s" class="%s">%s</a>',
                esc_url($product->add_to_cart_url()),
                esc_attr(isset($quantity) ? $quantity : 1),
                esc_attr($product->id),
                esc_attr($product->get_sku()),
                esc_attr(isset($class) ? $class : 'button'),
                esc_html($product->add_to_cart_text())
            ),
            $product);
        echo "</div><style>
        #product .minor .option-wrapper form.cart .value div label {
            max-width:255px;
        }
        </style>";
    
    echo "</div>";

    }

else if ($product->is_purchasable() && in_array('programas-privados', $categories) || $product->is_purchasable() && in_array('programas-en-grupo', $categories)) {

    echo
        "<div class='has-price wrapper'>
    <h3>Precio del Programa</h3>";
    if ($product->is_type('variable')) {
        echo "<h4>Opción 1</h4>
        <p>Pago Único de $" . number_format(preg_replace('/.00/', '', $variation_max_price = $product->get_variation_price('max'))) . "</p>
        <p><strong>Total: $" . number_format(preg_replace('/.00/', '', $variation_max_price = $product->get_variation_price('max'))) . "</strong></p>
        <h4>Opción 2</h4>
        <p>Dos Pagos de $" . preg_replace('/.00/', '', $variation_min_price = $product->get_variation_price('min')) . "</p>
        <p><strong>Total: $" . number_format($variation_min_price = $product->get_variation_price('min') * 2) . "</strong></p>
        <p class='note'>$" . number_format($variation_min_price = $product->get_variation_price('min')) . " al momento del registro y $" . number_format($variation_min_price = $product->get_variation_price('min')) . " se cargarán automáticamente en su tarjeta de crédito 30 días después del primer pago.</p></div>
        <div class='option-wrapper'>
        <h4>Seleccione Su Opción de Pago</h4>";

        if (!defined('ABSPATH')) {
            exit;
        }
        global $product;
        echo apply_filters('woocommerce_variable_add_to_cart',
            sprintf('<a rel="nofollow" href="%s" data-quantity="%s" data-product_id="%s" data-product_sku="%s" class="%s">%s</a>',
                esc_url($product->add_to_cart_url()),
                esc_attr(isset($quantity) ? $quantity : 1),
                esc_attr($product->id),
                esc_attr($product->get_sku()),
                esc_attr(isset($class) ? $class : 'button'),
                esc_html($product->add_to_cart_text())
            ),
            $product);
        echo "</div>";
    } else {
        echo "<h4>Opción 1</h4>
    <p>Pago Único de $" . number_format($product->get_price()) . "</p>" . "<p><strong>Total: $" . number_format($product->get_price()) . "</strong></p></div>
    <div class='option-wrapper'>
    <h4>Seleccione Su Opción de Pago</h4>
    <label><input type='radio' checked> Pago Único de $" . number_format($product->get_price()) . "<span></span></label></div>";

        defined('ABSPATH') || exit;

        global $product;

        if (!$product->is_purchasable()) {
            return;
        }

        echo wc_get_stock_html($product);

        if ($product->is_in_stock()): ?>

<?php do_action('woocommerce_before_add_to_cart_form');?>

<form class="cart" action="<?php echo esc_url(apply_filters('woocommerce_add_to_cart_form_action', $product->get_permalink())); ?>" method="post" enctype='multipart/form-data'>
    <?php do_action('woocommerce_before_add_to_cart_button');?>

    <?php
do_action('woocommerce_before_add_to_cart_quantity');
        woocommerce_quantity_input(array(
            'min_value' => apply_filters('woocommerce_quantity_input_min', $product->get_min_purchase_quantity(), $product),
            'max_value' => apply_filters('woocommerce_quantity_input_max', $product->get_max_purchase_quantity(), $product),
            'input_value' => isset($_POST['quantity']) ? wc_stock_amount(wp_unslash($_POST['quantity'])) : $product->get_min_purchase_quantity(),
        ));
        do_action('woocommerce_after_add_to_cart_quantity');
        ?>

    <button class="btn" type="submit" value="<?php echo esc_attr($product->get_id()); ?>" name="add-to-cart" class="single_add_to_cart_button button alt"><?php echo esc_html($product->single_add_to_cart_text()); ?></button>

    <?php do_action('woocommerce_after_add_to_cart_button');?>
</form>

<?php do_action('woocommerce_after_add_to_cart_form');?>

<?php endif;

    }
    echo "</div>";

} else if ($product->is_purchasable()) {

    echo
        "<div class='has-price wrapper'>
    <h3>Program Pricing</h3>";
    if ($product->is_type('variable')) {
        echo "<h4>Option 1</h4>
        <p>One-Time Payment of $" . number_format(preg_replace('/.00/', '', $variation_max_price = $product->get_variation_price('max'))) . "</p>
        <p><strong>Total: $" . number_format(preg_replace('/.00/', '', $variation_max_price = $product->get_variation_price('max'))) . "</strong></p>
        <h4>Option 2</h4>
        <p>Two-Payments of $" . preg_replace('/.00/', '', $variation_min_price = $product->get_variation_price('min')) . "</p>
        <p><strong>Total: $" . number_format($variation_min_price = $product->get_variation_price('min') * 2) . "</strong></p>
        <p class='note'>$" . number_format($variation_min_price = $product->get_variation_price('min')) . " due upon registration and then $" . number_format($variation_min_price = $product->get_variation_price('min')) . " will be auto-debited from your credit card 30 days after the first payment.</p></div>
        <div class='option-wrapper'>
        <h4>Select Your Payment Option</h4>";

        if (!defined('ABSPATH')) {
            exit;
        }
        global $product;
        echo apply_filters('woocommerce_variable_add_to_cart',
            sprintf('<a rel="nofollow" href="%s" data-quantity="%s" data-product_id="%s" data-product_sku="%s" class="%s">%s</a>',
                esc_url($product->add_to_cart_url()),
                esc_attr(isset($quantity) ? $quantity : 1),
                esc_attr($product->id),
                esc_attr($product->get_sku()),
                esc_attr(isset($class) ? $class : 'button'),
                esc_html($product->add_to_cart_text())
            ),
            $product);
        echo "</div>";
    } else {
        echo "<h4>Option 1</h4>
    <p>One-Time Payment of $" . number_format($product->get_price()) . "</p>" . "<p><strong>Total: $" . number_format($product->get_price()) . "</strong></p></div>
    <div class='option-wrapper'>
    <h4>Select Your Payment Option</h4>
    <label><input type='radio' checked> One-Time Payment of $" . number_format($product->get_price()) . "<span></span></label>";

        defined('ABSPATH') || exit;

        global $product;

        if (!$product->is_purchasable()) {
            return;
        }

        echo wc_get_stock_html($product);

        if ($product->is_in_stock()): ?>

<?php do_action('woocommerce_before_add_to_cart_form');?>

<form class="cart" action="<?php echo esc_url(apply_filters('woocommerce_add_to_cart_form_action', $product->get_permalink())); ?>" method="post" enctype='multipart/form-data'>
    <?php do_action('woocommerce_before_add_to_cart_button');?>

    <?php
do_action('woocommerce_before_add_to_cart_quantity');
        woocommerce_quantity_input(array(
            'min_value' => apply_filters('woocommerce_quantity_input_min', $product->get_min_purchase_quantity(), $product),
            'max_value' => apply_filters('woocommerce_quantity_input_max', $product->get_max_purchase_quantity(), $product),
            'input_value' => isset($_POST['quantity']) ? wc_stock_amount(wp_unslash($_POST['quantity'])) : $product->get_min_purchase_quantity(),
        ));
        do_action('woocommerce_after_add_to_cart_quantity');
        ?>

    <button class="btn" type="submit" value="<?php echo esc_attr($product->get_id()); ?>" name="add-to-cart" class="single_add_to_cart_button button alt"><?php echo esc_html($product->single_add_to_cart_text()); ?></button>

    <?php do_action('woocommerce_after_add_to_cart_button');?>
</form>

<?php do_action('woocommerce_after_add_to_cart_form');?>

<?php endif;

    }
    echo "</div>";

} else if (strpos($product->get_title(), "Weekend") !== false) {
    echo "<div class='wrapper'>
    <h3>Contact Us for More Information</h3>
    <h4>This program is offered throughout the year and the location varies</h4>
    </div>
    <p class='no-price'>Click on the button below to contact us for program dates and pricing.</p>
    <a class='btn' style='margin-bottom: 30px' href='" . get_the_permalink(22) . "'>CONTACT US</a>";
} else if (strpos($product->get_title(), "Fin de Semana") !== false) {
    echo "<div class='wrapper'>
    <h3>Contáctenos Para Obtener Más Información</h3>
    <h4>Nuestros talleres de fin de semana se realizan durante todo el año y la ubicación varía en todo Los Angeles.</h4>
    </div>
    <p class='no-price'>Haga clic en el botón para obtener más información sobre las próximas fechas de nuestros talleres de fin de semana o llámenos hoy al (310) 954-1996. ¡Estamos para servirle!</p>
    <a class='btn' href='" . get_the_permalink(22) . "'>Más Información</a>";
} else {

    echo
    "<div class='wrapper'>
    <h3>Contact Us for More Information</h3>
    <h4> ". get_the_content() . "</h4>
    </div>
    <p class='no-price'>Click on the button below to contact us for program dates and pricing.</p>
    <a class='btn' href='" . get_the_permalink(22) . "'>CONTACT US</a>
    <style>

    #product .container .major {
        display: none;
    }

    #product .container .minor{
        width: 750px;
        min-width:750px;
        padding-bottom: 50px;
    }
    </style>

    ";
}
;?>
</section>




<?php if (in_array('group-programs', $categories)) {
    echo '<section id="programs-section-cta"><div class="icon-wrapper"><i class="fas fa-check"></i></div>
        <h2>Already Signed Up?</h2>
        <h4>View the group calendar to find out when your program is scheduled.</h4>
        <a class="btn" href=' . get_the_permalink(12) . '>VIEW GROUP SCHEDULE</a><div class="large-half-circles one"></div><div class="large-half-circles two"></div></section>
    ';
} else if (in_array('1-on-1-programs', $categories)) {
    echo '<section id="programs-section-cta"><div class="icon-wrapper"><i class="fas fa-search"></i></div>
        <h2>Looking for Group Programs?</h2>
        <h4>We offer group programs as well. Find the perfect one for you!</h4>
        <a class="btn" href=' . get_term_link(23, 'product_cat') . '>VIEW GROUP PROGRAMS</a><div class="large-half-circles one"></div><div class="large-half-circles two"></div></section>
    ';
} else if (in_array('programas-en-grupo', $categories)) {
    echo '<section id="programs-section-cta"><div class="icon-wrapper"><i class="fas fa-search"></i></div>
        <h2>¿Busca Programas Privados?</h2>
        <h4>Ofrecemos programas privados también. ¡Encuentre el programa perfecto para usted!</h4>
        <a class="btn" href=' . get_term_link(29, 'product_cat') . '>Ver Programas Privados</a><div class="large-half-circles one"></div><div class="large-half-circles two"></div></section>
    ';
} else if (in_array('programas-privados', $categories)) {
    echo '<section id="programs-section-cta"><div class="icon-wrapper"><i class="fas fa-search"></i></div>
        <h2>¿Busca Programas en Grupo?</h2>
        <h4>Ofrecemos programas en grupo también. ¡Encuentre el programa perfecto para usted!</h4>
        <a class="btn" href=' . get_term_link(28, 'product_cat') . '>VER PROGRAMAS EN GRUPO</a><div class="large-half-circles one"></div><div class="large-half-circles two"></div></section>
    ';
}
;?>


 </h1>


<section id="cart-modal">
<div class="container">
    <div class="loader">
    <svg class="spinner" width="65px" height="65px" viewBox="0 0 66 66" xmlns="http://www.w3.org/2000/svg">
   <circle class="path" fill="none" stroke-width="6" stroke-linecap="round" cx="33" cy="33" r="30"></circle>
</svg>
    </div>
<i class="fas fa-times close-modal"></i>
<div class="img-wrapper">
<img src="<?php echo wp_get_attachment_url(692); ?>" alt="cart">
</div>
<h3><?php the_title();?> has been added to your cart.</h3>
<div class="btn-wrapper">
<button id="continue" class="btn">CONTINUE BROWSING</button>
<button class="btn view-cart">VIEW CART</button>
</div>
</div>
</section>



<?php get_footer();?>
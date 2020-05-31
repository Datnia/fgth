<?php get_header();?>


<section id="programs-banner">
    <header>
<?php
single_cat_title("<h1>", "</h1>");
?>
<?php
$terms = get_the_terms('product_cat', $post->ID);
echo "<h4>" . category_description(get_category_by_slug($terms)->term_id) . "</h4>"
?>
    <div class="circle light-blue one  " data- -speed="-1"></div>
    <div class="circle light-blue two  " data- -speed="2"></div>
    </header>
    <div class="img-wrapper">
    <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($loop->post->ID), 'single-post-thumbnail');?>
    <img class="icon" src="<?php echo $image[0]; ?>" data-id="<?php echo $loop->post->ID; ?>">
    <?php
if (is_product_category()) {
    global $wp_query;
    $cat = $wp_query->get_queried_object();
    $thumbnail_id = get_woocommerce_term_meta($cat->term_id, 'thumbnail_id', true);
    $image = wp_get_attachment_url($thumbnail_id);
    echo '<img src="' . $image . '" alt="category-banner" />';
}
?>
    </div>

</section>

<section class="programs-section">
    <div class="container">
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
        while ($products->have_posts()) {
            $products->the_post();
            ?>
             <?php echo '<div class="col">';
            $product = wc_get_product();
            echo "<h3>" . $product->get_attribute('display_name') . "</h3>";
            echo "<h4>" . $product->get_attribute('time') . "</h4>";

            if (!empty($product->get_attribute('button_contact'))) {
                echo "<a class='btn contact' href='" . get_the_permalink(22) . "'>" . $product->get_attribute('button_contact') . "</a>";
            } else if (!empty($product->get_attribute('button'))) {
                echo "<a class='btn' href='" . get_the_permalink() . "'>" . $product->get_attribute('button') . "</a>";
            }

            if (!empty($product->get_attribute('tag_star'))) {
                echo "<span class='tag'><i class='fas fa-star'></i> " . $product->get_attribute('tag_star') . "</span>";
            }
            if (!empty($product->get_attribute('tag_online'))) {
                echo "<span class='tag'><i class='fas fa-globe'></i> " . $product->get_attribute('tag_online') . "</span>";
            }
            ;

            ?>

            <?php
echo "</div>";

        }
    }
}
wp_reset_query();
?>

<?php if (!is_product_category(array("Programas Privados", "Programas en Grupo"))) {
    echo '<div class="tag-wrapper"><a class="tag" href="' . get_the_permalink(105) . '">Our programs are also available in Spanish. Please view the Información en Español page for more details <i class="fas fa-long-arrow-alt-right"></i></a></div>';
}
;?>
</div>
<div class="half-circles"></div>
<div class="circle light-blue one  " data- -speed="-1"></div>
</section>



<?php if (is_product_category(array("Group Programs"))) {
    echo '<section id="programs-section-cta"><div class="icon-wrapper"><i class="fas fa-check"></i></div>
        <h2>Already Signed Up?</h2>
        <h4>View the group calendar to find out when your program is scheduled.</h4>
        <a class="btn" href=' . get_the_permalink(12) . '>VIEW GROUP SCHEDULE</a><div class="large-half-circles one"></div><div class="large-half-circles two"></div></section>
    ';
} else if (is_product_category(array("1-on-1 Programs"))) {
    echo '<section id="programs-section-cta"><div class="icon-wrapper"><i class="fas fa-search"></i></div>
        <h2>Looking for Group Programs?</h2>
        <h4>We offer group programs as well. Find the perfect one for you!</h4>
        <a class="btn" href=' . get_term_link(23, 'product_cat') . '>VIEW GROUP PROGRAMS</a><div class="large-half-circles one"></div><div class="large-half-circles two"></div></section>
    ';
} else if (is_product_category(array("Programas en Grupo"))) {
    echo '<section id="programs-section-cta"><div class="icon-wrapper"><i class="fas fa-search"></i></div>
        <h2>¿Busca Programas Privados?</h2>
        <h4>Ofrecemos programas privados también. ¡Encuentre el programa perfecto para usted!</h4>
        <a class="btn" href=' . get_term_link(29, 'product_cat') . '>Ver Programas Privados</a><div class="large-half-circles one"></div><div class="large-half-circles two"></div></section>
    ';
} else if (is_product_category(array("Programas Privados"))) {
    echo '<section id="programs-section-cta"><div class="icon-wrapper"><i class="fas fa-search"></i></div>
        <h2>¿Busca Programas en Grupo?</h2>
        <h4>Ofrecemos programas en grupo también. ¡Encuentre el programa perfecto para usted!</h4>
        <a class="btn" href=' . get_term_link(28, 'product_cat') . '>VER PROGRAMAS EN GRUPO</a><div class="large-half-circles one"></div><div class="large-half-circles two"></div></section>
    ';
}
;?>






<?php get_footer();?>


<?php get_header();?>

<?php

$s = get_search_query();

$args = array(
    's' => $s,
    'post_type' => 'product',
);
$the_query = new WP_Query($args);
$found_products = $the_query->found_posts;
wp_reset_query();

$args = array(
    's' => $s,
    'post_type' => 'post',
);
$the_query = new WP_Query($args);
$found_posts = $the_query->found_posts;
wp_reset_query();

$args = array(
    's' => $s,
    'post_type' => 'page',
);
$the_query = new WP_Query($args);
$found_pages = $the_query->found_posts;

wp_reset_query();

$args = array(
    's' => $s,
    'paged' => $paged,
    'posts_per_page' => -1,
);
$the_query = new WP_Query($args);
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

if ($the_query->have_posts()) {
    ?>
        <section id="banner">
        <h1>Search Results for: <?php echo get_query_var('s') ?></h1>
        <p style='margin-top: 10px'><?php
echo $the_query->found_posts . ' results found';
    ?></p>
    <nav>
                <a class="item1" href="#products">Products</a>
                <a class="item2" href="#posts">Blog Posts</a>
                <a class="item3"  href="#pages">Pages</a>
            </nav>
            <div class="circle light-blue one  " data- -speed="2"></div>
            <div class="circle dark-blue two  " ></div>
            <div class="circle light-blue three  " data- -speed="2"></div>
            <div class="circle light-blue four"></div>
        </section>
        <section class="content">
        <ul>
        <?php

    $types = array('product', 'post', 'page');
    foreach ($types as $type) {

        if ($type == "product" && $found_products > 0) {

            ?>
            <div class="group-wrapper anchor1" id="products">

            <h3><i class="fas fa-shopping-cart"></i><?php echo ucfirst($type) . "s" ?></h3>
            </div>
            <?php
} else if ($type == "post" && $found_posts > 0) {

            ?>
              <div class="group-wrapper anchor2" id="posts">

            <h3><i class="fas fa-edit"></i><?php echo ucfirst($type) . "s" ?></h3>
            </div>

    <?php
} else if ($type == "page" && $found_pages > 0) {

            ?>
      <div class="group-wrapper anchor3" id="pages">

    <h3><i class="fas fa-file"></i><?php echo ucfirst($type) . "s" ?></h3>
    </div>

<?php
}
        while ($the_query->have_posts()) {
            $the_query->the_post();
            if ($type == get_post_type()) {?>
                   <li>
                      <h5><a href="<?php the_permalink();?>"><?php the_title();?></a></h5>
                      <p><?php echo wp_trim_words(get_the_content(), 35) ?></p>
                    </li>
            <?php }?><?php
}
        rewind_posts();

    }
    ;

    echo "</ul>";
} else {
    ?>
        <section id="banner">
        <h1>Search Results for: <?php echo get_query_var('s') ?></h1>
        <p>Sorry, but nothing matched your search criteria. Please try again with different keywords.</p>
        </section>
        <?php
}

?>
</section>

<?php get_footer();?>

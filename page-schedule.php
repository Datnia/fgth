<?php get_header();?>

<section id="schedule-banner">
    <header>
        <?php
if (have_posts()) {
    while (have_posts()) {
        the_post();
        the_content();
    }
}
?>
</header>
</section>

<section id="scheduler">
<h1 id="selectedYear"> Group Program Calendar</h1>

<div id="calendar-container">
    <h2 id="currentMonth"></h2>
    <div class="inner">
    <ul id="month-list">
    <li id="1">January</li>
    <li id="2">February</li>
    <li id="3">March</li>
    <li id="4">April</li>
    <li id="5">May</li>
    <li id="6">June</li>
    <li id="7">July</li>
    <li id="8">August</li>
    <li id="9">September</li>
    <li id="10">October</li>
    <li id="11">November</li>
    <li id="12">December</li>
    <div class="year-wrapper">
    <select name="year" id="year">
        <option value="2020">2020</option>
        <option value="2021">2021</option>
    </select>
    <i class="fas fa-caret-down"></i>
    </div>
    </ul>
    <ul id="month-list" class="mobile">
    <div class="year-wrapper">
    <select name="year" id="year">
        <option value="2020">2020</option>
        <option value="2021">2021</option>
    </select>
    <i class="fas fa-caret-down"></i>
    </div>
    <li id="1">Jan</li>
    <li id="2">Feb</li>
    <li id="3">Mar</li>
    <li id="4">Apr</li>
    <li id="5">May</li>
    <li id="6">Jun</li>
    <li id="7">Jul</li>
    <li id="8">Aug</li>
    <li id="9">Sept</li>
    <li id="10">Oct</li>
    <li id="11">Nov</li>
    <li id="12">Dec</li>
    </ul>
    <div class="wrapper">
    <?php echo do_shortcode('[my_calendar id="my-calendar"]') ?>
    <div class="minor">
    <div class="row row-1">
            <span id="keyTitle"></span>
            <p id="keyTime"><strong></strong></p>
            <p id="keyDates"></p>
        </div>
        <div class="row row-2">
        <span id="keyTitle"></span>
            <p id="keyTime"><strong></strong></p>
            <p id="keyDates"></p>
        </div>
        <div class="row row-3">
        <span id="keyTitle"></span>
            <p id="keyTime"><strong></strong></p>
            <p id="keyDates"></p>
        </div>
        <div class="row no-programs">
            <h4>There are no group programs available for this month</h4>
        </div>
    </div>
    </div>
</div>

<div class="calendar-slider">
    <div class="slide slide-1">
        <h3 id="title"></h3>
        <h4 id="duration"></h4>
        <p id="full-description"></p>
    </div>
    <div class="slide slide-2">
        <h3 id="title"></h3>
        <h4 id="duration"></h4>
        <p id="full-description"></p>
    </div>
    <div class="slide slide-3">
        <h3 id="title"></h3>
        <h4 id="duration"></h4>
        <p id="full-description"></p>
    </div>
</div>
<div class="tag-wrapper"><a href="#" class="tag">This program continues into the next month. View next month’s schedule <i class="fas fa-long-arrow-alt-right" aria-hidden="true"></i></a>
</div>
</div>
</section>


<section id="scheduler-slider" class="programs-section">
<h2>Group Programs</h2>

<div class="container">

<?php $args = array(
    'post_type' => 'product',
    'post_status' => 'publish',
    'ignore_sticky_posts' => 1,
    'posts_per_page' => '12',
    'tax_query' => array(
        array(
            'taxonomy' => 'product_cat',
            'field' => 'term_id',
            'terms' => 23,
            'operator' => 'IN',
        ),
        array(
            'taxonomy' => 'product_visibility',
            'field' => 'slug',
            'terms' => 'exclude-from-catalog',
            'operator' => 'NOT IN',
        ),
    ),
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
?>
</div>
<?php echo '<a class="tag" href="' . get_the_permalink(105) . '">Our programs are also available in Spanish. Please view the Información en Español page for more details <i class="fas fa-long-arrow-alt-right"></i></a>'; ?>

</section>

<section id="programs-cta" class="scheduler-cta">
    <header>
        <div class="icon-wrapper">
        <i class="fas fa-search"></i>
        </div>
        <h2>Looking for our Private Programs?</h2>
    </header>
    <h4>Our 1-on-1 Private Programs run year-round and you can sign up at any time.</h4>
    <a class="btn" href="<?php echo get_term_link(24, 'product_cat') ?>">VIEW PRIVATE PROGRAMS</a>
    <div class="large-half-circles one"></div>
<div class="large-half-circles two"></div>
</section>

<?php get_footer();?>
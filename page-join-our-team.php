<?php get_header();?>

<section id="contact" class="join-team">
    <header>
       <h1><?php the_title();?></h1>
    </header>

    <div class="container">
    <div class="minor">
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
        <div class="circle light-blue  " data- -speed="1"></div>
    </div>
    <div class="major">
    <?php echo do_shortcode('[contact-form-7 id="607" title="Join Our Team"]'); ?>
    <div class="half-circles"></div>
    </div>
    </div>
</section>

<?php get_footer();?>
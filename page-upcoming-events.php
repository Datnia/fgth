<?php get_header();?>

<section id="webinar">
<?php the_title("<h1>", "</h1>")?>
<?php
if (have_posts()) {
    while (have_posts()) {
        the_post();
        the_content();
    }
}
?>
<div style="display: none" class="container">
    <div class="img-wrapper">
    <?php the_post_thumbnail();?>
    </div>
    <div class="major">

    <span class="privacy-text">We ♥ your privacy and will not share your info. No spam, ever.</span>

</div>
</div>

</section>

<section id="upcoming-webinar">
    <h2>More Upcoming Events</h2>
    <div class="wrapper">
    <?php dynamic_sidebar('upcoming-seminars');?>
</div>
</section>

<section id="webinar-cta">
    <h2>Let’s get you on the right path to healing!</h2>
    <h4>Take the first step toward a new beginning and schedule your FREE Discovery Call today to connect with one of our Grief Recovery Specialists.</h4>
    <a href="#" class="discovery btn">SCHEDULE MY FREE DISCOVERY CALL NOW</a>
</section>

<?php get_footer();?>
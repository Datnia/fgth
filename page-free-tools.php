<?php get_header();?>

<section id="free-tools">

<div class="container">
    <div class="img-wrapper">
        <?php the_post_thumbnail();?>
    </div>
    <div class="major">
    <?php
if (have_posts()) {
    while (have_posts()) {
        the_post();
        the_content();
    }
}
?>
    <span class="privacy-text">We ♥ your privacy and will not share your info. No spam, ever.</span>

</div>
</div>

<div class="minor">
<h2>What You’ll Learn</h2>
<?php dynamic_sidebar('free-tools');?>
</div>

</section>

<section id="tools-cta">
    <h4>Yes, I want to learn how to say goodbye to my emotional pain –<br> so I can claim my circumstances instead of allowing my circumstances to claim me and my happiness.</h4>
    <?php if (function_exists('tve_leads_form_display')) {tve_leads_form_display(0, 1196);}?>
    <span class="privacy-text">We ♥ your privacy and will not share your info. No spam, ever.</span>
</section>



<?php get_footer();?>
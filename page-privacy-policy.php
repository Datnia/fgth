<?php get_header();?>

<section id="privacy-policy-banner">
    <header>
    <?php the_title("<h1>", "</h1>")?>
    <h4>This Privacy Policy describes how your personal information is collected, used, and shared when you visit or make a purchase from www.fromgrievingtohealing.com (the “Site”) or through our office staff.</h4>
    </header>
</section>

<section id="privacy-policy">
    <div class="container">
<?php
if (have_posts()) {
    while (have_posts()) {
        the_post();
        the_content();
    }
}
?>
</div>
</section>
<section id="privacy-policy-cta">
    <h2>Contact Us</h2>
    <h4>For more information about our privacy practices, if you have questions, or if you would like to make a complaint, please contact us by e-mail at <a href="mailto:info@fromgrievingtohealing.com">info@fromgrievingtohealing.com</a>.
</h4>
</section>

<?php get_footer();?>
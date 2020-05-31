<?php get_header();?>

<section id="about-banner">
<?php the_title('<h1>', '</h1>');?>
<nav>
    <a class="item1" href="#meet-our-founder">Meet Our Founder</a>
    <a class="item2" href="#commitment">Our Commitments To You</a>
    <a class="item3" href="#faq">FAQ</a>
</nav>
<div class="circle light-blue one rellax" data-rellax-speed="2"></div>
<div class="circle light-blue two rellax" data-rellax-speed="-1"></div>
<div class="circle light-blue three rellax" data-rellax-speed="1"></div>
<div class="circle light-blue four"></div>
</section>
<section id="meet-our-founder" class="anchor1">
    <div class="container">
    <div class="minor">
    <?php dynamic_sidebar('founder-quote');?>
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
<div class="half-circles"></div>
<div class="circle light-blue one rellax" data-rellax-speed="1"></div>
</div>
</div>
<div class="quote-container">
<?php dynamic_sidebar('page-quote');?>
<div class="circle light-blue two"></div>
<div class="circle light-blue three"></div>
<div class="circle light-blue four"></div>

</div>
</section>

<section id="commitment" class="anchor2">
<?php dynamic_sidebar('commitment');?>
<div class="container">
<?php dynamic_sidebar('commitment-content');?>
</div>
</section>

<section id="faq" class="anchor3">
<header><h2>Frequently Asked Questions</h2></header>
<?php dynamic_sidebar('faq-questions');?>
<div class="col answers">
<?php dynamic_sidebar('faq-answers');?>
</div>
</section>

<section id="about-cta">
<i class="fas fa-phone"></i>
<?php dynamic_sidebar('about-cta');?>
<div class="large-half-circles one"></div>
<div class="large-half-circles two"></div>

</section>

<?php get_footer();?>
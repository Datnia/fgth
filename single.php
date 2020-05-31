<?php get_header();?>

<section id="blog-post">

<nav>
<div class="wrapper">
<?php $the_query = new WP_Query('posts_per_page=100');?>
    <?php while ($the_query->have_posts()): $the_query->the_post();?>
													    <li><a href="<?php the_permalink()?>"><?php the_title();?></a></li>
													<?php
endwhile;
wp_reset_postdata();
?>
</div>
<a class="arrow" href=<?php echo get_the_permalink(162); ?>><img src=<?php echo wp_get_attachment_url(232); ?>  alt="arrow"></a>
</nav>

<div class="container">
<?php the_title('<h1>', '</h1>');?>

<div class="post-wrapper">
    <div class="img-wrapper">
        <?php the_post_thumbnail();?>
    </div>
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
<?php dynamic_sidebar('blog-footer');?>
</div>
</section>
<section id="blog-cta">
   <div class="container">
       <div class="img-wrapper">
           <img src=<?php echo wp_get_attachment_url(203); ?> alt="book"> </div>
           <h2>Books & Articles</h2>
           <h4>We’ve put together a collection of our favorite reads.</h4>
           <a href=<?php echo get_the_permalink(91) ?> class="btn">Read Now</a>
           <div class="large-half-circles"></div>
   </div>
   <div class="container">
       <div class="img-wrapper">
           <img src=<?php echo wp_get_attachment_url(204); ?>  alt="video"> </div>
           <h2>Watch Us on YouTube</h2>
           <h4>Check out our new channel!</h4>
           <a href="https://www.youtube.com/channel/UCBf1JrWEEvA2HubaUPRGQrw" target="_blank" class="btn">View Now</a>
           <div class="large-half-circles"></div>
        </div>

</section>
<?php get_footer();?>
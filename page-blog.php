<?php get_header();?>

<section id="blog-banner">
<?php the_title('<h1>', '</h1>');?>
<div class="circle light-blue one  " data- -speed="2"></div>
<div class="circle dark-blue two  " ></div>
<div class="circle light-blue three  " data- -speed="2"></div>
<div class="circle light-blue four"></div>
</section>

<section id="featured-blog">
    <div class="major">
<?php

$query = new WP_Query(array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'posts_per_page' => 1,
    'order' => "DESC",
));

while ($query->have_posts()) {
    $query->the_post();
    ?>
    <h2><?php echo the_title(); ?></h2>
    <p><?php echo wp_trim_words(get_the_content(), 70, '...'); ?></p>
    <p><a href="<?php echo the_permalink() ?>">Keep Reading <i class="fas fa-long-arrow-alt-right" aria-hidden="true"></i></a></p>
    <a class="btn" href="<?php echo the_permalink() ?>"><i class="fas fa-star" aria-hidden="true"></i> Featured Blog Post</a>
</div>
<div class="minor">
<?php the_post_thumbnail();?>
</div>

<?php
}

?>
</section>

<section id="all-posts">
<?php dynamic_sidebar('blog-posts');?>
<div class="half-circles one"></div>
<div class="circle light-blue five"></div>
</section>

<section id="blog-cta">
   <div class="container">
       <div class="img-wrapper">
           <img src=<?php echo wp_get_attachment_url(203); ?>  alt="book"> </div>
           <h2>Books & Articles</h2>
           <h4>We’ve put together a collection of our favorite reads.</h4>
           <a href=<?php echo get_the_permalink(91) ?> class="btn">Read Now</a>
        <div class="large-half-circles"></div>
   </div>
   <div class="container">
       <div class="img-wrapper">
           <img src=<?php echo wp_get_attachment_url(204); ?> alt="video"> </div>
           <h2>Watch Us on YouTube</h2>
           <h4>Check out our new channel!</h4>
           <a href="https://www.youtube.com/channel/UCBf1JrWEEvA2HubaUPRGQrw" target="_blank" class="btn">View Now</a>
           <div class="large-half-circles"></div>
        </div>

</section>
<?php get_footer();?>
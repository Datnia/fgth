<?php
/**
 * Template Name: Thank You
 */
get_header();?>

<section id="opted">
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

<?php

if (strpos($_SERVER['REQUEST_URI'], "free-tools")) {
    include "webinar-thankyou.php";
}

?>

</section>

<section id="learn-more">
<div class="video-container">
                <img src="https://i.imgur.com/qdfTpdj.png" alt="">
                <h4>Testimonials</h4>
                <h2>Watch Grievers Share Their Truth</h2>
                <div class="play-btn-container"><i class="fas fa-play play-btn"></i></div>
            </div>

            <div class="minor">
                <h3>Want to learn more about our Grief Recovery programs?</h3>
                <a href=<?php echo get_term_link(23, 'product_cat'); ?>>
                <img src="<?php echo wp_get_attachment_url(86); ?>" alt="icon">
                <h4>Group Programs</h4>
            </a>

            <a href=<?php echo get_term_link(24, 'product_cat'); ?>>
                <img src="<?php echo wp_get_attachment_url(83); ?>" alt="icon">
                <h4>1-on-1 Programs</h4>
            </a>
            </div>
</section>


<section id="webinar-cta">
    <h2>Let’s get you on the right path to healing!</h2>
    <h4>Take the first step toward a new beginning and schedule your FREE Discovery Call today to connect with one of our Grief Recovery Specialists.</h4>
    <a href="#" class="discovery btn">SCHEDULE MY FREE DISCOVERY CALL NOW</a>
</section>

<section id="opted-blog">
<?php dynamic_sidebar('ty-blog-posts');?>
</section>


<?php

if (strpos($_SERVER['REQUEST_URI'], "webinar") || strpos($_SERVER['REQUEST_URI'], "seminar")) {
    echo "<style>
    #opted {
        background: rgba(204, 223, 255, .3);
    }

    #opted .container:before {
        background: rgba(46, 126, 219, 1);
    }

    #opted .container p {
        background: rgba(194, 255, 142, .4);
    }

    #learn-more {
        background: rgba(204, 223, 255, .3);
    }

    #learn-more .minor {
        background: #fff;
    }

    #opted .container h3 {
        margin-top: 15px;
    }

    #opted .container h4 {
        margin: 50px 0 0;
    }
        </style>";
}
;

?>
<section  id="video-modal">
<i class="fas fa-times close-modal"></i>
<div class="testimonial-video">
      <div class="wrapper">
        <video controls>
          <source
            src="https://testdesign.fromgrievingtohealing.com/wp-content/uploads/2020/01/From-Grieving-to-Healing-Testimonials.mp4"
            type="video/mp4"
          />
        </video>
        <div class="content">
          <h4>Testimonials</h4>
          <h2>Watch Grievers Share Their Truth</h2>
        </div>
      </div>
    </div>
</section>
<?php get_footer();?>
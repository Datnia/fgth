<?php
wp_footer();
$url = get_home_url();
?>

<footer>
    <div class="col col-1">
        <a href="<?php echo $url ?>"><img src="<?php echo $url ?>/wp-content/uploads/2019/08/FROM-GRIEVING-TO-HEALING-1.png"  alt="footer-logo"></a>
        <span>We're Changing The World, One Grieving Heart At A Time!</span>
        <p>From Grieving to Healing, LLC<br>
        <a href="tel:+13109541996">(310) 954-1996</a>
         <a href="mailto:info@fromgrievingtohealing.com">info@fromgrievingtohealing.com </a>
         <strong>*Hablamos Español*</strong>
    </p>
    </div>
    <div class="col col-2">
        <h5>Quick Links</h5>
    <?php
if (has_nav_menu('footer-nav')) {
    wp_nav_menu(array('theme_location' => 'footer-nav'));}?>

    </div>


 <div class="col col-3">
     <h5>Recent Blog Posts</h5>
    <?php $the_query = new WP_Query('posts_per_page=3');?>
    <?php while ($the_query->have_posts()): $the_query->the_post();?>
		 <li>
		 <a href="<?php the_permalink()?>"><?php the_post_thumbnail("thumbnail") . the_title();?></a></li>
	<?php
endwhile;
wp_reset_postdata();
?>
</div>

<div class="col col-4"><?php echo do_shortcode("[custom-facebook-feed]") ?>
<div class="media-wrapper">
    <a target="_blank" href="https://www.linkedin.com/company/fromgrievingtohealing"><i class="fab fa-linkedin"></i></a>
    <a target="_blank" href="https://www.facebook.com/grieve2heal"><i class="fab fa-facebook-square"></i></a>
    <a target="_blank" href="https://twitter.com/grieve2heal"><i class="fab fa-twitter-square"></i></a>
    <a target="_blank" href="https://instagram.com/grieve2heal" class="instagram"><i class="fab fa-instagram"></i></a>
</div>
</div>
<div id="legal">
    <a href="<?php echo $url ?>/privacy-policy/"><h5>Privacy Policy</h5></a>
    <p>Copyright From Grieving to Healing, LLC. All rights reserved. © 2020</p>
</div>
</footer>
<script defer type="text/javascript" src="https://kit.fontawesome.com/16f9e4dc96.js"></script>
</body>
</html>

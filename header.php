<!DOCTYPE html>
<html lang="en">
  <head>
    <?php wp_head();?>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-136508817-3"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'UA-136508817-3');
    </script>
    <meta name="google-site-verification" content="c31RPlApgqE8yPg8ba7BLOPy81zTh9iOCs4JX66qjQc" />
    <title>From Grieving To Healing</title>
  </head>
  <body <?php body_class();?>>
    <?php $url = get_home_url()?>
    <nav id="main">
    <a id="logo" href="<?php echo $url ?>"
        ><img
          src=<?php echo $url . "/wp-content/uploads/2019/08/FROM-GRIEVING-TO-HEALING.png" ?>
          alt="logo"
      /></a>
      <div id="menu-container">
        <div id="top-nav">
          <div style="display: flex; flex-wrap: wrap;">
            <span>
              <a href="tel:+3109541996"><i class="fas fa-phone"></i> (310) 954-1996</a>
              </span>
            <span>
              <a href="mailto:info@fromgrievingtohealing.com"><i class="fas fa-envelope"></i> INFO@FROMGRIEVINGTOHEALING.COM</a>
              </span>
          </div>
          <div>
            <span>We’re Changing The World, One Grieving Heart At A Time!</span>
            <a href=<?php echo get_the_permalink(1121) ?>>FREE TOOLS</a>
            <a href=<?php echo get_the_permalink(1136) ?>>UPCOMING EVENTS</a>
          </div>
        </div>
        <div class="wrapper">
        <?php
if (has_nav_menu('main')) {
    wp_nav_menu(array('theme_location' => 'main'));
}?>
<div class="nav-minor">
  <a href=<?php echo get_the_permalink(474) ?>><i class="fas fa-shopping-cart cart-icon"></i>
  <?php
$cartcount = WC()->cart->get_cart_contents_count();
if ($cartcount > 0) {echo "<span>" . $cartcount . "</span>";}
?>Cart</a>
      <?php echo do_shortcode('[wpdreams_ajaxsearchlite]'); ?>
    </div>
    </div>
      </div>
    </nav>
    <nav id="mobile-nav">
      <div id="top-nav">
     <div class="upper">
     <span>
       <a href="tel:+13109541996"><i class="fas fa-phone"></i></a>
       </span>
      <span>
       <a href="mailto:info@fromgrievingtohealing.com"><i class="fas fa-envelope"></i></a>
      </span>
      <span>We’re Changing The World, One Grieving Heart At A Time!</span>
     </div>
      <div class="mid">
        <a href=<?php echo get_the_permalink(1121) ?>>FREE TOOLS</a>
        <a href=<?php echo get_the_permalink(1136) ?>>UPCOMING EVENTS</a>
      </div>
      </div>
      <div id="lower-nav">
        <div class="inner">
        <i class="fas fa-search open-search"></i>
        <?php echo do_shortcode('[wpdreams_ajaxsearchlite]'); ?>
        <a id="logo" href="<?php echo home_url(); ?>"
        ><img
          src=<?php echo $url . "/wp-content/uploads/2019/08/FROM-GRIEVING-TO-HEALING.png"  ?>
          alt="logo"
      /></a>
      <i class="fas fa-bars open-nav"></i>
        </div>
        <div class="show-nav">
        <?php
if (has_nav_menu('mobile-nav')) {
    wp_nav_menu(array('theme_location' => 'mobile-nav'));
}?>
        </div>
      </div>
    </nav>




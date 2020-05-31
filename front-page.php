<?php
get_header();
$url = get_home_url();
?>

<section id="banner">
    <div class="banner-section">
        <div class="major">
            <?php
if (have_posts()) {
    while (have_posts()) {
        the_post();
        the_content();
    }
}
?>
        </div>
        <div class="minor">
            <div class="wrapper">
            <div class="slide-container">
              <div>
                <img src="<?php echo $url; ?>/wp-content/uploads/2019/08/slide-img-e1579816742939.jpg" alt="slide-1">
                </div>
                <div>
                <img src="<?php echo $url; ?>/wp-content/uploads/2019/09/TmPRSiQA-2-e1579816697909.jpeg" alt="slide-2">
                </div>
                <div>
                <img src="<?php echo $url; ?>/wp-content/uploads/2019/09/9lLEexFA-2-e1579816664745.jpeg" alt="slide-3">
                </div>
                <div>
                <img src="<?php echo $url; ?>/wp-content/uploads/2019/09/zy8gcZ5g-2-e1579816560584.jpeg" alt="slide-4">
                </div>
            </div>
            <div class="enroll-cta">
            <a href="<?php echo $url; ?>/product/grief-recovery-7-week-1-on-1-online-program/">
                <div class="img-container"><img src=<?php echo wp_get_attachment_url(46); ?> alt="user-plus"></div>
                <h3>Enrolling Now</h3>
                <p>Join us for our live online programs!</p>
                </a>
            </div>
            </div>
            <div class="vid-container">
                <img src="<?php echo $url; ?>/wp-content/uploads/2020/01/qdfTpdj-e1579818672347.png" alt="">
                <h4>Testimonials</h4>
                <h3>Watch Grievers Share Their Truth</h3>
                <div class="play-btn-container"><i class="fas fa-play play-btn"></i></div>
            </div>
        </div>
    </div>

    <?php dynamic_sidebar('banner_header');?>
<div class="circle light-blue one  " data- -speed="2"></div>
<div class="circle light-blue two"></div>
<div class="circle dark-blue three  " data- -speed="1"></div>
<div class="circle light-blue four"></div>
<div class="circle dark-blue five  " data- -speed="2"></div>
<div class="circle light-blue six"></div>
<div class="circle light-blue seven  " data- -speed="1"></div>
</section>

<section id="programs">
<div class="program-display">
    <div class="program 0">
    <h3>Group Programs</h3>
    <p>Traditional support groups encourage grievers to talk about their pain, but don’t always offer a clear roadmap to feeling better and moving beyond the pain. In our group programs, we use the official Grief Recovery Method format to help you take clear actions that will lead you to a happier, healthier, and more fulfilling life.</p>
    <a class="btn" href=<?php echo get_term_link(23, 'product_cat') ?>>MORE INFO</a>
    </div>

    <div class="program 1">
    <h3>1-on-1 Programs</h3>
    <p>Our private 1-on-1 programs are designed to provide individual, customized Grief Recovery support. This personalized setting between a client and a Certified Grief Recovery Specialist allows for a more flexible and tailored program to fit your needs and your schedule.</p>
    <a class="btn" href=<?php echo get_term_link(24, 'product_cat') ?>>MORE INFO</a>
    </div>

    <div class="program 2">
    <h3>Weekend Programs</h3>
    <p>These interactive workshops will be a safe place to examine what you’ve been taught about loss, to explore your beliefs about grief, and to guide you in completing a set of actions that will enable you to move forward in your life with hope. Once equipped with these tools, you will be able to work through other losses that you may have experienced in your past.</p>
    <a class="btn" href=<?php echo get_term_link(30, 'product_cat') ?>>MORE INFO</a>
    </div>

    <div class="program 3">
    <h3>Online Programs</h3>
    <p>Our online programs give you access to the Grief Recovery Method format whenever and wherever you are. We offer live online sessions with a Certified Grief Recovery Specialist to allow for a more flexible and tailored program to fit your needs and your schedule. We also offer webinars, tutorials, and trainings that you can watch at your own pace to gain practical information to enhance your personal wellness and begin your healing journey.</p>
    <a class="btn" href=<?php echo get_term_link(27, 'product_cat') ?>>MORE INFO</a>
    </div>

    <div class="program 4">
    <h3>Corporate Programs</h3>
    <p>Our customized corporate programs provide Grief Recovery workshops, consultation services, and educational programs to help companies and organizations including: businesses, schools, religious institutions, funeral homes, hospice and palliative care, hospitals, social service agencies, caregiver organizations, and other professional groups.</p>
    <a class="btn" href=<?php echo get_term_link(26, 'product_cat') ?>>MORE INFO</a>
    </div>

    <div class="program 5">
    <h3>Información en Español</h3>
    <p>From Grieving to Healing ofrece servicios de orientación y apoyo para individuos, grupos, y organizaciones de todos los caminos de la vida. Nos especializamos en ayudar a las personas dolientes y a sus familias, y nos esforzamos en consultar, educar, y apoyar a la comunidad en general incluyendo empresas, organizaciones, escuelas, hospitales, instituciones religiosas, etc.</p>
    <a style="width:240px" class="btn" href=<?php echo get_page_link(105) ?>>Más Información</a>
    </div>
</div>
<div class="row-container">
<?php dynamic_sidebar('programs');?>
</div>
</section>

<section id="myths" class="offset">
<?php dynamic_sidebar('myths');?>
<?php dynamic_sidebar('myths-slider');?>
</section>



<section id="testimonials">
    <header>
    <h2>Read What More Grievers Are Saying</h2>
    </header>
    <div class="col-container">
        <div class="col">
        <?php dynamic_sidebar('testimonial-1');?>
        <div class="half-circles one"></div>
     </div>
     <div class="col">
     <?php dynamic_sidebar('testimonial-2');?>
     </div>
     <div class="col">
     <?php dynamic_sidebar('testimonial-3');?>
     <div class="half-circles two"></div>
     </div>
     <div class="circle light-blue one"></div>
     <div class="circle light-blue two"></div>
    </div>
</section>
<section id="who-we-are">
<?php dynamic_sidebar('who-we-are');?>
</section>

<section class="cta">
   <header>
   <?php dynamic_sidebar('home-cta');?>
   </header>
</section>

<section  id="video-modal">
<i class="fas fa-times close-modal"></i>

<div class="video-slider">
  <div class="slide">
    <div class="wrapper">
    <video preload="none" controls poster="<?php echo $url; ?>/wp-content/uploads/2020/01/Video-Dont-Feel-Bad.jpg">
      <source src="./wp-content/themes/fgth/videos/Myth1_DontFeelBad.mp4" type="video/mp4" />
    </video>
      <div class="content">
        <h4>Myth 1</h4>
        <h2>Don't Feel Bad</h2>
      </div>
    </div>
  </div>
  <div class="slide">
    <div class="wrapper">
    <video preload="none" controls poster="<?php echo $url; ?>/wp-content/uploads/2020/01/Video-Replace-the-Loss.jpg">
      <source src="./wp-content/themes/fgth/videos/Myth2_ReplaceTheLoss.mp4" type="video/mp4" />
    </video>
      <div class="content">
        <h4>Myth 2</h4>
        <h2>Replace the Loss</h2>
      </div>
    </div>
  </div>

  <div class="slide">
    <div class="wrapper">
    <video preload="none" controls poster="<?php echo $url; ?>/wp-content/uploads/2020/01/Video-Grieve-Alone.jpg">
      <source src="./wp-content/themes/fgth/videos/Myth3_GrieveAlone.mp4" type="video/mp4" />
    </video>
      <div class="content">
        <h4>Myth 3</h4>
        <h2>Grieve Alone</h2>
      </div>
    </div>
  </div>

  <div class="slide">
    <div class="wrapper">
    <video preload="none" controls poster="<?php echo $url; ?>/wp-content/uploads/2020/01/Video-Grief-Takes-Time.jpg">
      <source src="./wp-content/themes/fgth/videos/Myth4_GriefJustTakesTime.mp4" type="video/mp4" />
    </video>
      <div class="content">
        <h4>Myth 4</h4>
        <h2>Grief Just Takes Time</h2>
      </div>
    </div>
  </div>

  <div class="slide">
    <div class="wrapper">
    <video preload="none" controls poster="<?php echo $url; ?>/wp-content/uploads/2020/01/Video-Be-Strong.jpg">
      <source src="./wp-content/themes/fgth/videos/Myth5_BeStrong.mp4" type="video/mp4" />
    </video>
      <div class="content">
        <h4>Myth 5</h4>
        <h2>Be Strong / Be Strong for Others</h2>
      </div>
    </div>
  </div>

  <div class="slide">
    <div class="wrapper">
    <video preload="none" controls poster="<?php echo $url; ?>/wp-content/uploads/2020/01/Video-Keep-busy.jpg">
      <source src="./wp-content/themes/fgth/videos/Myth6_KeepBusy.mp4" type="video/mp4" />
    </video>
      <div class="content">
        <h4>Myth 6</h4>
        <h2>Keep Busy</h2>
      </div>
    </div>
  </div>
</div>

<div class="testimonial-video">
  <div class="wrapper">
  <video controls>
  <source src="<?php echo $url; ?>/wp-content/uploads/2020/01/From-Grieving-to-Healing-Testimonials.mp4" type="video/mp4" />
</video>
  <div class="content">
    <h4>Testimonials</h4>
    <h2>Watch Grievers Share Their Truth</h2>
  </div>
  </div>
</div>

</section>


<?php get_footer();?>

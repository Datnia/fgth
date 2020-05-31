<?php get_header();?>

<section id="espanol-banner">
    <header>

    <?php
if (have_posts()) {
    while (have_posts()) {
        the_post();
        the_content();
    }
}
?>

    </header>
    <div class="img-wrapper">
    <?php the_post_thumbnail();?>
    </div>
    <div class="circle light-blue one  " data- -speed="2"></div>
    <div class="circle light-blue two  " data- -speed="-1"></div>
    <div class="circle light-blue three  " data- -speed="1"></div>
    <div class="circle light-blue four  "></div>
    <div class="half-circles"></div>
</section>

<section id="espanol-minor">
    <h4>Nuestra misión es caminar con usted, mano a mano, por todos los pasos de acción necesarios para que pueda superar y recuperarse de sus perdidas emocionales. Nosotros definimos la recuperación como su habilidad a disfrutar memorias placenteras sin sentirse decepcionado por las cosas que desearía hubiesen sido diferentes, mejor o más en la relación que fue dañada o perdida y le está causando dolor emocional.</h4>
    <div class="circle light-blue one  "></div>
</section>

<section id="informacion">
    <div class="container">
    <h2>Información en Español</h2>
    <div class="wrapper">
    <?php dynamic_sidebar('informacion-espanol');?>
    </div>
    </div>
</section>

<section id="programas-espanol">
    <header>
        <h2>Programas en Español</h2>
        <h4>From Grieving to Healing ofrece servicios de orientación y apoyo para individuos, grupos, y organizaciones de todos los caminos de la vida.</h4>
    </header>
    <div class="container">
        <h4>Nos especializamos en ayudar a las personas dolientes y a sus familias, y nos esforzamos en consultar, educar, y apoyar a la comunidad en general incluyendo empresas, organizaciones, escuelas, hospitales, instituciones religiosas, etc. Aunque haya aguantado cambios difíciles y dolorosos en las circunstancias de su vida, le extendemos nuestra mano de apoyo y lo invitamos a embarcarse en su jornada a la recuperación.</h4>

    <div class="img-wrapper">
        <img src="https://testdesign.fromgrievingtohealing.com/wp-content/uploads/2019/08/spanish-support-group.jpg" alt="programas-grupo">
        <a href="<?php echo get_term_link(28, 'product_cat') ?>"  > <h3>Programas En Grupo</h3></a>
    </div>
    <div class="img-wrapper">
        <img src="https://testdesign.fromgrievingtohealing.com/wp-content/uploads/2019/08/spanish-1-on-1.png" alt="programas privados">
        <a href="<?php echo get_term_link(29, 'product_cat') ?>"><h3>Programas Privados</h3></a>
    </div>
    </div>
    <div class="half-circles"></div>
    <div class="light-blue circle"></div>
</section>

<section id="programs-cta">
    <header>
        <div class="icon-wrapper"><i class="fas fa-info"></i></div>
        <h2>¿Necesita más información?</h2>
    </header>
    <h4>Para una consulta inicial gratuita o para recibir más información sobre nuestros programas, por favor llámenos hoy al <a href="tel:+19109541996">(310) 954-1996</a>.</h4>
    <h4>¡Estamos para servirle!</h4>
    <div class="large-half-circles one"></div>
    <div class="large-half-circles two"></div>

</section>

<style>
#programs-cta * {
    color: #fff;
}

#programs-cta h4:first-of-type {
    max-width: 800px;
    margin-bottom: 10px;
}

#programs-cta header {
    padding-bottom: 20px;
}
</style>

<?php get_footer();?>
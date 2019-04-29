<div class="col-sm-12 col-md-12 col-lg-4 col-xl-5"  role="complementary">

  <section class="row content">

  <?php if ( is_page('Accueil') ) : ?>
    <nav class="col-sm-12 nav-articles">
      <?php get_template_part('template-parts/menu/menu', 'vertical'); ?>
    </nav>
    <hr />
   <?php endif; ?>

   <?php get_template_part('template-parts/search/search', 'form-sidebar' ); ?>
  <hr />
  <?php if ( is_active_sidebar( 'left-sidebar' ) ) : ?>
  <div class="row">
      <?php dynamic_sidebar( 'left-sidebar' ); ?>
  </div>
  <?php endif; ?>

  </section>

</div>

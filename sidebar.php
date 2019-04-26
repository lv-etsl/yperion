<div class="col-sm-12 col-md-12 col-lg-4 col-xl-5"  role="complementary">

  <section class="row sticky">

    <?php include_once '/template-parts/search/search-form-sidebar.php'; ?>

  <hr />

  <?php if ( is_page('Accueil') ) : ?>
    <div class="col-sm-12">
      <?php include_once '/template-parts/menu-vertical.php'; ?>
    </div>
   <?php endif; ?>

  <hr />
  <?php if ( is_active_sidebar( 'left-sidebar' ) ) : ?>
  <div class="row">
      <?php dynamic_sidebar( 'left-sidebar' ); ?>
  </div>
  <?php endif; ?>

  </section>

</div>

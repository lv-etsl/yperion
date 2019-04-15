<div class="col-sm-12 col-md-12 col-lg-4 col-xl-5"  role="complementary">
  <div class="row">
    <?php if ( is_active_sidebar( 'left-sidebar' ) ) : ?>
      <?php dynamic_sidebar( 'left-sidebar' ); ?>
    <?php endif; ?>
  </div>
  <div class="row">
    <?php include_once '/template-parts/modal-login.php' ?>
  </div>
</div>

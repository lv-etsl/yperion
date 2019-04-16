<div class="col-sm-12 col-md-12 col-lg-4 col-xl-5"  role="complementary">

  <div class="sticky">
    <?php include_once '/template-parts/menu-vertical.php'; ?>
  </div>
  <hr />
  <?php if ( is_active_sidebar( 'left-sidebar' ) ) : ?>
  <div class="row">
      <?php dynamic_sidebar( 'left-sidebar' ); ?>
  </div>
  <?php endif; ?>
</div>

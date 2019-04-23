<div class="col-sm-12 col-md-12 col-lg-4 col-xl-5"  role="complementary">
  <section class="row">
    <div class="col-xs-6">
      <form method="get" id="searchform" action="<?php bloginfo('home'); ?>" />
        <div class="form-row">
          <div class="col">
            <input type="text" class="form-control" value="<?php the_search_query(); ?>" name="s" id="s" />
          </div>
          <div class="col">
            <button type="submit" class="btn btn-primary">Recherche</button>
          </div>
        </div>
      </form>
    </div>
  </section>
  <hr />
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

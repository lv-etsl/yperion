<div class="col-sm-12 col-md-12 col-lg-4 col-xl-5"  role="complementary">

  <section class="row sticky">

    <div class="col-sm-12">
      <form method="get" id="searchform" action="<?php bloginfo('home'); ?>" />
        <div class="form-row">
          <div class="col-sm-6">
            <input type="text" class="form-control" value="<?php the_search_query(); ?>" name="s" id="s" />
          </div>
          <div class="col-sm-6">
            <button type="submit" class="btn btn-primary"><?php echo pll__('Recherche'); ?></button>
          </div>
        </div>
      </form>
    </div>

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

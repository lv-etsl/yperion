<div class="col-sm-12 col-md-12 col-lg-4 col-xl-5"  role="complementary">

  <?php if ( is_page('Accueil') ) : ?>
    <nav class="col nav-articles">
      <?php get_template_part('template-parts/menu/menu', 'vertical'); ?>
    </nav>
    <hr />
   <?php endif; ?>

   <?php if ( is_user_logged_in() && is_active_sidebar( 'right-sidebar-private' ) ) : ?>
     <div class="row">
         <?php dynamic_sidebar( 'right-sidebar-private' ); ?>
     </div>
     <hr />
  <?php endif; ?>

  <?php if ( is_active_sidebar( 'right-sidebar' ) ) : ?>
  <div class="row">
      <?php dynamic_sidebar( 'right-sidebar' ); ?>
  </div>
  <hr />
  <?php endif; ?>
  <?php get_template_part('template-parts/search/search', 'form-sidebar' ); ?>
 <hr />
</div>

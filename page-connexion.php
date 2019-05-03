<?php
/*
* Template Name: Page Connexion
* Description: Page général du site
*/
?>
<?php get_template_part( 'template-parts/header/header' ); ?>

  <div class="container-fluid">
    <div class="row">

       <?php get_template_part( 'template-parts/sidebar/sidebar' ); ?>

      <main class="col-sm-12 col-md-12 col-lg-8 col-xl-7" role="main">

        <?php if(have_posts()); ?>
        <?php while (have_posts()) : the_post(); ?>
        <!-- // -->

            <div <?php post_class(); ?>>
              <header>
                <h1>
                  <?php echo pll__('Page de connexion'); ?>
                </h1>
              </header>

                <?php the_content(); ?>


            </div>
          <div role="login-form-page">

            <?php  if(pll_current_language() == 'fr'){?>
              <!-- fr -->
              <?php get_template_part('template-parts/private/private', 'login'); ?>

            <?php } else { ?>
              <!-- de -->
              <?php get_template_part('template-parts/private/private', 'login-de'); ?>

              <?php } ?>

          </div>


          <?php endwhile; ?>

      </main>


    </div>
</div><!-- container-fluid -->

 <?php get_template_part( 'template-parts/footer/footer' ); ?>

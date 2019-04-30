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
                  <?php the_title(); ?>
                </h1>
              </header>

                <?php the_content(); ?>


            </div>
          <div class="col">
            <?php get_template_part('template-parts/private/private', 'login'); ?>  
          </div>


          <?php endwhile; ?>

      </main>


    </div>
</div><!-- container-fluid -->

 <?php get_template_part( 'template-parts/footer/footer' ); ?>

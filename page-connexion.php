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

      <main class="col-sm-12" role="main">
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

          <?php endwhile; ?>
        <!-- on se connecte -->
        <?php wp_login_form(); ?>
      <!--- // -->

      </main>


    </div>
</div><!-- container-fluid -->

 <?php get_template_part( 'template-parts/footer/footer' ); ?>

<?php
/*
* Template Name:Page de test menu
* Description: Page général du site
*/
?>
<?php get_template_part( 'template-parts/header/header' ); ?>

  <div class="container-fluid">

    <div class="row">

      <section class="content">

       <?php get_template_part( 'template-parts/sidebar/sidebar', 'accueil-test' ); ?>

      <main class="col referentiel" role="main">

      <!-- boucle simple : page accueil -->
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

              <?php get_template_part( 'template-parts/download/download', 'acf-fields' ); ?>

          </div>

        <?php endwhile; ?>

      </main>
    </section>  <!-- // section .content -->
  </div>
</div>  <!-- // container-fluid -->

 <?php get_template_part( 'template-parts/footer/footer' ); ?>

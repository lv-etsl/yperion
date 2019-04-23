<?php
/*
* Template Name: Page d'Accueil
* Description: Page général du site
*/
?>
<?php get_header(); ?>

  <div class="container-fluid">
    <div class="row">

      <main class="col-sm-12 col-md-12 col-lg-8 col-xl-7" role="main">

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

          </div>

        <?php endwhile; ?>

      </main>

      <?php get_sidebar(); ?>

    </div>
</div><!-- container-fluid -->

<?php get_footer(); ?>

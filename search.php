<?php
/*
* SEARCH.php : fichier pour recherche
*/
 ?>
<?php get_header(); ?>

  <div class="container-fluid">
    <div class="row">

      <main class="col-sm-12 col-md-12 col-lg-8 col-xl-7" role="main">
        <header class="row">
          <h1>
            <?php echo pll__('Résultats de recherche pour:'); ?> <?php echo get_search_query(); ?>
          </h1>
        </header>

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

          <section class="row">

            <article <?php post_class(); ?>>
              <header>
                <?php the_title( sprintf( '<h2 class=""><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
              </header>

              <div class="col">
                <?php the_excerpt() ?>

              </div>

            </article>
          </section>

      <?php endwhile; else: ?>

        <section class="row">
          <article>
            <div class="col">

              <p>  <?php echo pll__('Désolé, pas de résultats.'); ?></p>

              <?php include_once '/template-parts/search-more.php'; ?>

            </div>

          </article>

        </section>

      <?php endif; ?>

      </main>

      <?php get_sidebar(); ?>

    </div>
</div>

<?php get_footer(); ?>

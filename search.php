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
              <?php printf( __( 'Search Results for: %s', 'yperion' ), '<span>' . esc_html( get_search_query() ) . '</span>' ); ?></h1>
    			</header>

          <?php if(have_posts()); ?>
          <?php while (have_posts()) : the_post(); ?>

        <section class="row">

          <article <?php post_class(); ?>>
            <header>
              <?php the_title( sprintf( '<h2 class=""><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
            </header>

            <div class="col">
              <?php the_content() ?>
            </div>

          </article>
        </section>


      <?php endwhile; ?>

      <!-- get_template_part( 'template-parts/test','search' ); -->

      </main>

      <?php get_sidebar(); ?>

    </div>
</div>

<?php get_footer(); ?>

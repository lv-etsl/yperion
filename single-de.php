<?php get_header(); ?>

  <div class="container-fluid">
    <div class="row">

      <main class="col-sm-12 col-md-12 col-lg-8 col-xl-7" role="main">

      <!-- boucle simple : single-de -->
      <?php if(have_posts()); ?>
      <?php while (have_posts()) : the_post(); ?>
      <!-- // -->

          <article <?php post_class(); ?>>
            <header>
              <h1>
                <a href="<?php the_permalink(); ?>" >
                  <?php the_title(); ?>
                </a>
              </h1>
            </header>

            <div>
              <?php the_content(); ?>
            </div>

          </article>

        <?php endwhile; ?>

      </main>

      <?php get_sidebar(); ?>

    </div>
</div><!-- container-fluid -->

<?php get_footer(); ?>

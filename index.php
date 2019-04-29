<?php get_template_part( 'template-parts/header/header' ); ?>

  <div class="container-fluid">
    <div class="row">

      <?php get_template_part( 'template-parts/sidebar/sidebar' ); ?>

      <main class="col-sm-12 col-md-12 col-lg-8 col-xl-7" role="main">

      <!-- boucle ++ simple -->
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

            <?php get_template_part( 'template-parts/download/download', 'acf-fields' ); ?>

          </article>

        <?php endwhile; ?>

      </main>

    </div>
</div><!-- container-fluid -->

 <?php get_template_part( 'template-parts/footer/footer' ); ?>

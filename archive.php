<?php
/*
* ARCHIVE.php : fichier pour archive
*/
 ?>
 <?php get_template_part( 'template-parts/header' ); ?>

  <div class="container-fluid">
    <div class="row">

      <main class="col-sm-12 col-md-12 col-lg-8 col-xl-7" role="main">
        <section class="row">
          <article <?php post_class('col-xs-12'); ?>>
            <header>
              <h1>
                Recherche
              </h1>
            </header>

            <div class="col-xs-6">
              <?php get_search_form(); ?>
            </div>

            <div class="col-xs-6">
              <form method="get" id="searchform" action="<?php bloginfo('home'); ?>" />
                <div class="form-row">
                  <div class="col">
                    <input type="text" name="" value="<?php the_search_query(); ?>" name="s" id="s" />
                  </div>
                  <div class="col">
                    <button>Recherche</button>
                  </div>
                </div>
              </form>
            </div>

          </article>
        </section>
      </main>

      <?php get_sidebar(); ?>

    </div>
</div>

 <?php get_template_part( 'template-parts/footer' ); ?>

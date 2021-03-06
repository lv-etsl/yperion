<?php
/*
* ARCHIVE.php : fichier pour archive
*/
 ?>
 <?php get_template_part( 'template-parts/header/header' ); ?>

  <div class="container-fluid">
    <div class="row">

      <?php get_template_part( 'template-parts/sidebar/sidebar' ); ?>

      <main class="col-sm-12 col-md-12 col-lg-8 col-xl-7" role="main">
        <section class="row">
          <article <?php post_class('col-xs-12'); ?>>
            <header>
              <h1>

              </h1>
            </header>

            <div class="">

            </div>

            <div class="col-xs-12">
              <?php wp_get_archives('type=monthly'); ?>
            </div>

            <div class="col-xs-12">
              <?php wp_list_categories(); ?>
            </div>


            <?php get_template_part('template-parts/search', 'form-archive'); ?>

          </article>
        </section>
      </main>

    </div>
</div>

 <?php get_template_part( 'template-parts/footer/footer' ); ?>

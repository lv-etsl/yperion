<?php
/*
* Template Name: Page d'Accueil
* Description: Page général du site
*/
?>
<?php get_template_part( 'template-parts/header' ); ?>

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

              <!-- On rajoute des trucs à télécharger -->
                <?php
                $file = get_field('telecharger_le_fichier');

                if( $file ): ?>

                <div class="table-responsive">
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th scope="col"><?php echo pll__('Nom du fichier'); ?></th>
                        <th scope="col"><?php echo pll__('Légende'); ?></th>
                        <th scope="col"><?php echo pll__('Descritpion'); ?></th>
                        <th scope="col"><?php echo pll__('Taille du fichier'); ?></th>
                        <th scope="col"><i class="fas fa-file-download fa-2x"></i></th>

                      </tr>
                    </thead>
                    <tbody>
                    <tr>
                      <th scope="row"><a href="<?php echo $file['url']; ?>"><?php echo $file['title']; ?></a></th>
                      <td><?php echo $file['caption']; ?></td>
                      <td><?php echo $file['description']; ?></td>
                      <td><?php echo $file['filesize']; ?> Bit</td>
                      <td><a href="<?php echo $file['url']; ?>"><i class="fas fa-file-download fa-2x"></i></a></td>
                    </tr>
                  </tbody>
                 </table>
                 </div>
              <?php else: // field_name returned false ?>

              <!-- pas d'acf actifs -->

              <?php endif; // end of if field_name logic ?>

          </div>

        <?php endwhile; ?>

      </main>

      <?php get_sidebar(); ?>

    </div>
</div><!-- container-fluid -->

 <?php get_template_part( 'template-parts/footer' ); ?>

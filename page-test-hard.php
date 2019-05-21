<?php
/*
* Template Name:Page 2 de test
* Description: Page général du site
*/
?>
<?php get_template_part( 'template-parts/header/header' ); ?>

  <div class="container-fluid">
    <main class="row">
      <section class="content">

       <?php get_template_part( 'template-parts/sidebar/sidebar', 'accueil-test-hard' ); ?>

      <!-- boucle simple : page accueil -->
      <?php if(have_posts()); ?>
      <?php while (have_posts()) : the_post(); ?>
      <!-- // -->

      <?php the_content(); ?>



        <?php endwhile; ?>

    </section>  <!-- // section .content -->
  </main>
</div>  <!-- // container-fluid -->

 <?php get_template_part( 'template-parts/footer/footer' ); ?>

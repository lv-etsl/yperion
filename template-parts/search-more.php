<?php
/*
* search
*/
 ?>


  <section class="row">

    <article>
      <ul>
      <?php wp_list_categories( array(
          'orderby'    => 'name',
          'show_count' => true,
          'exclude'    => array( 10 )
      ) ); ?>
  </ul>

    </article>
  </section>

<div class="col-sm-12" role="searchform">
  <form method="get" id="searchform" action="<?php esc_url( $_SERVER['PHP_SELF'] );  ?>" />
    <div class="form-row">

      <div class="row w-100 mb-3">
        <div class="col-sm-8">
          <input type="text" class="form-control" value="<?php the_search_query(); ?>" name="s" id="s" placeholder="<?php echo pll__('Recherche'); ?>"/>
        </div>
        <div class="col-sm-4">
          <button type="submit" class="btn btn-primary"><?php echo pll__('Recherche'); ?></button>
        </div>
      </div>

      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <label class="input-group-text" for="inputGroupSelect01"><?php echo pll__('Catégories'); ?></label>
        </div>
        <?php wp_dropdown_categories( 'hierarchical=1&class=custom-select&order=ASC&option_none_value=-1&hide_empty=1&selected=false&show_option_all=All' ); ?>
      </div>

      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <label class="input-group-text" for="inputGroupSelect01"><?php echo pll__('Etiquettes'); ?></label>
        </div>
        <?php wp_dropdown_categories(array('taxonomy'=> 'post_tag','hide_empty' => 0, 'class' => 'custom-select', 'option_none_value'  => '-1', 'hide_empty' => 1,'show_option_all' => 'All')); ?>
      </div>

    </div>
  </form>
</div>

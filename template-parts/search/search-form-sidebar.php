<div class="col-sm-12" role="searchform">
  <form method="get" id="searchform" action="<?php bloginfo('home'); ?>" />
    <div class="form-row">
      <div class="col-sm-6">
        <input type="text" class="form-control" value="<?php the_search_query(); ?>" name="s" id="s" placeholder="<?php echo pll__('Recherche'); ?>"/>
      </div>
      <div class="col-sm-6">
        <button type="submit" class="btn btn-primary"><?php echo pll__('Recherche'); ?></button>
      </div>
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <label class="input-group-text" for="inputGroupSelect01">Categories</label>
        </div>
        <?php wp_dropdown_categories( 'hierarchical=1&class=custom-select&order=ASC' ); ?>
      </div>
    </div>
  </form>
</div>

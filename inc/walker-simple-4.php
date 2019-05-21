<?php
/*
* source: https://gist.github.com/hitautodestruct/4345363
*/

  $menu_name = 'seven';
  $locations = get_nav_menu_locations();
  $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
  $menuitems = wp_get_nav_menu_items( $menu->term_id, array( 'order' => 'DESC' ) );
?>

<nav class="col-xs-4 nav-articles nav-sticky">
  <ul>
    <?php
    $count = 0;
    $submenu = false;

    foreach( $menuitems as $item ):

        $link = $item->url;
        $title = $item->title;
        // item does not have a parent so menu_item_parent equals 0 (false)
        if ( !$item->menu_item_parent ):

        // save this id for later comparison with sub-menu items
        $parent_id = $item->ID;
    ?>

    <li data-article-id="article-0" class="nav-article-title">
      <div class="nav-article-title-inner">
          <span class="read" ></span>
          <a href="<?php echo $link; ?>" class="title">
              <?php echo $title; ?>
          </a>
      </div>
    <?php endif; ?>

        <?php if ( $parent_id == $item->menu_item_parent ): ?>

            <?php if ( !$submenu ): $submenu = true; ?>
            <ul class="nav-sub-article" style="display: none;">
            <?php endif; ?>

                <li data-article-id="article-0-1" class="nav-sub-article-title next">
                  <div class="nav-sub-article-title-inner">
                    <span class="read" ></span>
                    <a href="<?php echo $link; ?>" class="title">
                      <?php echo $title; ?>
                    </a>
                  </div>
                </li>

            <?php if ( $menuitems[ $count + 1 ]->menu_item_parent != $parent_id && $submenu ): ?>
            </ul>
            <?php $submenu = false; endif; ?>

        <?php endif; ?>

    <?php if ( $menuitems[ $count + 1 ]->menu_item_parent != $parent_id ): ?>
    </li>
    <?php $submenu = false; endif; ?>

<?php $count++; endforeach; ?>

  </ul>
</nav>

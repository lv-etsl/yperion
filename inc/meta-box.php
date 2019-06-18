<?php
/*
* on fait une meta-box en vue de créer des champs
*/

add_action('add_meta_box','initialization_metaboxes');
  // on initialise
  function initialization_metaboxes()
  {
    add_meta_box('id_meta_1', 'metabox 1', 'ma_meta_function', 'post', 'normal', 'high');
  }
  // on récupère et enregiste
  function ma_meta_function($post)
  {
    $val = get_post_meta($post->ID, 'ma_valeur', true);
    echo '<label for="mon_champ">Mon champ :</label>';
    echo '<input id="mon_champ" type="text" name="mon_champ" value="'.$val.'" />';
  }
  // on sauvegarde
  add_action('save_post', 'save_metaboxes');
  function save_metaboxes($post_ID)
  {
    if(isset($_POST['mon_champ']))
    {
      update_post_meta($psot_ID, '_ma_valeur', esc_html($_POST['mon_champ']));
    }
  }

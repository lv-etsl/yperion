<!-- On rajoute des trucs à télécharger -->
  <?php
  $file_1 = get_field('telecharger_le_fichier_1');
  $file_2 = get_field('telecharger_le_fichier_2');

  if( $file_1):
  ?>

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
        <th scope="row"><a href="<?php echo $file_1['url']; ?>"><?php echo $file_1['title']; ?></a></th>
        <td><?php echo $file_1['caption']; ?></td>
        <td><?php echo $file_1['description']; ?></td>
        <td><?php echo $file_1['filesize']; ?> Bit</td>
        <td><a href="<?php echo $file_1['url']; ?>"><i class="fas fa-file-download fa-2x"></i></a></td>
      </tr>

    <?php elseif ($file_2):  ?>

      <tr>
        <th scope="row"><a href="<?php echo $file_2['url']; ?>"><?php echo $file_2['title']; ?></a></th>
        <td><?php echo $file_2['caption']; ?></td>
        <td><?php echo $file_2['description']; ?></td>
        <td><?php echo $file_2['filesize']; ?> Bit</td>
        <td><a href="<?php echo $file_2['url']; ?>"><i class="fas fa-file-download fa-2x"></i></a></td>
      </tr>

    </tbody>
   </table>
   </div>
  <?php else: ?>

<?php endif;?>

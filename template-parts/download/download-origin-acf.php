  <?php
  $file_1 = get_field('telecharger_le_fichier');

  if( $file_1 ): ?>
  <!-- test origin -->
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
    </tbody>
   </table>
   </div>
<?php else:?>

<?php endif; ?>


<?php if ( is_front_page() && is_home() ) { ?>
 <!-- no breadcrumb -->

<?php } elseif ( is_front_page()){ ?>
  <!-- no breadcrumb -->

<?php } elseif ( is_home()){ ?>
  <!-- no breadcrumb -->


<?php } else { ?>

  <header class="container-fluid" role="breadcrumb">
   <div class="row">
     <div class="col">
       <?php bootstrap_breadcrumb(); ?>
     </div>
   </div>
  </header>

<?php };
 ?>

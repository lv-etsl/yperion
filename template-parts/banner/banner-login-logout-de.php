<?php if ( is_user_logged_in() ) { ?>
  <nav class="navbar navbar-light bg-light">
    <a class="navbar-brand">Hello worlD !</a>
    <form class="form-inline">
      <a class="btn btn-outline-success my-2 my-sm-0" href="<?php echo wp_logout_url(home_url()); ?>"><?php echo pll__('Déconnexion'); ?></a>
    </form>
  </nav>
<?php } else { ?>
  <nav class="navbar navbar-light bg-light">
    <a class="navbar-brand">Hello worlD !</a>
    <form class="form-inline">
      <a class="btn btn-outline-success my-2 my-sm-0" href="<?php bloginfo('url') ?>/login-seite/" title="Members Area Login" rel="home"><?php echo pll__('Zone Membre'); ?></a>
    </form>
  </nav>
<?php } ?>

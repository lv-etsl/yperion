<div id="search-modal" class="modal fade">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">×</button>
                <h2>Member Login</h2>
        </div>
        <!--/.modal-header-->
        <div class="modal-body">
          <form action=""<?php bloginfo('url'); ?>/wp-login.php" method="post" name="loginform">
            <div class="form-field">
              <label>Username:</label>
              <input type="text" class="login-username" name="log" />
            </div>
            <div class="form-field">
              <label>Password:</label>
              <input type="password" class="login-password" name="pwd" />
            </div>
            <div class="form-field">
            <label for="rememberme" class="mm-remember-me">
              <input name="rememberme" id="rememberme" type="checkbox" checked="checked" value="forever">
              Remember me
            </label>
          </div>
            <div>
              <button type="submit" name="wp-submit" class="btn btn-primary btn-block">Login</button>
            </div>
        </form>
        </div>
        <!--/.modal-body-->
      </div>
      <!--/.modal-content-->
    </div>
    <!--/.modal-dialog-->
</div>
<!--/.modal-->

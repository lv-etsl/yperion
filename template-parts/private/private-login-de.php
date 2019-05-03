<div class="login a faire">

	<?php

	// Formulaire de connexion
	if ( ! is_user_logged_in() ) {
		wp_login_form( array(
	        'redirect'       => site_url( '/' ), // par défaut renvoie vers la page courante
	        'label_username' => 'Login',
	        'label_password' => 'Passwort',
	        'label_remember' => 'Erinnere dich an mich',
	        'label_log_in'   => 'Einloggen',
	        'form_id'        => 'login-form',
	        'id_username'    => 'user-login',
	        'id_password'    => 'user-pass',
	        'id_remember'    => 'rememberme',
	        'id_submit'      => 'wp-submit',
	        'remember'       => true, //afficher l'option se souvenir de moi
	        'value_remember' => false //se souvenir par défaut ?
		) );
	} else {
		echo '<a type="button" class="btn btn-lg btn-primary" href="' . admin_url( 'user-edit.php?user_id='. get_current_user_id() ) .'">Accès au profil</a>';
		echo '<a type="button" class="btn btn-lg btn-primary" href="' . wp_logout_url( site_url( '/' ) ) .'">Se déconnecter</a>';
	};
	?>

</div>

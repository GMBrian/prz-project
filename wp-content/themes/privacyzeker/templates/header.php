<header class="banner">
    <div class="container">
        <a class="brand" href="<?= esc_url( home_url( '/' ) ); ?>"><img
                    src="<?= get_stylesheet_directory_uri() . '/dist/images/logo.png'; ?>"></a>
        <nav class="nav-primary">
			<?php
			if ( has_nav_menu( 'primary_navigation' ) ) :
				wp_nav_menu( [ 'theme_location' => 'primary_navigation', 'menu_class' => 'nav' ] );
			endif;
			?>
        </nav>
    </div>
</header>
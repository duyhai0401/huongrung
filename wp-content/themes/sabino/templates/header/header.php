<?php if ( get_theme_mod( 'sabino-header-layout' ) == 'sabino-header-layout-two' ) : ?>
	
	<?php get_template_part( '/templates/header/header-layout-two' ); ?>
	
<?php else : ?>
	
	<?php get_template_part( '/templates/header/header-layout-one' ); ?>
	
<?php endif; ?>
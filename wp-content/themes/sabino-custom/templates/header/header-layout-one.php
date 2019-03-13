<?php
/**
 * @package Sabino
 */
global $woocommerce; ?>
<header id="masthead" class="site-header site-header-layout-one">
	
	<div class="site-container">
			
		<div class="site-branding <?php echo ( has_custom_logo() ) ? sanitize_html_class( 'site-branding-img' ) : ''; ?>">
			
			<?php if ( has_custom_logo() ) : ?>
                <?php the_custom_logo(); ?>
            <?php else : ?>
                <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
                <h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
            <?php endif; ?>
			
		</div><!-- .site-branding -->
		
		<div class="site-header-right <?php echo ( get_theme_mod( 'sabino-website-head-txt-sm' ) || get_theme_mod( 'sabino-website-head-txt-lg' ) ) ? sanitize_html_class( 'site-header-right-txt' ) : ''; ?> <?php echo ( get_theme_mod( 'sabino-remove-header-no' ) ) ? sanitize_html_class( 'site-header-right-no-txt' ) : ''; ?> <?php echo ( get_theme_mod( 'sabino-remove-header-social' ) && get_theme_mod( 'sabino-remove-header-search' ) ) ? sanitize_html_class( 'site-header-right-no-ss' ) : ''; ?> <?php echo ( get_theme_mod( 'sabino-remove-header-social' ) && get_theme_mod( 'sabino-remove-header-search' ) && get_theme_mod( 'sabino-remove-header-no' ) ) ? sanitize_html_class( 'site-header-right-no-sst' ) : ''; ?>">
			
			<div class="site-header-right-top">
				<?php if ( get_theme_mod( 'sabino-website-head-txt-sm' ) || get_theme_mod( 'sabino-website-head-txt-lg' ) ) : ?>
					<span class="site-topbar-right-no"><i class="fas <?php echo ( get_theme_mod( 'sabino-custom-phicon' ) ) ? sanitize_html_class( get_theme_mod( 'sabino-custom-phicon' ) ) : sanitize_html_class( 'fa-phone' ); ?>"></i> <?php echo esc_attr( get_theme_mod( 'sabino-website-head-txt-sm' ) ); ?> <span><?php echo esc_attr( get_theme_mod( 'sabino-website-head-txt-lg' ) ); ?></span></span>
				<?php endif; ?>
			</div>
			
			<div class="site-header-right-bottom">
				
				<?php wp_nav_menu( array( 'theme_location' => 'secondary-menu', 'container_class' => 'sabino-header-nav', 'fallback_cb' => false, 'depth'  => 1 ) ); ?>
				
				<div class="site-header-social">
					<?php get_template_part( '/templates/social-links' ); ?>
				
					<div class="menu-search">
				    	<i class="fas fa-search search-btn"></i>
				    </div>
				</div>
				
			</div>
			
		</div>
		<div class="clearboth"></div>
		
	</div>
	
	<?php if ( get_theme_mod( 'sabino-plugin-mega-menu', customizer_library_get_default( 'sabino-plugin-mega-menu' ) ) ) : ?>
		<nav class="main-navigation-mm">
			<div class="site-container">
		    	<?php wp_nav_menu( array( 'theme_location' => 'primary-menu', 'menu_id' => 'primary-menu' ) ); ?>
		    </div>
		</nav><!-- #site-navigation -->
	<?php else : ?>
		<nav id="site-navigation" class="main-navigation">
			
			<div class="site-container">
				
				<span class="header-menu-button"><i class="fas fa-bars"></i><span><?php echo esc_attr( get_theme_mod( 'sabino-header-menu-text', 'menu' ) ); ?></span></span>
				<div id="main-menu" class="main-menu-container">
					<span class="main-menu-close"><i class="fas fa-angle-right"></i><i class="fas fa-angle-left"></i></span>
					<?php wp_nav_menu( array( 'theme_location' => 'primary-menu', 'menu_id' => 'primary-menu' ) ); ?>
				</div>
				
			</div>
			
		</nav><!-- #site-navigation -->
	<?php endif; ?>
	
	<div class="site-container">
	    <div class="search-block">
	        <?php get_search_form(); ?>
	    </div>
	</div>
	
</header><!-- #masthead -->
<?php
/**
 * @package Sabino
 */
global $woocommerce; ?>
<header id="masthead" class="site-header site-header-layout-two <?php echo ( get_theme_mod( 'sabino-header-centered-layout', customizer_library_get_default( 'sabino-header-centered-layout' ) ) ) ? sanitize_html_class( 'site-header-centered-layout' ) : ''; ?>">
	
	<div class="site-top-bar">
		
		<div class="site-container">
			
			<div class="search-block">
		        <?php get_search_form(); ?>
		    </div>
			
			<div class="site-top-bar-left">
				
				<?php wp_nav_menu( array( 'theme_location' => 'secondary-menu', 'container_class' => 'sabino-header-nav', 'fallback_cb' => false, 'depth'  => 1 ) ); ?>
				
				<?php get_template_part( '/templates/social-links' ); ?>
				
			</div>
			<div class="site-top-bar-right">
				
				<?php if ( get_theme_mod( 'sabino-website-head-txt-sm' ) || get_theme_mod( 'sabino-website-head-txt-lg' ) ) : ?>
					<span class="site-topbar-right-no"><i class="fas <?php echo ( get_theme_mod( 'sabino-custom-phicon' ) ) ? sanitize_html_class( get_theme_mod( 'sabino-custom-phicon' ) ) : sanitize_html_class( 'fa-phone' ); ?>"></i> <?php echo esc_attr( get_theme_mod( 'sabino-website-head-txt-sm' ) ); ?> <span><?php echo esc_attr( get_theme_mod( 'sabino-website-head-txt-lg' ) ); ?></span></span>
				<?php endif; ?>
				
				<?php if ( sabino_is_woocommerce_activated() ) : ?>
					<div class="header-cart">
			            <a class="header-cart-contents" href="<?php echo esc_url( wc_get_cart_url() ); ?>" title="<?php esc_attr_e( 'View your shopping cart', 'sabino' ); ?>">
				            <span class="header-cart-amount">
				                <?php echo sprintf( _n( '%d', '%d', WC()->cart->get_cart_contents_count(), 'sabino' ), WC()->cart->get_cart_contents_count() ); ?><span> - <?php echo wp_kses_data( WC()->cart->get_cart_subtotal() ); ?></span>
				            </span>
				            <span class="header-cart-checkout <?php echo ( WC()->cart->get_cart_contents_count() > 0 ) ? sanitize_html_class( 'cart-has-items' ) : ''; ?>">
				                <i class="fas fa-shopping-cart"></i>
				            </span>
				        </a>
					</div>
				<?php endif; ?>
				
				<div class="menu-search">
			    	<i class="fas fa-search search-btn"></i>
			    </div>
				
			</div>
			
			<div class="clearboth"></div>
		</div>
		
	</div>
	
	<div class="site-container header-container">
		
		<div class="site-branding <?php echo ( has_custom_logo() ) ? sanitize_html_class( 'site-branding-img' ) : ''; ?>">
			
		    <?php if ( has_custom_logo() ) : ?>
                <?php the_custom_logo(); ?>
            <?php else : ?>
                <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
                <h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
            <?php endif; ?>
			
		</div><!-- .site-branding -->
		
		<?php if ( get_theme_mod( 'sabino-plugin-mega-menu', customizer_library_get_default( 'sabino-plugin-mega-menu' ) ) ) : ?>
			<nav class="main-navigation-mm">
			    <?php wp_nav_menu( array( 'theme_location' => 'primary-menu', 'menu_id' => 'primary-menu' ) ); ?>
			</nav><!-- #site-navigation -->
		<?php else : ?>
			<nav id="site-navigation" class="main-navigation">
				
				<span class="header-menu-button"><i class="fas fa-bars"></i><span><?php echo esc_attr( get_theme_mod( 'sabino-header-menu-text', 'menu' ) ); ?></span></span>
				<div id="main-menu" class="main-menu-container">
					<span class="main-menu-close"><i class="fas fa-angle-right"></i><i class="fas fa-angle-left"></i></span>
					<?php wp_nav_menu( array( 'theme_location' => 'primary-menu', 'menu_id' => 'primary-menu' ) ); ?>
				</div>
				
			</nav><!-- #site-navigation -->
		<?php endif; ?>

		<div class="clearboth"></div>
	</div>
	
</header><!-- #masthead -->
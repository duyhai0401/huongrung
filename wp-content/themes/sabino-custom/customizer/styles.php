<?php
/**
 * Implements styles set in the theme customizer
 *
 * @package Customizer Library Sabino
 */

if ( ! function_exists( 'customizer_library_sabino_build_styles' ) && class_exists( 'Customizer_Library_Styles' ) ) :
/**
 * Process user options to generate CSS needed to implement the choices.
 *
 * @since  1.0.0.
 *
 * @return void
 */
function customizer_library_sabino_build_styles() {
	
	// Site Logo Max Width
	$setting = 'sabino-logo-max-size';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

	if ( $mod !== customizer_library_get_default( $setting ) ) {

		$logo_max_width = esc_attr( $mod );

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.site-branding-img'
			),
			'declarations' => array(
				'max-width' => $logo_max_width . 'px'
			)
		) );
	}
	
	// Site Container Set New Width
	$setting = 'sabino-set-container-width';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

	if ( $mod !== customizer_library_get_default( $setting ) ) {

		$container_width = esc_attr( $mod );

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.site-container'
			),
			'declarations' => array(
				'max-width' => $container_width . 'px'
			)
		) );
		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.site-header .site-container,
				.site-footer .site-container'
			),
			'declarations' => array(
				'max-width' => ( $container_width + 40 ) . 'px'
			)
		) );
	}
	
	// Site Background Image
	$setting = 'sabino-default-bg-img';
	$mod = get_theme_mod( $setting, get_template_directory_uri() . '/images/demo/sabino-background-image.jpg' );

	if ( $mod ) {

		$site_bg_img = esc_url( $mod );

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'body'
			),
			'declarations' => array(
				'background-image' => 'url(' . $site_bg_img . ')'
			)
		) );
	}
	
	// Primary Color
	$setting = 'sabino-primary-color';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

	if ( $mod !== customizer_library_get_default( $setting ) ) {

		$color = sanitize_hex_color( $mod );

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'#comments .form-submit #submit,
                .search-block .search-submit,
                .no-results-btn,
                button,
                input[type="button"],
                input[type="reset"],
                input[type="submit"],
                .woocommerce ul.products li.product a.add_to_cart_button, .woocommerce-page ul.products li.product a.add_to_cart_button,
                .woocommerce ul.products li.product .onsale, .woocommerce-page ul.products li.product .onsale,
                .woocommerce button.button.alt,
                .woocommerce-page button.button.alt,
                .woocommerce input.button.alt:hover,
                .woocommerce .content-area input.button.alt:hover,
                .woocommerce .cart-collaterals .shipping_calculator .button,
                .woocommerce-page .cart-collaterals .shipping_calculator .button,
                .woocommerce a.button,
                .woocommerce-page a.button,
                .woocommerce input.button,
                .woocommerce .content-area input.button,
                .woocommerce-page input.button,
                .woocommerce #review_form #respond .form-submit input,
                .woocommerce-page #review_form #respond .form-submit input,
                .woocommerce-cart .wc-proceed-to-checkout a.checkout-button,
                .single-product span.onsale,
                .main-navigation ul ul a:hover,
                .main-navigation ul ul li.current-menu-item > a,
                .main-navigation ul ul li.current_page_item > a,
                .main-navigation ul ul li.current-menu-parent > a,
                .main-navigation ul ul li.current_page_parent > a,
                .main-navigation ul ul li.current-menu-ancestor > a,
                .main-navigation ul ul li.current_page_ancestor > a,
                .main-navigation button,
                .wpcf7-submit'
			),
			'declarations' => array(
				'background' => 'inherit',
                'background-color' => $color
			)
		) );
	}
	
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

	if ( $mod !== customizer_library_get_default( $setting ) ) {

		$color = sanitize_hex_color( $mod );

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.content-area .entry-content a,
				.site-container-main a,
				#comments a,
				.post-edit-link,
				.site-title a,
				.error-404.not-found .page-header .page-title span,
				.search-button .fa-search,
				.header-cart-checkout.cart-has-items .fa-shopping-cart,
				.woocommerce ul.products li.product .price,
				.main-navigation div > ul > li > a:hover,
				.main-navigation div > ul > li.current-menu-item > a,
				.main-navigation div > ul > li.current-menu-ancestor > a,
				.main-navigation div > ul > li.current-menu-parent > a,
				.main-navigation div > ul > li.current_page_parent > a,
				.main-navigation div > ul > li.current_page_ancestor > a'
			),
			'declarations' => array(
                'color' => $color
			)
		) );
	}
	
	

	// Secondary Color
	$setting = 'sabino-secondary-color';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

	if ( $mod !== customizer_library_get_default( $setting ) ) {

		$color = sanitize_hex_color( $mod );

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.main-navigation button:hover,
                #comments .form-submit #submit:hover,
                .search-block .search-submit:hover,
                .no-results-btn:hover,
                button,
                input[type="button"],
                input[type="reset"],
                input[type="submit"],
                .woocommerce input.button.alt,
                .woocommerce .content-area input.button.alt,
                .woocommerce .cart-collaterals .shipping_calculator .button,
                .woocommerce-page .cart-collaterals .shipping_calculator .button,
                .woocommerce a.button:hover,
                .woocommerce-page a.button:hover,
                .woocommerce input.button:hover,
                .woocommerce .content-area input.button:hover,
                .woocommerce-page input.button:hover,
                .woocommerce ul.products li.product a.add_to_cart_button:hover, .woocommerce-page ul.products li.product a.add_to_cart_button:hover,
                .woocommerce button.button.alt:hover,
                .woocommerce-page button.button.alt:hover,
                .woocommerce #review_form #respond .form-submit input:hover,
                .woocommerce-page #review_form #respond .form-submit input:hover,
                .woocommerce-cart .wc-proceed-to-checkout a.checkout-button:hover,
                .wpcf7-submit:hover'
			),
			'declarations' => array(
				'background' => 'inherit',
                'background-color' => $color
			)
		) );
	}
	
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

	if ( $mod !== customizer_library_get_default( $setting ) ) {

		$color = sanitize_hex_color( $mod );

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'a:hover,
                .widget-area .widget a:hover,
                .site-footer-widgets .widget a:hover,
                .site-footer .widget a:hover,
                .search-btn:hover,
                .search-button .fa-search:hover,
                .woocommerce #content div.product p.price,
                .woocommerce .content-area div.product p.price,
                .woocommerce-page div.product p.price,
                .woocommerce #content div.product span.price,
                .woocommerce div.product span.price,
                .woocommerce .content-area div.product span.price,
                .woocommerce-page div.product span.price,

                .woocommerce #content div.product .woocommerce-tabs ul.tabs li.active,
                .woocommerce div.product .woocommerce-tabs ul.tabs li.active,
                .woocommerce .content-area div.product .woocommerce-tabs ul.tabs li.active,
                .woocommerce-page div.product .woocommerce-tabs ul.tabs li.active'
			),
			'declarations' => array(
				'color' => $color
			)
		) );
	}

	// Body Font
	$setting = 'sabino-body-font';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
	$stack = customizer_library_get_font_stack( $mod );

	if ( $mod != customizer_library_get_default( $setting ) ) {

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'body,
				.widget-area .widget a,
				.page-banner-inner h1.entry-title span'
			),
			'declarations' => array(
				'font-family' => $stack
			)
		) );

	}
	
	// Body Font Color
	$setting = 'sabino-body-font-color';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

	if ( $mod !== customizer_library_get_default( $setting ) ) {

		$color = sanitize_hex_color( $mod );

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'body,
                .widget-area .widget a'
			),
			'declarations' => array(
				'color' => $color
			)
		) );
	}

	// Heading Font
	$setting = 'sabino-heading-font';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
	$stack = customizer_library_get_font_stack( $mod );

	if ( $mod != customizer_library_get_default( $setting ) ) {

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'h1, h2, h3, h4, h5, h6,
                h1 a, h2 a, h3 a, h4 a, h5 a, h6 a,
                .widget-area .widget-title,
                .main-navigation ul li a,
                .woocommerce table.cart th,
                .woocommerce .content-area table.cart th,
                .woocommerce-page table.cart th,
                .woocommerce input.button.alt,
                .woocommerce .content-area input.button.alt,
                .woocommerce table.cart input,
                .woocommerce .content-area table.cart input,
                .woocommerce-page table.cart input,
                button, input[type="button"],
                input[type="reset"],
                input[type="submit"]',
			),
			'declarations' => array(
				'font-family' => $stack
			)
		) );

	}
	
	// Heading Font Color
	$setting = 'sabino-heading-font-color';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

	if ( $mod !== customizer_library_get_default( $setting ) ) {

		$color = sanitize_hex_color( $mod );

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'h1, h2, h3, h4, h5, h6,
                h1 a, h2 a, h3 a, h4 a, h5 a, h6 a,
                .widget-area .widget-title'
			),
			'declarations' => array(
				'color' => $color
			)
		) );
	}
    
    // Remove Background Image Setting
    if ( get_theme_mod( 'sabino-remove-body-bg-image' ) ) :
        
        Customizer_Library_Styles()->add( array(
            'selectors' => array(
                'body'
            ),
            'declarations' => array(
                'background-image' => 'none !important'
            )
        ) );
        
    endif;

    // Header Layout Color
	$setting = 'sabino-header-bg-color';
	$setting_opacity = 'sabino-header-bg-opacity';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
	$mod_opacity = get_theme_mod( $setting_opacity, customizer_library_get_default( $setting_opacity ) );

	if ( $mod !== customizer_library_get_default( $setting ) || $mod_opacity !== customizer_library_get_default( $setting_opacity ) ) {

		$color = sanitize_hex_color( $mod );
		$rgba_color = customizer_library_hex_to_rgb( $color );
		$opacity = esc_attr( $mod_opacity );
		
		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.site-header,
				.site-header-layout-two .main-navigation ul ul'
			),
			'declarations' => array(
				'background-color' => 'rgba(' . $rgba_color['r'] . ', ' . $rgba_color['g'] . ', ' . $rgba_color['b'] . ', 0.' . $opacity . ');'
			)
		) );
	}
	$setting = 'sabino-header-font-color';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

	if ( $mod !== customizer_library_get_default( $setting ) ) {

		$color = sanitize_hex_color( $mod );

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.site-header,
				.site-header-layout-two .main-navigation li a'
			),
			'declarations' => array(
				'color' => $color
			)
		) );
		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.site-header-layout-one .site-topbar-right-no'
			),
			'declarations' => array(
				'border-bottom' => '1px dashed ' . $color
			)
		) );
	}
	// Navigation Layout Color
	$setting = 'sabino-nav-bg-color';
	$setting_opacity = 'sabino-nav-bg-opacity';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
	$mod_opacity = get_theme_mod( $setting_opacity, customizer_library_get_default( $setting_opacity ) );

	if ( $mod !== customizer_library_get_default( $setting ) || $mod_opacity !== customizer_library_get_default( $setting_opacity ) ) {

		$color = sanitize_hex_color( $mod );
		$rgba_color = customizer_library_hex_to_rgb( $color );
		$opacity = esc_attr( $mod_opacity );
		
		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.site-header-layout-one .main-navigation,
				.site-header-layout-one .main-navigation ul ul'
			),
			'declarations' => array(
				'background-color' => 'rgba(' . $rgba_color['r'] . ', ' . $rgba_color['g'] . ', ' . $rgba_color['b'] . ', 0.' . $opacity . ');'
			)
		) );
	}
	$setting = 'sabino-nav-font-color';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

	if ( $mod !== customizer_library_get_default( $setting ) ) {

		$color = sanitize_hex_color( $mod );

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.site-header-layout-one .main-navigation,
				.site-header-layout-one .main-navigation li a'
			),
			'declarations' => array(
				'color' => $color
			)
		) );
	}
	// Top Bar Layout Color
	$setting = 'sabino-topbar-bg-color';
	$setting_opacity = 'sabino-topbar-bg-opacity';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
	$mod_opacity = get_theme_mod( $setting_opacity, customizer_library_get_default( $setting_opacity ) );

	if ( $mod !== customizer_library_get_default( $setting ) || $mod_opacity !== customizer_library_get_default( $setting_opacity ) ) {

		$color = sanitize_hex_color( $mod );
		$rgba_color = customizer_library_hex_to_rgb( $color );
		$opacity = esc_attr( $mod_opacity );
		
		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.site-top-bar,
				.site-header-layout-two .search-block'
			),
			'declarations' => array(
				'background-color' => 'rgba(' . $rgba_color['r'] . ', ' . $rgba_color['g'] . ', ' . $rgba_color['b'] . ', 0.' . $opacity . ');',
				'border' => '0'
			)
		) );
	}
	$setting = 'sabino-topbar-font-color';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

	if ( $mod !== customizer_library_get_default( $setting ) ) {

		$color = sanitize_hex_color( $mod );

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.site-top-bar'
			),
			'declarations' => array(
				'color' => $color
			)
		) );
	}
    
    // WC Header Cart Layout Color
    $setting = 'sabino-header-cart-bg-color';
    $setting_opacity = 'sabino-header-cart-opacity';
    $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
    $mod_opacity = get_theme_mod( $setting_opacity, customizer_library_get_default( $setting_opacity ) );

    if ( $mod !== customizer_library_get_default( $setting ) || $mod_opacity !== customizer_library_get_default( $setting_opacity ) ) {

        $color = sanitize_hex_color( $mod );
        $rgba_color = customizer_library_hex_to_rgb( $color );
        $opacity = esc_attr( $mod_opacity );
        
        Customizer_Library_Styles()->add( array(
            'selectors' => array(
                '.header-cart .site-header-cart'
            ),
            'declarations' => array(
                'background-color' => 'rgba(' . $rgba_color['r'] . ', ' . $rgba_color['g'] . ', ' . $rgba_color['b'] . ', 0.' . $opacity . ');'
            )
        ) );
    }
    $setting = 'sabino-header-cart-font-color';
    $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

    if ( $mod !== customizer_library_get_default( $setting ) ) {

        $color = sanitize_hex_color( $mod );

        Customizer_Library_Styles()->add( array(
            'selectors' => array(
                '.header-cart .site-header-cart,
                .header-cart .site-header-cart ul.cart_list li a,
                .header-cart .site-header-cart ul.product_list_widget li a,
                .header-cart .site-header-cart .widget_shopping_cart .total'
            ),
            'declarations' => array(
                'color' => $color
            )
        ) );
    }
    
    // Slider Block Background Color
    $setting = 'sabino-slider-block-bg-color';
    $setting_opacity = 'sabino-slider-block-opacity';
    $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
    $mod_opacity = get_theme_mod( $setting_opacity, customizer_library_get_default( $setting_opacity ) );

    if ( $mod !== customizer_library_get_default( $setting ) || $mod_opacity !== customizer_library_get_default( $setting_opacity ) ) {

        $color = sanitize_hex_color( $mod );
        $rgba_color = customizer_library_hex_to_rgb( $color );
        $opacity = esc_attr( $mod_opacity );
        
        Customizer_Library_Styles()->add( array(
            'selectors' => array(
                '.home-slider-block-bg'
            ),
            'declarations' => array(
                'background-color' => 'rgba(' . $rgba_color['r'] . ', ' . $rgba_color['g'] . ', ' . $rgba_color['b'] . ', 0.' . $opacity . ');'
            )
        ) );
        Customizer_Library_Styles()->add( array(
            'selectors' => array(
                '.home-slider-prev,
                .home-slider-next'
            ),
            'declarations' => array(
                'background-color' => 'rgba(' . $rgba_color['r'] . ', ' . $rgba_color['g'] . ', ' . $rgba_color['b'] . ', 0.' . ( $opacity - 10 ) . ');'
            )
        ) );
        Customizer_Library_Styles()->add( array(
            'selectors' => array(
                '.home-slider-prev:hover,
                .home-slider-next:hover'
            ),
            'declarations' => array(
                'background-color' => 'rgba(' . $rgba_color['r'] . ', ' . $rgba_color['g'] . ', ' . $rgba_color['b'] . ', 0.' . $opacity . ');'
            )
        ) );
    }
    $setting = 'sabino-slider-block-font-color';
    $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

    if ( $mod !== customizer_library_get_default( $setting ) ) {

        $color = sanitize_hex_color( $mod );

        Customizer_Library_Styles()->add( array(
            'selectors' => array(
                '.home-slider-block-bg'
            ),
            'declarations' => array(
                'color' => $color
            )
        ) );
    }
	
	// Pages Layout Color
	$setting = 'sabino-pages-bg-color';
	$setting_opacity = 'sabino-pages-bg-opacity';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
	$mod_opacity = get_theme_mod( $setting_opacity, customizer_library_get_default( $setting_opacity ) );

	if ( $mod !== customizer_library_get_default( $setting ) || $mod_opacity !== customizer_library_get_default( $setting_opacity ) ) {

		$color = sanitize_hex_color( $mod );
		$rgba_color = customizer_library_hex_to_rgb( $color );
		$opacity = esc_attr( $mod_opacity );
		
		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.content-layout-joined .site-container-main,
				.content-layout-blocks.content-joined-widgets .content-area,
				.content-layout-blocks.content-joined-widgets #container,
				.content-layout-blocks.content-broken-widgets .content-area,
				.content-layout-blocks.content-broken-widgets #container,
				.content-layout-blocks.content-joined-widgets .widget-area,
				.content-layout-blocks.content-broken-widgets .widget-area .widget,
				
				body.blog .content-layout-blocks .sabino-blog-breakup article.post,
				body.archive.category .content-layout-blocks .sabino-blog-breakup article.post,
				body.archive.tag .content-layout-blocks .sabino-blog-breakup article.post,
				body.blog .content-layout-blocks .sabino-blog-breakup .site-main > .entry-header,
				body.archive.category .content-layout-blocks .sabino-blog-breakup .site-main > .page-header,
				body.archive.tag .content-layout-blocks .sabino-blog-breakup .site-main > .page-header,
				body.blog .content-layout-blocks .sabino-blog-breakup .not-found'
			),
			'declarations' => array(
				'background-color' => 'rgba(' . $rgba_color['r'] . ', ' . $rgba_color['g'] . ', ' . $rgba_color['b'] . ', 0.' . $opacity . ');'
			)
		) );
	}
	$setting = 'sabino-pages-widget-head-color';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

	if ( $mod !== customizer_library_get_default( $setting ) ) {

		$color = sanitize_hex_color( $mod );

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.widget-area .widget-title,
				.widget-area .widgettitle'
			),
			'declarations' => array(
				'color' => $color
			)
		) );
		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.widget-area .widget-title,
				.widget-area .widgettitle'
			),
			'declarations' => array(
				'border-bottom' => '1px dashed ' . $color
			)
		) );
	}
	
	// Footer Layout Color
	$setting = 'sabino-footer-bg-color';
	$setting_opacity = 'sabino-footer-bg-opacity';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
	$mod_opacity = get_theme_mod( $setting_opacity, customizer_library_get_default( $setting_opacity ) );

	if ( $mod !== customizer_library_get_default( $setting ) || $mod_opacity !== customizer_library_get_default( $setting_opacity ) ) {

		$color = sanitize_hex_color( $mod );
		$rgba_color = customizer_library_hex_to_rgb( $color );
		$opacity = esc_attr( $mod_opacity );
		
		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.site-footer'
			),
			'declarations' => array(
				'background-color' => 'rgba(' . $rgba_color['r'] . ', ' . $rgba_color['g'] . ', ' . $rgba_color['b'] . ', 0.' . $opacity . ');'
			)
		) );
		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.site-footer'
			),
			'declarations' => array(
				'border-top' => '1px solid rgba(0, 0, 0, 0.3);'
			)
		) );
	}
	$setting = 'sabino-footer-head-font-color';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
	$mod_opacity = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

	if ( $mod !== customizer_library_get_default( $setting ) ) {

		$color = sanitize_hex_color( $mod );
		$rgba_color = customizer_library_hex_to_rgb( $color );

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.site-footer .widgettitle,
				.site-footer .widget-title'
			),
			'declarations' => array(
				'color' => $color
			)
		) );
		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.site-footer .widgettitle,
				.site-footer .widget-title'
			),
			'declarations' => array(
				'border-bottom' => '1px dotted rgba(' . $rgba_color['r'] . ', ' . $rgba_color['g'] . ', ' . $rgba_color['b'] . ', 0.6);'
			)
		) );
	}
	$setting = 'sabino-footer-font-color';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

	if ( $mod !== customizer_library_get_default( $setting ) ) {

		$color = sanitize_hex_color( $mod );

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.site-footer'
			),
			'declarations' => array(
				'color' => $color
			)
		) );
	}
	// Bottom Bar Layout Color
	$setting = 'sabino-bottombar-bg-color';
	$setting_opacity = 'sabino-bottombar-bg-opacity';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
	$mod_opacity = get_theme_mod( $setting_opacity, customizer_library_get_default( $setting_opacity ) );

	if ( $mod !== customizer_library_get_default( $setting ) || $mod_opacity !== customizer_library_get_default( $setting_opacity ) ) {

		$color = sanitize_hex_color( $mod );
		$rgba_color = customizer_library_hex_to_rgb( $color );
		$opacity = esc_attr( $mod_opacity );
		
		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.site-footer-bottom-bar'
			),
			'declarations' => array(
				'background-color' => 'rgba(' . $rgba_color['r'] . ', ' . $rgba_color['g'] . ', ' . $rgba_color['b'] . ', 0.' . $opacity . ');'
			)
		) );
		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.site-footer-bottom-bar'
			),
			'declarations' => array(
				'border-top' => '1px solid rgba(0, 0, 0, 0.3);'
			)
		) );
	}
	$setting = 'sabino-bottombar-font-color';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

	if ( $mod !== customizer_library_get_default( $setting ) ) {

		$color = sanitize_hex_color( $mod );

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.site-footer-bottom-bar'
			),
			'declarations' => array(
				'color' => $color
			)
		) );
	}
	
}
endif;

add_action( 'customizer_library_styles', 'customizer_library_sabino_build_styles' );

if ( ! function_exists( 'customizer_library_sabino_styles' ) ) :
/**
 * Generates the style tag and CSS needed for the theme options.
 *
 * By using the "Customizer_Library_Styles" filter, different components can print CSS in the header.
 * It is organized this way to ensure there is only one "style" tag.
 *
 * @since  1.0.0.
 *
 * @return void
 */
function customizer_library_sabino_styles() {

	do_action( 'customizer_library_styles' );

	// Echo the rules
	$css = Customizer_Library_Styles()->build();

	if ( ! empty( $css ) ) {
		echo "\n<!-- Begin Custom CSS -->\n<style type=\"text/css\" id=\"sabino-custom-css\">\n";
		echo $css;
		echo "\n</style>\n<!-- End Custom CSS -->\n";
	}
}
endif;

add_action( 'wp_head', 'customizer_library_sabino_styles', 11 );
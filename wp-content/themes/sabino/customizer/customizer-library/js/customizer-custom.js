/**
 * Customizer Custom Functionality
 *
 */
( function( $ ) {
    
    $( window ).load( function() {

        //Show / Hide Header Layout Colors
        var sabino_header_select_value = $( '#customize-control-sabino-header-layout select' ).val();
        sabino_customizer_header_check( sabino_header_select_value );
        
        $( '#customize-control-sabino-header-layout select' ).on( 'change', function() {
            var sabino_header_value = $( this ).val();
            sabino_customizer_header_check( sabino_header_value );
        } );
        
        function sabino_customizer_header_check( sabino_header_value ) {
            if ( sabino_header_value == 'sabino-header-layout-one' ) {
                $( '#sub-accordion-section-sabino-panel-settings-section-header #customize-control-sabino-header-centered-layout' ).hide();
                $( '#sub-accordion-section-sabino-panel-layout-colors-section-header #customize-control-sabino-nav-bg-color' ).show();
                $( '#sub-accordion-section-sabino-panel-layout-colors-section-header #customize-control-sabino-nav-font-color' ).show();
                $( '#sub-accordion-section-sabino-panel-layout-colors-section-header #customize-control-sabino-nav-bg-opacity' ).show();
                $( '#sub-accordion-section-sabino-panel-layout-colors-section-header #customize-control-sabino-topbar-bg-color' ).hide();
                $( '#sub-accordion-section-sabino-panel-layout-colors-section-header #customize-control-sabino-topbar-font-color' ).hide();
                $( '#sub-accordion-section-sabino-panel-layout-colors-section-header #customize-control-sabino-topbar-bg-opacity' ).hide();
            } else {
                $( '#sub-accordion-section-sabino-panel-settings-section-header #customize-control-sabino-header-centered-layout' ).show();
                $( '#sub-accordion-section-sabino-panel-layout-colors-section-header #customize-control-sabino-nav-bg-color' ).hide();
                $( '#sub-accordion-section-sabino-panel-layout-colors-section-header #customize-control-sabino-nav-font-color' ).hide();
                $( '#sub-accordion-section-sabino-panel-layout-colors-section-header #customize-control-sabino-nav-bg-opacity' ).hide();
                $( '#sub-accordion-section-sabino-panel-layout-colors-section-header #customize-control-sabino-topbar-bg-color' ).show();
                $( '#sub-accordion-section-sabino-panel-layout-colors-section-header #customize-control-sabino-topbar-font-color' ).show();
                $( '#sub-accordion-section-sabino-panel-layout-colors-section-header #customize-control-sabino-topbar-bg-opacity' ).show();
            }
        }
        
        // Show / Hide Color selector for slider setting
        var the_slider_select_value = $( '#customize-control-sabino-slider-type select' ).val();
        sabino_customizer_slider_check( the_slider_select_value );
        
        $( '#customize-control-sabino-slider-type select' ).on( 'change', function() {
            var slider_select_value = $( this ).val();
            sabino_customizer_slider_check( slider_select_value );
        } );
        
        function sabino_customizer_slider_check( slider_select_value ) {
            if ( slider_select_value == 'sabino-slider-default' ) {
                $( '#sub-accordion-section-sabino-panel-settings-section-slider #customize-control-sabino-meta-slider-shortcode' ).hide();
                $( '#sub-accordion-section-sabino-panel-settings-section-slider #customize-control-sabino-slider-cats' ).show();
                $( '#sub-accordion-section-sabino-panel-settings-section-slider #customize-control-sabino-slider-size' ).show();
            } else if ( slider_select_value == 'sabino-meta-slider' ) {
                $( '#sub-accordion-section-sabino-panel-settings-section-slider #customize-control-sabino-slider-cats' ).hide();
                $( '#sub-accordion-section-sabino-panel-settings-section-slider #customize-control-sabino-slider-size' ).hide();
                $( '#sub-accordion-section-sabino-panel-settings-section-slider #customize-control-sabino-meta-slider-shortcode' ).show();
            } else {
                $( '#sub-accordion-section-sabino-panel-settings-section-slider #customize-control-sabino-slider-cats' ).hide();
                $( '#sub-accordion-section-sabino-panel-settings-section-slider #customize-control-sabino-slider-size' ).hide();
                $( '#sub-accordion-section-sabino-panel-settings-section-slider #customize-control-sabino-meta-slider-shortcode' ).hide();
                // $( '#accordion-panel-sabino-panel-colors' ).addClass( 'sabino-remove-section' );
            }
        }
        
        //Show / Hide Color selector for slider setting
        var the_blocks_select_value = $( '#customize-control-sabino-content-layout select' ).val();
        sabino_customizer_blocks_check( the_blocks_select_value );
        
        $( '#customize-control-sabino-content-layout select' ).on( 'change', function() {
            var blocks_select_value = $( this ).val();
            sabino_customizer_blocks_check( blocks_select_value );
        } );
        
        function sabino_customizer_blocks_check( blocks_select_value ) {
            if ( blocks_select_value == 'sabino-content-layout-blocks' ) {
                $( '#sub-accordion-section-sabino-panel-settings-section-website #customize-control-sabino-content-break-widgets' ).show();
            } else {
                $( '#sub-accordion-section-sabino-panel-settings-section-website #customize-control-sabino-content-break-widgets' ).hide();
            }
        }

        //Show / Hide Footer Layout Colors
        var sabino_footer_select_value = $( '#customize-control-sabino-footer-layout select' ).val();
        sabino_customizer_footer_check( sabino_footer_select_value );
        
        $( '#customize-control-sabino-footer-layout select' ).on( 'change', function() {
            var sabino_footer_value = $( this ).val();
            sabino_customizer_footer_check( sabino_footer_value );
        } );
        
        function sabino_customizer_footer_check( sabino_footer_value ) {
            if ( sabino_footer_value == 'sabino-footer-layout-standard' || sabino_footer_value == 'sabino-footer-layout-custom' ) {
                $( '#sub-accordion-section-sabino-panel-layout-colors-section-footer #customize-control-sabino-footer-head-font-color' ).show();
            } else {
                $( '#sub-accordion-section-sabino-panel-layout-colors-section-footer #customize-control-sabino-footer-head-font-color' ).hide();
            }
        }
        
    } );
    
} )( jQuery );
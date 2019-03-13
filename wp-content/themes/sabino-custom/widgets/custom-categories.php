<?php

class Th_Custom_Categories extends WP_Widget {
    
    function __construct() {
        $widget_ops = array( 
            'classname'                     => 'th_custom_categories',
            'description'                   => __('Display categories with custom view', 'sabino_custom'),
            'customize_selective_refresh'   => true,
        );
        parent::__construct('th_custom_categories', __('TH: Categories', 'sabino_custom'), $widget_ops);
    }
    
    /**
	 * Outputs the content of the widget
	 *
	 * @param array $args
	 * @param array $instance
	 */
	public function widget( $args, $instance ) {
		// outputs the content of the widget
		$title = apply_filters( 'widget_title', $instance['title'] );
        // before and after widget arguments are defined by themes
        $taxonomy     = 'product_cat';
        $orderby      = 'name';  
        $show_count   = 0;      // 1 for yes, 0 for no
        $pad_counts   = 0;      // 1 for yes, 0 for no
        $hierarchical = 1;      // 1 for yes, 0 for no  
        $title        = '';  
        $empty        = 0;

        $cat_args = array(
             'taxonomy'     => $taxonomy,
             'orderby'      => $orderby,
             'show_count'   => $show_count,
             'pad_counts'   => $pad_counts,
             'hierarchical' => $hierarchical,
             'title_li'     => $title,
             'hide_empty'   => $empty
        );
        $all_categories = get_categories( $cat_args );
        $pro_cat = array();
        foreach($all_categories as $cat) {
            if($cat->slug != 'chua-phan-loai') {
                if($cat->parent != 0) {
                    $pro_cat[$cat->parent]['children'][$cat->term_id]['data'] = $cat;
                } else {
                    $pro_cat[$cat->term_id]['data'] = $cat;
                }
            }
        }
        ?>
        <!--<i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>-->
        <div id="wrap-custom" class="menu-list">
		  <ul class="sidesnavbar menu-content  out" >
		      <?php
		        foreach($pro_cat as $cat) {
		            $category_str = "<li><a href='".get_term_link( $cat['data']->term_id, 'product_cat' )."'>".$cat['data']->name."</a>";
		            if(isset($cat['children'])) {
		                $category_str .= "<ul>";
		                foreach($cat['children'] as $child) {
		                    $category_str .= "<li><a href='".get_term_link( $child['data']->term_id, 'product_cat' )."'>".$child['data']->name."</a></li>";
		                }
		                $category_str .= "</ul>";
		            }
		            $category_str .= "</li>";
		            echo $category_str;
		        }
		      ?>
		  </ul>
       </div>
        <?php
        echo $args['after_widget'];
	}

	/**
	 * Outputs the options form on admin
	 *
	 * @param array $instance The widget options
	 */
	public function form( $instance ) {
		// outputs the options form on admin
        if ( isset( $instance[ 'title' ] ) ) {
            $title = $instance[ 'title' ];
        }
        else {
        $title = __( 'New title', 'sabino_custom' );
        }
        // Widget admin form
        ?>
        <p>
        <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label> 
        <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
        </p>
        <?php 
	}

	/**
	 * Processing widget options on save
	 *
	 * @param array $new_instance The new options
	 * @param array $old_instance The previous options
	 *
	 * @return array
	 */
	public function update( $new_instance, $old_instance ) {
		// processes widget options to be saved
		$instance = array();
        $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
        return $instance;
	}
}
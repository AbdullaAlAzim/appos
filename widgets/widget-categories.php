<?php

/**
 * Duplicated and tweaked WP core Categories widget class
 */
class Widget_Categories extends WP_Widget {

    function __construct()
    {
        $widget_ops = array( 'classname' => 'widget_categories widget_categories_custom', 'description' => __( "It is customize category with different style from default wordpress category.", 'appos'  ) );
        parent::__construct( 'categories_custom', __( 'Appos::Categories', 'appos' ), $widget_ops );
    }

    function widget( $args, $instance )
    {
        $count = (!empty($instance['count'])) ? $instance['count'] : 'off';
        extract( $args );

        $title = apply_filters( 'widget_title', empty( $instance['title'] ) ? __( 'Categories', 'appos'  ) : $instance['title'], $instance, $this->id_base);

        echo $before_widget;
        if ( $title )
            echo $before_title . $title . $after_title;
        ?>
        <ul class="category-list">
            <?php $categories = get_terms( 'category', array( 
                     'orderby'  => 'name',
                     'hide_empty' => true,
                    ) );

                    foreach( $categories as $category ) :
                     $category_link = get_term_link( $category, $category->slug ); ?>
                        <li class="cat-item"><a href="<?php echo esc_url( $category_link ); ?>"><?php echo esc_html( $category->name ); ?></a><?php if($count=='on'): ?><span><?php echo esc_html( $category->count ); ?></span><?php endif; ?></li>
            <?php endforeach; ?>
        </ul>
        <?php
        echo $after_widget;
    }

    function update( $new_instance, $old_instance )
    {
        $instance = $old_instance;
        $instance['title'] = strip_tags( $new_instance['title'] );
        $instance[ 'count' ] = $new_instance[ 'count' ];
        $instance['hierarchical'] = 0;
        $instance['dropdown'] = 0;

        return $instance;
    }

    function form( $instance )
    {
        //Defaults
        $instance = wp_parse_args( (array) $instance, array( 'title' => '','count'=>'on') );
        $title = esc_attr( $instance['title'] );
        $hierarchical = false;
        $dropdown = false;
        ?>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('title', 'appos' )); ?>"><?php esc_html_e( 'Title:', 'appos'  ); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text" value="<?php echo esc_attr($title); ?>" />
        </p>
        <p>
            <input class="checkbox" type="checkbox" <?php checked( $instance[ 'count' ], 'on' ); ?> id="<?php echo esc_attr($this->get_field_id( 'count' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'count' )); ?>" /> 
            <label for="<?php echo esc_attr($this->get_field_id( 'count' )); ?>"><?php esc_html_e('Are you show Post Count ?','appos'); ?></label>
        </p>
        <?php
    }
}


function appos_Categories(){
	register_widget('Widget_Categories');
}
add_action('widgets_init', 'appos_Categories');


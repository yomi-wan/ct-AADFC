<?php

class aadfc_widget extends WP_Widget{

    //register the widgets
    public function __construct() {
        parent::__construct(
            'aadfc_widget', // Base ID
            'aadfc widget', // Name
            array( 'description' => __( 'aadfc_widget', 'text_domain' ), ) // Args
        );
    }//end registering widgets

    //array of arguments for registering sidebars/widgets
    public $args = array(
        'wrapper_open'  => '<aside>',
        'wrapper_close' => '</aside>',
        'before_title'  => '<h3 class="widget-heading">',
        'after_title'   =>  '</h3>',
        'before_widget' =>  '<div class="widget-container">',
        'after_widget'  =>  '</div>',
    );

    //Displaying the front-end of the widget
    /**
     * 
     * @see WP_Widget::widget()
     * @param array $args - Widget arguments
     * @param array $instance - Saved values from database
     * 
     */
    
     public function widget($args, $instance){
        echo $args['wrapper_open'];
        echo $args['before_widget'];

        if (! empty($instance['title'])){
            echo $args['before_title'] . apply_filters('widget_title', $instance['title']) . $args['after_title'];
        }

        echo '<div class="widget_content_wrapper">';
            echo esc_html__($instance['text'], 'text_domain');
        echo '</div>';
        
        echo $args['after_widget'];
        echo $args['wrapper_close'];


     }//end of widget function

     //backend widget form

     /**
      * @see WP_Widget::form()
      * @param array $instance - previously saved values from the database.
      */

      public function form($instance){
        $title = ! empty($instance['title'] ) ? $instance['title'] : esc_html__('', 'text_domain');

        $text = ! empty($instance['text'] ) ? $instance['text'] : esc_html__('', 'text_domain');
        
        ?>
       <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>">
                <?php esc_attr_e( 'Title:', 'text_domain' ); ?>
            </label>

            <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
            </p>
            <p>
                <textarea class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'text' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'text' ) ); ?>" type="text" cols="30" rows="10"><?php echo esc_attr( $text ); ?></textarea>
            </p>

        <?php

      }//close form function

      // Update and Sanitize the widget
      /**
       * @see WP_Widget::update()
       * @param array $new_instance - values to be saved
       * @param array $old_instance - previously saved values from db
       * 
       * @return array - updated safe values to be saved
       */

       public function update($new_instance, $old_instance) {

        $instance = array();

        $instance['title'] = ( !empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';

        $instance['text'] = ( !empty( $new_instance['text'] ) ) ? strip_tags( $new_instance['text'] ) : '';

        return $instance;

       }//closing update function

}//end of class

$my_widget = new aadfc_widget();


//registering the sidebar/footer widgets

add_action('widgets_init', 'aadfc_widgets_init');

if (! function_exists( 'aadfc_widgets_init' )) {

    function aadfc_widgets_init(){
        
        //left sidebar
        register_sidebar(
            array(
                'name'          => __('Left Sidebar', 'aadfc'),
                'id'            => 'left-sidebar',
                'description'   => __('Left Sidebar widget area', 'aadfc'),
                'before_widget' => '<aside id="%1$s" class="widget %2$s">',
                'after_widget'  => '</aside>',
                'before_title'  => '<h3 class="widget-title">',
                'after_title'   => '</h3>',
            )
        );

        //right sidebar
        register_sidebar(
            array(
                'name'          => __('Right Sidebar', 'aadfc'),
                'id'            => 'right-sidebar',
                'description'   => __('Right Sidebar widget area', 'aadfc'),
                'before_widget' => '<aside id="%1$s" class="widget %2$s">',
                'after_widget'  => '</aside>',
                'before_title'  => '<h3 class="widget-title">',
                'after_title'   => '</h3>',
            )
        );

        //banner
        register_sidebar(
            array(
                'name'          => __('Banner', 'aadfc'),
                'id'            => 'banner-widget',
                'description'   => __('Banner widget area', 'aadfc'),
                'before_widget' => '<div class="container"><div class="row"><div id="%1$s" class="widget banner col-12 col-md-8 %2$s">',
                'after_widget'  => '</div></div></div>',
                'before_title'  => '<h3 class="widget-title">',
                'after_title'   => '</h3>',
            )
        );

        //footer widget
        register_sidebar(
            array(
                'name'          => __('Footer Widget', 'aadfc'),
                'id'            => 'footer-widget',
                'description'   => __('Footer widget area', 'aadfc'),
                'before_widget' => '<aside id="%1$s" class="widget col-12 col-md-6">',
                'after_widget'  => '</aside>',
                'before_title'  => '<h3 class="widget-title">',
                'after_title'   => '</h3>',
            )
        );
    }
}


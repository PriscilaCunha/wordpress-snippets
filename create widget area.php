<?php 
/* Register sidebars and widgetized areas - functions.php */
/* Registrar barra lateral e área de widgets - functions.php */
function custom_widgets_init() {

    register_sidebar( array(
        'name'          => 'Widget area name',
        'description'   => __( 'Widget area description.', 'theme_text_domain' ),
        'id'            => 'widget_id',
        'before_widget' => '<div>',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );

}
add_action( 'widgets_init', custom_widgets_init );


/* Display sidebars and widgetized areas - header.php, footer.php */
/* Exibir barra lateral e área de widgets - header.php, footer.php */
if ( is_active_sidebar( 'widget_id' ) ) :
    echo '<div id="widget-id" class="widget-area">'.dynamic_sidebar( 'widget_id' ).'</div><!-- #widget-id -->';
endif;

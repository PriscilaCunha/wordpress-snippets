<?php

/* Remove default WordPress jQuery and add another version on footer - functions.php */
/* Remove jQuery padrão do WordPress e adicionar outra versão no footer - functions.php */
add_action( 'wp_enqueue_scripts', 'wap_enqueue_scripts_styles' );
function wap_enqueue_scripts_styles() {
	wp_deregister_script('jquery');
	
	wp_register_script('jquery', "//ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js", false, null); 
	wp_enqueue_script('jquery');
}

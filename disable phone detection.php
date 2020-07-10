<?php

/* Disable Automatic Phone Detection - functions.php */
/* Desabilitar Detecção Automática de Telefone - functions.php */
add_action( 'wp_head', 'custom_header_metadata' );
function custom_header_metadata() {
	echo '<meta name="format-detection" content="telephone=no">';
}

<?php

/* Allow upload of other files - functions.php */
/* Permite upload de outros arquivos - functions.php */
function add_custom_mime_types($mime_types){
	$mime_types['svg'] = 'image/svg+xml';
	$mime_types['psd'] = 'image/vnd.adobe.photoshop';
	$mime_types['eps']  = 'application/postscript';
	$mime_types['ai']   = 'application/pdf';
	return $mime_types;
}
add_filter('upload_mimes', 'add_custom_mime_types', 1, 1);

/* Makes JetPack add duplicate option for custom posts - functions.php */
/* Faz JetPack adicionar opção de duplicar para posts personalizados - functions.php */
function jetpack_add_copy_support( $post_types ) {
    $post_types[] = 'portfolio'; // add post type name here
    return $post_types;
}
add_filter( 'jetpack_copy_post_post_types', 'jetpack_add_copy_support' );

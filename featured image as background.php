<?php

/* Add current post featured image as background - single.php */
/* Adicionar imagem destacada da postagem atual da postagem como fundo - single.php */
if ( has_post_thumbnail() ) :
  echo '<div class="header-image" style="background-image: url(' . the_post_thumbnail_url() .')">' . the_title() . '</div>;
else :
  echo '<div class="header-no-image">' . the_title() . '</div>';
endif;

Add this below the post section of your single.php  
Adicione isso abaixo da seção de postagem do seu single.php.
```php
<?php
	$prevPost = get_previous_post(true);
	$nextPost = get_next_post(true);
	$prevPost = get_previous_post(true);
	if ($prevPost):
		$args = array(
			'posts_per_page' => 1,
			'include' => $prevPost->ID
		);
		$prevPost = get_posts($args);
		foreach ($prevPost as $post):
			setup_postdata($post);
			?>

			<div class="post-previous">
				<!-- Add thumbnail with link -->
				<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
				<!-- Add title -->
				<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
				<!-- Add excerpt with defined size -->
				<p><?php $content = get_the_content(); echo wp_trim_words( $content , '28' ); ?></p>
				<!-- Show navigation label -->
				<a class="previous" href="<?php the_permalink(); ?>"><i class="fa fa-arrow-left"></i> Previous Article</a>
			</div>

			<?php
			wp_reset_postdata();
		endforeach;
	endif;
         
	$nextPost = get_next_post(true);
	if($nextPost):
		$args = array(
			'posts_per_page' => 1,
			'include' => $nextPost->ID
		);
		$nextPost = get_posts($args);
		foreach ($nextPost as $post):
			setup_postdata($post);
			?>
			
			<div class="post-next">
				<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
				<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
				<p><?php $content = get_the_content(); echo wp_trim_words( $content , '28' ); ?></p>
				<a class="previous" href="<?php the_permalink(); ?>">Next Article <i class="fa fa-arrow-right"></i></a>
			</div>
			
			<?php
			wp_reset_postdata();
		endforeach;
	endif;
?>
```

Style.css  
```css
.single-post-nav {
    width: 100%;
    margin-top: 60px;
    border-top: 3px solid #45A3D6;
    background: #fff;
}
 
.single-post-nav a {
    text-decoration: none;
}
 
.single-post-nav > div {
    width: 50%;
    float: left;
    padding: 30px 50px;
    text-align: right;
}
 
.single-post-nav > div:first-child {
    border-right: 3px solid #45A3D6;
    text-align: left;
}
 
.single-post-nav > div h4 {
    margin: 0;
}
 
.single-post-nav > div:nth-of-type(1) img {
    float: left;
    margin-right: 16px;
}
 
.single-post-nav > div:nth-of-type(2) img {
    float: right;
    margin-left: 16px;
}
```

_Source / Fonte: https://wptricks.co.uk/next-and-previous-posts-navigation-with-thumbnails/_

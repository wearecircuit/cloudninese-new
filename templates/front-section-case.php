
<?php
	$case = get_category_by_slug( 'case' );
	$term_id = $case->term_id;
	$args = array('posts_per_page' => 1, 'category' => $term_id, 'orderby' => 'rand');
	$posts = get_posts( $args );
	if(count($posts) > 0):
		foreach ( $posts as $post ) : setup_postdata( $post );
			// var_dump($post);
			$img_url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
			?>
			<section class="featured-case fullsize" style="background-image:url('<?php print($img_url); ?>');">
				<div class="container">
					<div class="center-content">
						<p class="title1"><?php echo $post->post_title; ?></p>
						<p><?php the_field('second_title', $post->ID); ?> <a href="<?php the_permalink(); ?>">Se case</a></p>
					</div>
					<figure>
						<img src="<?php bloginfo('template_directory'); ?>/assets/img/arrow_down.svg" alt="">
					</figure>
				</div>
			</section>
			<?php
		endforeach; 
	endif;
	
?>




	
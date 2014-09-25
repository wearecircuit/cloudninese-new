<?php 
// arguments
$args = array(
	'posts_per_page' => 1,
	'post_type' => 'post',
	'tax_query' => array(
		'relation' => 'AND',
		array(
			'taxonomy' => 'category',
			'field'    => 'slug',
			'terms'    => array( 'case' ),
		),
		array(
			'taxonomy' => 'post_tag',
			'field'    => 'slug',
			'terms'    => array( 'front' ),
		),
	),
	'orderby' => 'rand',
);

// the query
$the_query = new WP_Query( $args ); ?>

<?php if ( $the_query->have_posts() ) : ?>

	<!-- pagination here -->

	<!-- the loop -->
	<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
		<section class="case fullsize" <?php inline_css( $post->ID ); ?>>
			<div class="container center-content">
				<span class="title1"><?php echo $post->post_title; ?></span>
				<p><?php the_field('second_title', $post->ID); ?> <a href="<?php the_permalink(); ?>">Se case</a></p>
				<figure>
					<img src="<?php bloginfo('template_directory'); ?>/assets/img/arrow_down.svg" alt="">
				</figure>
			</div>
		</section>
	<?php endwhile; ?>
	<!-- end of the loop -->

	<!-- pagination here -->

	<?php wp_reset_postdata(); ?>

<?php else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

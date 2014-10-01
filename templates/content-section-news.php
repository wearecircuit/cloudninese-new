<?php 
// arguments
$args = array(
	'post_type' => 'post',
	'tax_query' => array(
		'relation' => 'AND',
		array(
			'taxonomy' => 'category',
			'field'    => 'slug',
			'terms'    => array( 'news' ),
		),
		array(
			'taxonomy' => 'post_tag',
			'field'    => 'slug',
			'terms'    => array( 'front' ),
		),
	),
);

// the query
$the_query = new WP_Query( $args );
?>

<?php if ( $the_query->have_posts() ) : ?>

	<!-- pagination here -->
	<section>

	<!-- the loop -->
	<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
		<article class="news-item" <?php inline_css( $the_query->ID ); ?>>
			<span><?php the_field('second_title', $the_query->ID); ?></span>
			<time datetime="<?php the_time('Y-m-d'); ?>">
				<span><?php the_time('d M'); ?></span>
				<span><?php the_time('Y'); ?></span>
			</time>
			<h2><?php the_title(); ?></h2>
			<p><a href="<?php the_permalink(); ?>" class="btn">Läs</a><a href="/blogg">Se alla inlägg</a></p>
		</article>
	<?php endwhile; ?>
	<!-- end of the loop -->

	<!-- pagination here -->
	</section>

	<?php wp_reset_postdata(); ?>

<?php else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
<?php
/*
Template Name: Contact Template
*/
?>

<?php while (have_posts()) : the_post(); ?>
	<section class="map">
		<div id="map-canvas"></div>
		<div class="map-overlay"></div>
		<div class="map-content container air">
			<article>
				<h2>Vi finns lite överallt</h2>
			</article>
		</div>
	</section>

	<section class="air">
		<div class="container">
			<?php get_template_part('templates/page', 'header'); ?>
			<?php get_template_part('templates/content', 'page'); ?>
		</div>
	</section>
<?php endwhile; ?>

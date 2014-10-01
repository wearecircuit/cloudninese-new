<?php
/*
Template Name: Contact Template
*/
?>
<section class="map">
	<div id="map-canvas"></div>
	<div class="map-content air">
		<article>
			<h2>Vi finns lite överallt</h2>
		</article>
	</div>
</section>

<?php while (have_posts()) : the_post(); ?>
	<section class="contact air">
		<div class="container">
			<article>
				<header>
					<h1><?php the_field('second_title', $post->ID); ?></h1>
				</header>
				<figure class="portrait">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/portrait_circle_carl_fredrik.png" alt="">
					<figcaption>Carl-Fredrik Risbecker, VD<br>070-888 44 55<br>cfr@cloudnine.se</figcaption>
				</figure>
				<figure class="portrait">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/portrait_circle_carl_fredrik.png" alt="">
					<figcaption>Carl-Fredrik Risbecker, VD<br>070-888 44 55<br>cfr@cloudnine.se</figcaption>
				</figure>
				<figure class="portrait">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/portrait_circle_carl_fredrik.png" alt="">
					<figcaption>Carl-Fredrik Risbecker, VD<br>070-888 44 55<br>cfr@cloudnine.se</figcaption>
				</figure>
				<figure class="portrait">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/portrait_circle_carl_fredrik.png" alt="">
					<figcaption>Carl-Fredrik Risbecker, VD<br>070-888 44 55<br>cfr@cloudnine.se</figcaption>
				</figure>
			</article>
		</div>
	</section>
<?php endwhile; ?>

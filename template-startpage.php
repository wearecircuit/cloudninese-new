<?php
/*
Template Name: Startpage Template
*/
?>

<?php while (have_posts()) : the_post(); ?>
	<?php get_template_part('templates/front', 'section-case'); ?>
	<?php get_template_part('templates/front', 'section-quote'); ?>
	<?php get_template_part('templates/front', 'section-news'); ?>

	<section class="event air">
		<div class="container eventbrite"></div>
	</section>

	<section class="about fullsize overlay">
		<div class="container">
			<article>
				<h2>Cloud Nine är din digitala partner som hittar affärsnytta genom strategi, design och teknisk utveckling.</h2>
				<a href="#" class="btn">Läs mer</a>
			</article>
		</div>
	</section>

	<section class="people fullsize overlay">
		<div class="container">

		</div>
	</section>

	<section class="quote air">
		<div class="container">
			<article>
				<blockquote>&rdquo;Sverker Johansson and his bot 'Lsjbot' have created 2.7 million Wikipedia articles - 8.5% of the entire collection. <a href="http://online.wsj.com/articles/for-this-author-10-000-wikipedia-articles-is-a-good-days-work-1405305001">http://online.wsj.com/articles/for-this-author-10-000-wikipedia-articles-is-a-good-days-work-1405305001</a>&hellip;&rdquo;</blockquote>
				<img src="<?php bloginfo('template_directory'); ?>/assets/img/image_twitter_example.png" alt="">
				<p>Jan Järfalk<br>22 juni 12:45 @cloud9sthlm</p>
			</article>
		</div>
	</section>

<?php endwhile; ?>
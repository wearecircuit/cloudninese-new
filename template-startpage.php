<?php
/*
Template Name: Startpage Template
*/
?>

<?php while (have_posts()) : the_post(); ?>
	<?php get_template_part('templates/front', 'section-case'); ?>
	<?php get_template_part('templates/front', 'section-quote'); ?>
	<?php get_template_part('templates/front', 'section-news'); ?>

	<section class="event">
		<div class="container">
			<figure></figure>
			<article>
				<span>Seminarie</span>
				<h2>Seminarier är egentligen rosa sedan tidigare + symbol</h2>
				<p>
					<a href="#" class="btn">Läs mer och anmäl dig</a>
					<a href="#">Se fler aktuella</a>
				</p>
			</article>
		</div>
	</section>

	<section class="about fullsize">
		<div class="container">
			<div class="center-content">
				<h2>Cloud Nine är din digitala partner som hittar affärsnytta genom strategi, design och teknisk utveckling.</h2>
				<a href="#" class="btn">Läs mer</a>
			</div>
		</div>
		<div class="overlay"></div>
	</section>

	<section class="people fullsize">
		<div class="container">
			<div class="center-content">Hepp!</div>
		</div>
		<div class="overlay"></div>
	</section>

	<section class="twitter air">
		<div class="container">
			<article class="center-content">
				<blockquote>&rdquo;Sverker Johansson and his bot 'Lsjbot' have created 2.7 million Wikipedia articles - 8.5% of the entire collection. <a href="http://online.wsj.com/articles/for-this-author-10-000-wikipedia-articles-is-a-good-days-work-1405305001">http://online.wsj.com/articles/for-this-author-10-000-wikipedia-articles-is-a-good-days-work-1405305001</a>&hellip;&rdquo;</blockquote>
				<img src="<?php bloginfo('template_directory'); ?>/assets/img/image_twitter_example.png" alt="">
				<p>Jan Järfalk<br>22 juni 12:45 @cloud9sthlm</p>
			</article>
		</div>
	</section>

	<section class="contact-form air">
		<div class="container">
			<div class="center-content">
				<p class="title2">&rdquo;We&rsquo;ll take you there.&rdquo;</p>
				<h2>Ska vi träffas och guide dig fram?</h2>
				<form></form>
				<a href="#" class="btn">Påbörja din resa</a>
			</div>
		</div>
	</section>

	<section class="career air">
		<div class="container">
			<div class="center-content">
				<h2>Wow har du kollat ända hit är du garanterat nyfiken nog för att bli en av oss.</h2>
				<p>Vi söker alltid efter nyfikna talanger. <a href="#">Se hit vettja!</a></p>
			</div>
		</div>
	</section>

<?php endwhile; ?>
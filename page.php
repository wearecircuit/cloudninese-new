<?php while (have_posts()) : the_post(); ?>
<section>
	<div class="container">
		<article>
		<?php get_template_part('templates/page', 'header'); ?>
		<?php get_template_part('templates/content', 'page'); ?>
		</article>
	</div>
</section>
<?php endwhile; ?>

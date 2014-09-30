<footer class="content-info" role="contentinfo">

	<section class="career">
		<div class="container">
			<article>
				<h2>Wow <i class="cn cn-people"></i> har du kollat ända hit är du garanterat nyfiken nog för att bli en av oss.</h2>
				<p>Vi söker alltid efter nyfikna talanger. <a href="#">Se hit vettja!</a></p>
			</article>
		</div>
	</section>

	<section class="contact-form air">
		<div class="container">
			<article>
				<span class="title2">&rdquo;We&rsquo;ll take you there.&rdquo;</span>
				<h2>&mdash;<br>Ska vi träffas och guida dig fram?</h2>
				<?php if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 2 ); } ?>
			</article>
		</div>
	</section>
	<section class="shade"></section>

	<section class="social-media air">
		<div class="container">
			<p>
				<a href="https://twitter.com/c9stockholm" class="cn cn-twitter"></a>
				<a href="https://www.facebook.com/cloudninestockholm" class="cn cn-facebook"></a>
				<a href="#" class="cn cn-google"></a>
				<a href="https://www.linkedin.com/company/cloud-nine" class="cn cn-linkedin"></a>
				<span>
					<a href="mailto:info@cloudnine.se" class="cn cn-envelope"></a>
					<a href="http://blogg.cloudnine.se/" class="cn cn-news-circle"></a>
					<a href="http://www.mynewsdesk.com/se/tag/rss?geographic_areas=180&type_of_media=Pressrelease" class="cn cn-rss"></a>
				</span>
			</p>
		</div>
	</section>

</footer>

<?php wp_footer(); ?>

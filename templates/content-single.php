
  <?php while (have_posts()) : the_post(); ?>
<section>
  <div class="container">
    <article <?php post_class(); ?>>
      <?php $image = wp_get_attachment_url( get_post_thumbnail_id( $post_id ) );
      if( !empty($image) ): ?>
      <img src="<?php echo $image; ?>" alt="">
      <?php endif; ?>
      <header>
        <h1 class="entry-title"><?php the_title(); ?></h1>
        <?php get_template_part('templates/entry-meta'); ?>
      </header>
      <div class="entry-content">
        <?php the_content(); ?>
      </div>
      <footer>
        <?php wp_link_pages(array('before' => '<nav class="page-nav"><p>' . __('Pages:', 'roots'), 'after' => '</p></nav>')); ?>
      </footer>
      <?php // comments_template('/templates/comments.php'); ?>
    </article>
  </div>
</section>
  <?php endwhile; ?>
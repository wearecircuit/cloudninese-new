<?php
  while (have_posts()) : the_post();

  $img = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) );
  $cat = get_the_category( $post->ID )[0]->cat_name;

  if( $cat == 'case' ):
?>

<section class="case fullsize" <?php inline_css( $post->ID ); ?>>
  <div class="container">
    <article>
      <span class="title1"><?php echo $post->post_title; ?></span>
      <p><?php the_field('second_title', $post->ID); ?></p>
      <button class="cn cn-arrow-down"></button>
    </article>
  </div>
  <nav class="fullsize-nav">
    <a href class="nav-btn nav-left"></a>
    <a href class="nav-btn nav-right"></a>
  </nav>
</section>

<?php endif; ?>

<section class="<?php echo $cat; ?> article air">
  <div class="container">
    <article <?php post_class('article'); ?>>
      <?php if( $cat != 'case' ) echo "<img src='$img' alt=''>"; ?>
      <header>
        <h1 class="entry-title"><?php the_title(); ?></h1>
        <?php // get_template_part('templates/entry-meta'); ?>
      </header>
      <div class="entry-content">
        <?php the_content(); ?>
        <figure class="portrait">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/portrait_circle_carl_fredrik.png" alt="">
          <figcaption>Carl-Fredrik Risbecker<br>VD</figcaption>
        </figure>
      </div>
      <footer>
        <?php wp_link_pages(array('before' => '<nav class="page-nav"><p>' . __('Pages:', 'roots'), 'after' => '</p></nav>')); ?>
      </footer>
      <?php // comments_template('/templates/comments.php'); ?>
    </article>
  </div>
</section>

<?php endwhile; ?>

<hr>

<section class="air">
  <div class="container">
    <div class="row">
      <article class="col-xs-4" style="text-align:center;">Case 1</article>
      <article class="col-xs-4" style="text-align:center;">Case 2</article>
      <article class="col-xs-4" style="text-align:center;">Case 3</article>
    </div>
  </div>
</section>
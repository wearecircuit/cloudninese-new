<?php get_template_part('templates/head'); ?>
<body <?php body_class(); ?>>

  <?php
    do_action('get_header');
    get_template_part('templates/header');
  ?>

  <main class="main" role="main"><?php include roots_template_path(); ?></main>

  <?php get_template_part('templates/footer'); ?>

  <script src="//localhost:35729/livereload.js"></script>
  
</body>
</html>

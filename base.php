<?php get_template_part('templates/head'); ?>
<body <?php body_class(); ?>>

  <?php
    do_action('get_header');
    get_template_part('templates/header');
  ?>

  <main class="main" role="main"></main>

  <?php get_template_part('templates/footer'); ?>

</body>
</html>

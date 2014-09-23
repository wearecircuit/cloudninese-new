<?php $walker = new Menu_With_Description; ?>

<nav class="sitenav" role="navigation">
	<div>
  <?php
    if (has_nav_menu('primary_navigation')) :
      wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav', 'walker' => $walker));
    endif;
  ?>
	</div>
</nav>

<header class="banner">
	<div class="navbar-header">
		<a href="#" class="logo"><img src="<?php bloginfo('template_directory'); ?>/assets/img/logo.svg"></a>
		<a href="#" class="nav-btn nav-show"><img src="<?php bloginfo('template_directory'); ?>/assets/img/menu.svg"></a>
		<a href="#" class="nav-btn nav-hide"><img src="<?php bloginfo('template_directory'); ?>/assets/img/menu_close.svg"></a>
	</div>
</header>
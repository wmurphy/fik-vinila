<header class="container banner navbar-fixed-top" role="banner">
  <div class="row headercont">
    <div class="col-sm-12 language">
    <?php 
      if (has_nav_menu('language')) {
        wp_nav_menu(array('theme_location' => 'language', 'menu_class' => 'nav lang')); 
      }
    ?>
    </div>

    <div class="col-sm-3 col-xs-5">
       <a class="logoheader" href="<?php echo home_url('/') ?>" title="Vinila Fabrics" class="logovinila">
          <?php the_store_logo(null, array('class' => 'logo')); ?>
        </a>
    </div>

    <nav class="nav-main col-sm-7 col-xs-4" role="navigation">
      <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav'));
        endif;
        ?>
    </nav>

    <div class="bolsa col-sm-2 col-xs-3">
      <?php 
      if (has_nav_menu('bag')) {
        wp_nav_menu(array('theme_location' => 'bag', 'menu_class' => 'nav menu-bag')); 
      }
      ?> 
    </div>

</div>
</header>

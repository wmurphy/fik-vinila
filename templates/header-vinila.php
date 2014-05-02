<header class="banner" role="banner">
  <div class="row container headercont">
    <div class="col-lg-12">
      <div class="logoheader">
        <a href="<?php echo home_url('/') ?>" title="Vinila Fabrics" class="logovinila">
          <?php the_store_logo(null, array('class' => 'logo')); ?>
        </a>
      </div> 
      <div class="col-sm-3 pull-right language">
          <div class="idioma">
            <?php wp_nav_menu(array('theme_location' => 'language', 'menu_class' => 'nav lang')); ?>
          </div>

        </div>
    </div>
      </div>
    <div class="col-lg-12 menuprin">
      <div class="container">
      <div class="logomenu col-sm-2">
        <a href="/" title="Vinila Fabrics"><img src="/wp-content/themes/fik-vinila/assets/img/logomenu.png" alt="Logo Vinila" title="Logo Vinila"></a>
      </div>
      <nav class="nav-main col-sm-8" role="navigation">
        <?php
          if (has_nav_menu('primary_navigation')) :
            wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav nav-pills'));
          endif;
          ?>
      </nav>
      <div class="bolsa col-sm-2">
        <?php wp_nav_menu(array('theme_location' => 'bag', 'menu_class' => 'nav menu-bag')); ?> 
      </div>
    </div>
    </div>

</header>

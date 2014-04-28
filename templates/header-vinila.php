<header class="banner" role="banner">
  <div class="row container headercont">
    <div class="col-lg-12">
      <div class="logoheader">
        <a href="<?php echo home_url('/') ?>" title="Vinila Fabrics" class="logovinila"><img src="/wp-content/themes/fik-vinila/assets/img/logo.jpg"></a>
      </div> 
      <div class="col-sm-3 pull-right">
          <div class="idioma">
            <?php wp_nav_menu(array('theme_location' => 'language', 'menu_class' => 'nav lang')); ?>
          </div>
          <div class="bolsa">
            <?php wp_nav_menu(array('theme_location' => 'bag', 'menu_class' => 'nav menu-bag')); ?> 
          </div>
        </div>
    </div>
      </div>
    <div class="col-lg-12 menuprin">
      <nav class="nav-main container" role="navigation">
        <?php
          if (has_nav_menu('primary_navigation')) :
            wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav nav-pills'));
          endif;
        ?>
      </nav>
    </div>

</header>
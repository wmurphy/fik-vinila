<header class="banner" role="banner">
  <div class="row container headercont">
    <div class="col-lg-12">
     
      <div class="col-sm-3 pull-right language">
          <div class="idioma">
            <?php 
            if (has_nav_menu('language')) {
              wp_nav_menu(array('theme_location' => 'language', 'menu_class' => 'nav lang')); 
            }
            ?>
          </div>

        </div>
    </div>
      </div>
    <div class="col-lg-12 menuprin">
      <div class="container">
      <div class="col-sm-3">
       <a class="logoheader" href="<?php echo home_url('/') ?>" title="Vinila Fabrics" class="logovinila">
          <?php the_store_logo(null, array('class' => 'logo')); ?>
        </a>
      </div>
      <nav class="nav-main col-sm-7" role="navigation">
        <?php
          if (has_nav_menu('primary_navigation')) :
            wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav'));
          endif;
          ?>
      </nav>
      <div class="bolsa col-sm-2">
        <?php 
        if (has_nav_menu('bag')) {
          wp_nav_menu(array('theme_location' => 'bag', 'menu_class' => 'nav menu-bag')); 
        }
        ?> 
      </div>
    </div>
    </div>

</header>

<?php get_template_part('templates/head'); ?>
<body <?php body_class(); ?>>

  <!--[if lt IE 9]>
    <div class="alert alert-warning">
      <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'roots'); ?>
    </div>
  <![endif]-->

  <?php
    do_action('get_header', $header_template_name);
  ?>
<?php if(is_front_page()):?>
<?php while (have_posts()) : the_post(); ?>
  <?php the_content(); ?>
<?php endwhile; ?>


<?php else:?>
    <div class="wrap container" role="document">
      <div class="content row">
        <main class="main <?php echo roots_main_class(); ?>" role="main">

        <?php include roots_template_path(); ?>
      </main><!-- /.main -->
      <?php if (roots_display_sidebar()) : ?>
        <aside class="sidebar <?php echo roots_sidebar_class(); ?>" role="complementary">
          <?php include roots_sidebar_path(); ?>
        </aside><!-- /.sidebar -->
      <?php endif; ?>
    </div><!-- /.content -->
  </div><!-- /.wrap -->

<?php endif;?>

  <?php
    do_action('get_footer', $footer_template_name);
  ?>

</body>
</html>

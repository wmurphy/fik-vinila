<div class="gallery">
	<img src="/wp-content/themes/fik-vinila/assets/img/imgslider.jpg">
</div>
<article class="homecontent container">
	<section class="col-lg-6 element izq no-padding-left">
		<a href="#">Vinila World</a>
	</section>	
	<section class="col-lg-6 element dcha no-padding-right">
		<a href="#">Oferta de la semana</a>
	</section>
</article>
<?php while (have_posts()) : the_post(); ?>
  <!--<?php the_content(); ?>
  <?php wp_link_pages(array('before' => '<nav class="pagination">', 'after' => '</nav>')); ?>-->
<?php endwhile; ?>

<footer class="content-info" role="contentinfo">
	<div class="container">
		<aside class="f-social col-md-4 pull-right">
			<?php dynamic_sidebar('sidebar-news'); ?>
			<div class="social">     
				<p>Síguenos en:</p> 
			  	<?php
		        	if (has_nav_menu('social-menu')) :
		          		wp_nav_menu(array('theme_location' => 'social-menu', 'menu_class' => 'nav social pull-left'));
		        	endif;
		      	?>
		      	<div class="pull-right partelogo"><a href="http://fikstores.com/" title="tiendas online"><img class="replace-2x fikstores-badge" width="105" height="50" alt="Better ecommerce" src="/wp-content/themes/fik-vinila/assets/img/logofik.png"></a></div>
	    	</div>
		</aside>
		<div class="col-md-8">
			<div class="menu-footer">
	        	<?php wp_nav_menu(array('theme_location' => 'footer-vinila', 'menu_class' => 'nav f-menu')); ?>
	    	</div>
	    	<div class="logofooter pull-left"><img src="/wp-content/themes/fik-vinila/assets/img/logosmall.png"></div>
		    <p class="col-sm-offset-9 copyr">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?> </p>
		</div>
		
	</div>
</footer>

<?php wp_footer(); ?>

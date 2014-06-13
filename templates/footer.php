<footer class="content-info" role="contentinfo">
    <hr>
	<div class="container">
		<div class="col-md-6">
			<div class="menu-footer">
				<?php
				if (has_nav_menu('footer-vinila')) {
	        	 wp_nav_menu(array('theme_location' => 'footer-vinila', 'menu_class' => 'nav f-menu')); 
	        	}
	        	?>
	    	</div>
		</div>
		
		<aside class="f-social col-md-6 pull-right">
            <div class="col-md-6">
			<?php dynamic_sidebar('sidebar-news'); ?>
            </div>
			<div class="social col-md-6 text-right">     
			  	<?php
		        	if (has_nav_menu('social-menu')) :
		          		wp_nav_menu(array('theme_location' => 'social-menu', 'menu_class' => 'nav social pull-right'));
		        	endif;
		      	?>
	    	</div>
		</aside>
	</div>
</footer>
<div class="container">
    <div class="col-md-12 text-left">
        <a href="http://fikstores.com/" title="tiendas online"><img class="replace-2x fikstores-badge" width="105" height="50" alt="Better ecommerce" src="/wp-content/themes/fik-vinila/assets/img/logofik.png"></a>
    </div>
</div>
<?php wp_footer(); ?>

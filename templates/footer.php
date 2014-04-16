<footer class="content-info" role="contentinfo">
	<div class="container">
		<div class="col-sm-8">
			<div class="menu-footer">
	        	<?php wp_nav_menu(array('theme_location' => 'footer-vinila', 'menu_class' => 'nav f-menu')); ?>
	    	</div>
		    <p class="col-sm-offset-9 copyr">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></p>
		</div>
		<aside class="f-social col-sm-4">
			<section class="widget ns_widget_mailchimp-2 widget_ns_mailchimp">
				<form action="/" id="ns_widget_mailchimp_form-2" method="post">
					<input type="hidden" name="ns_mc_number" value="2" />
					<label for="ns_widget_mailchimp-email-2"></label>
					<input id="ns_widget_mailchimp-email-2" type="text" name="ns_widget_mailchimp_email" />
					<input class="button" type="submit" name="" value="Suscríbete" />
				</form>
			</section>
			<div class="social">     
				<p>Síguenos en:</p> 
			  	<?php
		        	if (has_nav_menu('social-menu')) :
		          		wp_nav_menu(array('theme_location' => 'social-menu', 'menu_class' => 'nav social'));
		        	endif;
		      	?>
	    	</div>
		</aside>
	</div>
</footer>

<?php wp_footer(); ?>

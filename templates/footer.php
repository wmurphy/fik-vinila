<footer class="content-info" role="contentinfo">
	<div class="container">
		<aside class="f-social col-md-4 pull-right">
			<?php dynamic_sidebar('sidebar-news'); ?>
			<!--<section class="widget ns_widget_mailchimp-2 widget_ns_mailchimp">
				<form action="/" id="ns_widget_mailchimp_form-2" method="post">
					<input type="hidden" name="ns_mc_number" value="2" />
					<label for="ns_widget_mailchimp-email-2"></label>
					<input id="ns_widget_mailchimp-email-2" type="text" name="ns_widget_mailchimp_email" />
					<input class="button" type="submit" name="" value="Suscríbete" />
				</form>
			</section>-->
			<div class="social">     
				<p>Síguenos en:</p> 
			  	<?php
		        	if (has_nav_menu('social-menu')) :
		          		wp_nav_menu(array('theme_location' => 'social-menu', 'menu_class' => 'nav social pull-left'));
		        	endif;
		      	?>
		      	<div class="pull-right partelogo"><img class="replace-2x fikstores-badge" width="105" height="50" alt="Better ecommerce" src="/wp-content/themes/fik-vinila/assets/img/logofik.png"></div>
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

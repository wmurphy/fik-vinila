<footer class="content-info" role="contentinfo">
	<div class="container">
    	<div class="col-md-7">
				<?php
				if (has_nav_menu('footer-vinila')) {
	        	 wp_nav_menu(array('theme_location' => 'footer-vinila', 'menu_class' => 'nav-footer')); 
	        	}
	        	?>
	    </div>
		
           <div class="col-md-3">  
			  	<?php
		        	if (has_nav_menu('social-menu')) :
		          		wp_nav_menu(array('theme_location' => 'social-menu', 'menu_class' => 'social'));
		        	endif;
		      	?>
        
                </div>
          
          <div class="col-md-2">
                
                 <div class="fiklogo">
        <a href="http://fikstores.com/" title="tiendas online"><img class="replace-2x fikstores-badge" width="100" height="10" alt="Powered by fikstores" src="./wp-content/uploads/img/logofik_new.png"></a>
    </div>       
          </div>   
	</div>
    
          
    
</footer>

<?php wp_footer(); ?>

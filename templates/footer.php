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
        <a href="http://fikstores.com/" title="tiendas online"><img class="replace-2x fikstores-badge" width="100" height="10" alt="Powered by fikstores" src="<?php echo get_template_directory_uri(); ?>/assets/img/logofik_new.png"></a>
    </div>       
          </div>   
	</div>
    
          
    
</footer>

<?php
if (is_front_page()){
	?>
<div class="popup">
<div id="overlay"></div>
<div id="popup">
	<div class="content">
    <img src="<?php echo get_template_directory_uri() . '/assets/img/' ?>logo_HOME.png"/>
	<h1>¡Vinila Fabrics te lleva el probador a casa!</h1>
    <p>Recuerda que <span>las devoluciones y cambios son gratuitos*</span>, si tienes cualquier problema con la talla o el modelo, te lo cambiamos en 24h sin ningún coste adicional para ti.</p>
    <p>100% Vinila Fabrics®<br/>100% hecho en España para llenar tu mundo de color</p>
	<a class="closepopup">Ir a la Tienda</a>
    </div>
    </div>
</div>
<script>
jQuery('.slider').glide({
    afterTransition: function() {
        var currentSlide = this.currentSlide;
    }
}).data('api_glide');
</script>
	<?php
}
?>


<?php wp_footer(); ?>

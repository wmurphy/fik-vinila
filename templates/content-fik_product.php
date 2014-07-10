	<?php if ( is_tax('store-section') || is_post_type_archive( 'fik_product' ) || is_home() || is_page_template( 'page-templates/store-front-page.php' ) || is_search() ) : // Only display product excerpt for home, archive page, store section and search ?>
        
        <li class="col-sm-4 producto <?php echo get_theme_mod( 'fik_product_thumb_type', 'fik2012-thumb-sq' ); ?>">
            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                <?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'vinlia-square'); } ?>           
                <div class="product-description row">
                    <div class="col-xs-6 pull-right">
                        <h2 class="product-title"><?php the_title(); ?></h2>
                        <div class="product-price"><?php the_fik_price(); ?><?php the_fik_previous_price(); ?></div>
                    </div>
                    <div class="col-xs-6">
                        <div class="product-sku"><?php print fik_product_sku(); ?></div>
                        <div class="product-tags"><?php echo strtolower(get_the_term_list($post->ID, 'store-section', '', ', ', '' )); ?></div>
                    </div>
                </div>
            </a>
        </li>

        <?php else: ?>

  <article itemscope itemtype="http://schema.org/Product" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    
<div class="container">
        <div class="product-gallery col-sm-7">
        <?php if(has_post_thumbnail()) : ?>
            <div class="product-image-frame">
                <?php
                    // We print the post thumbnail (if it exists) with a maximum size of 620px x 9999px:
                    the_post_thumbnail('post-thumbnail',array('class'=>'img-responsive', 'id'=>'prod-img', 'data-zoom-image' => array_shift(array_values(wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'large' ))),'itemprop' => "image"));
                ?>
            </div>
            <?php the_product_gallery_thumbnails('300-thumbnail'); ?>
        <?php endif; ?>
        
        </div>
        
        <div class="price-and-purchase col-sm-5">
            <div class="col-sm-12 product-msg"><?php echo fik_messages(); ?></div>
            <header class="col-sm-6">
                <h1 itemprop="name" class="entry-title product-title"><?php the_title(); ?></h1>
            </header>
            <div class="col-sm-6">
                <?php the_fik_price(); ?>
                <?php the_fik_previous_price(); ?>
            </div>
            <div class="col-xs-6 ref">
                <div class="product-sku"><?php print fik_product_sku(); ?></div>
                <div class="product-tags"><?php echo strtolower(get_the_term_list($post->ID, 'store-section', '', ', ', '' )); ?></div>
            </div>

            <div class="col-xs-6 guide"><a href="/guia-de-tallas/" class="sizesinformation"><?php _e('Guía de tallas', 'fik-bettina') ?></a></div>
            

            <div class="sizesandshippingsmodal">
            <div class="sizes col-xs-12 panel panel-default">
                <div class="panel-body">
                    <button type="button" class="close">&times;</button>
                    <?php
                        $shipping_page = get_page_by_title('Guía de tallas');
                        echo $shipping_page->post_content;
                    ?>
                </div>
            </div>
            </div>


            <div class="col-xs-12">
            <?php the_fik_add_to_cart_button(); ?>
            </div>
            <?php if ( is_active_sidebar( 'sidebar-4' ) ) : ?>
            <div id="product-secondary" class="widget-area col-xs-12" role="complementary">
                <?php dynamic_sidebar( 'sidebar-4' ); ?>
            </div><!-- #secondary -->
            <?php endif; ?>
            <div itemprop="description" class="text-left entry-content col-xs-12">
            <?php echo $post->post_content; ?>
            </div><!-- .entry-content -->
            <div class="col-xs-12">
            <?php dynamic_sidebar( 'sidebar-textproduct' ); ?>
            </div>
        </div>
                

<div>
    <footer>
      <?php wp_link_pages(array('before' => '<nav class="page-nav"><p>' . __('Pages:', 'roots'), 'after' => '</p></nav>')); ?>
    </footer>
    <?php comments_template('/templates/comments.php'); ?>
  </article>

        <?php endif; ?>


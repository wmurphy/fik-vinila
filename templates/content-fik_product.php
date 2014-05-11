	<?php if ( is_tax('store-section') || is_post_type_archive( 'fik_product' ) || is_home() || is_page_template( 'page-templates/store-front-page.php' ) || is_search() ) : // Only display product excerpt for home, archive page, store section and search ?>
        
        <li class="col-sm-4 producto <?php echo get_theme_mod( 'fik_product_thumb_type', 'fik2012-thumb-sq' ); ?>">
            <a href="<?php the_permalink(); ?>" class="productthumb" title="<?php the_title(); ?>">
                <?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'vinlia-square'); } ?>           
                <div class="product-description">
                    <div class="col-xs-6 pull-right">
                        <h2 class="product-title"><?php the_title(); ?></h2>
                        <div class="product-price"><?php the_fik_price(); ?></div>
                    </div>
                    <div class="col-xs-6">
                        <div class="product-sku"><?php print fik_product_sku(); ?></div>
                        <div class="product-tags"><?php the_tags(''); ?></div>
                    </div>
                </div>
            </a>
        </li>

        <?php else: ?>

  <article itemscope itemtype="http://schema.org/Product" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    
<div class="container">
        <div class="product-gallery col-md-8">
        <?php if(has_post_thumbnail()) : ?>
            <div class="product-image-frame">
                <?php
                    // We print the post thumbnail (if it exists) with a maximum size of 620px x 9999px:
                    the_post_thumbnail('post-thumbnail',array('class'=>'img-responsive', 'id'=>'prod-img', 'data-zoom-image' => array_shift(array_values(wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'large' ))),'itemprop' => "image"));
                ?>
            </div>
            <?php the_product_gallery_thumbnails('150-thumbnail', array('class'=>'img-responsive'), 'full'); ?>
        <?php endif; ?>
        <h3>Te puede interesar</h3>
        <hr>
        <?php dynamic_sidebar( 'sidebar-textproduct' ); ?>
        </div>
        
        <div class="price-and-purchase col-md-4 no-padding-left">
            <div class="msgproduct"><?php echo fik_messages(); ?></div>
            <header>
                <h1 itemprop="name" class="entry-title product-title"><?php the_title(); ?></h1>
            </header>
            <?php the_fik_price(); ?>
            <?php the_fik_add_to_cart_button(); ?>
            
            <?php if ( is_active_sidebar( 'sidebar-4' ) ) : ?>
            <div id="product-secondary" class="widget-area" role="complementary">
                <?php dynamic_sidebar( 'sidebar-4' ); ?>
            </div><!-- #secondary -->
            <?php endif; ?>
            <div itemprop="description" class="entry-content">
            <?php echo $post->post_content; ?>
            </div><!-- .entry-content -->
        </div>
                

<div>
    <footer>
      <?php wp_link_pages(array('before' => '<nav class="page-nav"><p>' . __('Pages:', 'roots'), 'after' => '</p></nav>')); ?>
    </footer>
    <?php comments_template('/templates/comments.php'); ?>
  </article>

        <?php endif; ?>


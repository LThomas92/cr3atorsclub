<?php get_header(); ?>

<div class="content">
    <div class="c-page-shop">
        <div class="container-margins">
            <div class="c-page-shop__featured-products-section">
            <?php $featured_products = get_field('featured_products');
            if( $featured_products ): ?>
                <ul class="c-page-shop__featured-products">
                    <?php $i = 0; ?>
                <?php foreach( $featured_products as $featured_product ): 
                    $permalink = get_permalink( $featured_product->ID );
                    $title = get_the_title( $featured_product->ID );
                    $image = get_the_post_thumbnail_url($featured_product->ID);
                    ?>
                    <?php if($i == 0) {?>
                    <li class="c-page-shop__big-featured-product" key="<?php echo $i;?>">
                        <figure>
                            <img src="<?php echo $image; ?>" alt="">
                        </figure>
                        <h4><?php echo $title; ?></h4>
                    </li>
                    <?php } else { ?>
                        <li class="c-page-shop__featured-product" key="<?php echo $i;?>">
                        <figure>
                            <img src="<?php echo $image; ?>" alt="">
                        </figure>
                        <h4><?php echo $title; ?></h4>
                    </li>
                    <?php } ?>
                    <?php $i++; ?>
                <?php endforeach; ?>
                </ul>
            <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
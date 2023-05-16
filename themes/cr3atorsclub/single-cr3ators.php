<?php get_header(); ?>

<div class="content">
    <div class="c-single-cr3ators">
        <div class="container-margins">
            <div class="c-single-cr3ators__title-img">
                <div class="c-single-cr3ators__title-section">
                    <h1><?php the_title(); ?></h1>
                    <p><?php echo get_the_excerpt(); ?></p>
                </div>
                <figure class="c-single-cr3ators__featured-img">
                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
                </figure>
            </div> <!-- TOP SECTION -->

            <div class="c-single-cr3ators__main-content">
                <?php the_content(); ?>
            </div> <!-- MAIN CONTENT -->
        </div>
    </div>
</div>

<?php get_footer(); ?>
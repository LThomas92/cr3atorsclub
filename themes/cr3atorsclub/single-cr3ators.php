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

            <div class="c-single-cr3ators__social">
                <?php $followOn = get_field('follow_on'); ?>
                <div class="c-single-cr3ators__social-section">

                <p class="c-single-cr3ators__follow-on"><?php echo $followOn; ?>:</p>
                <?php $socialMediaIcons = get_field('social_media_items'); ?>
                <?php if( have_rows('social_media_items') ): ?>
                    <ul class="c-single-cr3ators__sm-items">
                      <?php while( have_rows('social_media_items') ) : the_row();

                        $smIcon = get_sub_field('social_media_icon'); 
                        $smLink = get_sub_field('social_media_link');
                        ?>
                        <li class="c-single-cr3ators__sm-item">
                            <a target="_blank" href="<?php echo $smLink; ?>">
                            <img src="<?php echo $smIcon['url']; ?>" alt="<?php echo $smIcon['alt']; ?>">
                            </a>
                        </li>

                    <?php
                    endwhile; ?>
                    </ul>

                <?php else :
                endif; ?>
                </div>

            </div>

            <div class="c-single-cr3ators__main-content">
                <?php the_content(); ?>
            </div> <!-- MAIN CONTENT -->
        </div>
    </div>
</div>

<?php get_footer(); ?>
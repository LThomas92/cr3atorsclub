<?php get_header(); ?>

<div class="content">
    <div class="container-margins">
        <div class="c-login">
        <div class="c-login__main-content">
            <?php the_content(); ?>
        </div>
        <figure class="c-login__featured-img">
            <img src="<?php echo get_the_post_thumbnail(); ?>" alt="">
        </figure>
        </div>
    </div>
</div>

<?php get_footer(); ?>
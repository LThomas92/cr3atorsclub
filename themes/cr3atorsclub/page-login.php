<?php get_header(); ?>

<div class="content">
    <div class="container-margins">
        <div class="c-login">
          <img title="Cr3ators Club Logo" class="c-login__logo" src="<?php echo get_template_directory_uri(); ?>/img/cc-logo.png" alt="Cr3ators Club Logo"/>
        <div class="c-login__main-content">
            <?php the_content(); ?>
        </div>
        <figure class="c-login__featured-img">
            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
        </figure>
        </div>
    </div>
</div>

<?php get_footer(); ?>
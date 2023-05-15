<?php get_header(); ?>

<div class="content">

  <section class="c-featured-videos">
    <div class="container-margins">

  <?php if( have_rows('featured_videos') ): ?>

    <ul class="c-featured-videos__list">
    <?php while( have_rows('featured_videos') ) : the_row(); ?>

        <?php $thumbnail = get_sub_field('thumbnail'); 
              $title = get_sub_field('title');
              $link = get_sub_field('link');
              $modal_id = 'modal-' . uniqid();     
              $video_url = get_sub_field('video_modal');  
        ?>
        <li class="c-featured-videos__list-item">
        <a href="#" class="modal-trigger" data-target="<?php echo $modal_id; ?>">
          <figure class="c-featured-videos__list-item-img">
            <img src="<?php echo $thumbnail['url']; ?>" alt="<?php echo $thumbnail['alt']; ?>">
          </figure>
          </a>
          <h1 class="c-featured-videos__list-item-title"><?php echo $title; ?></h1>

          <div id="<?php echo $modal_id; ?>" class="c-featured-videos__modal">
    <div class="c-featured-videos__modal-content">
      <?php echo $video_url; ?>
    </div>
  </div>

        </li>
    <?php endwhile; ?>
  </ul>

<?php else :
    // Do something...
endif; ?>
</div>

  </section>

  <section class="c-featured-creators gutenberg-styles">
    <?php $cta = get_field('cta'); ?>
    <div class="container-margins">

    <div class="c-featured-creators__heading">
      <p class="c-featured-creators__title">Featured Cr3ators</p>
      <a class="c-featured-creators__cta" href="<?php echo $cta['url']; ?>"><?php echo $cta['title']; ?></a>
    </div>

    <?php $featured_creators = get_field('featured_creators');
    if( $featured_creators ): ?>
    <ul class="featured-creators__list">
    <?php foreach( $featured_creators as $featured_creator ): 
        $permalink = get_permalink( $featured_creator->ID );
        $title = get_the_title( $featured_creator->ID );
        $image = get_the_post_thumbnail_url($featured_creator->ID);
        $desc = get_the_excerpt($featured_creator->ID);
        ?>
        <li class="featured-creator__list-item">
            <a href="<?php echo $permalink; ?>">
            <figure class="featured-creator__list-item-image">
              <img src="<?php echo $image; ?>" alt="">
            </figure>
            <h4 class="featured-creator__list-item-title"><?php echo $title; ?></h4>
            <p class="featured-creator__list-item-desc"><?php echo $desc; ?></p>
            </a>
        </li>
    <?php endforeach; ?>
    </ul>
<?php endif; ?>
    </div>
  </section>

</div>

<?php get_footer(); ?>
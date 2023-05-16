<?php get_header(); ?>

<section class="content">
  <div class="c-podcast-page">
    <?php $headerImg = get_field('header_image');
          $releaseText = get_field('release_text');
          $releaseCTA = get_field('release_cta');
    ?>
      <div class="c-podcast-page__header">
        <img src="<?php echo $headerImg['url']; ?>" alt="<?php echo $headerImg['alt']; ?>">
      </div>

      <div class="c-podcast-page__release-header">
      <div class="c-podcast-page__release-text">
        <img src="<?php echo $releaseText['url']; ?>" alt="<?php echo $releaseText['alt']; ?>">
      </div>
      <a class="c-podcast-page__release-cta" href="<?php echo $releaseCTA['url']; ?>"><?php echo $releaseCTA['title']; ?></a>
      </div>

  <div class="container-margins">
  <?php $args = array(
    'post_type' => 'podcasts',
    'posts_per_page' => 6,
    'publish_date' => 'ASC'
);
$the_query = new WP_Query( $args ); ?>

<?php $podcastGuest = get_field('podcast_guest'); 
      $podcastTime = get_field('podcast_total_time');
?>

<?php if ( $the_query->have_posts() ) : ?>
    <ul class="c-podcast-page__list">
    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
      <?php $podcastGuest = get_field('podcast_guest', $post->ID); 
            $podcastTime = get_field('podcast_total_time', $post->ID);
      ?>
        <li class="c-podcast-page__list-item">
          <a class="c-podcast-page__list-item-cta" href="<?php the_permalink(); ?>">
          <figure class="c-podcast-page__list-item-image">
          <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
          </figure>
          <div class="c-podcast-page__list-item-time"><?php echo $podcastTime; ?></div>
          <h4 class="c-podcast-page__list-item-title"><?php the_title(); ?></h4>
          <p class="c-podcast-page__list-item-guest"><?php echo $podcastGuest; ?></p>
          </a>
        </li>
    <?php endwhile; ?>
    </ul>

    <?php wp_reset_postdata(); ?>

<?php endif; ?>

  </div>
  </div>
</section> 

<?php get_footer(); ?>
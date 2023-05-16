<?php get_header(); ?>

<div class="content">
  
  <section class="c-featured-cr3ators">
    <div class="container-margins">
      <h2 class="c-featured-cr3ators__title"></h2> 

      <?php $args = array(
        'post_type' => 'cr3ators',
        'posts_per_page' => -1
        );

      $cr3atorsQuery = new WP_Query( $args ); ?>

      <?php if ( $cr3atorsQuery->have_posts() ) : ?>
        <ul class="c-featured-cr3ators__list">
        <?php while ( $cr3atorsQuery->have_posts() ) : $cr3atorsQuery->the_post(); ?>
            <li class="c-featured-cr3ators__list-item">
              <a href="<?php the_permalink(); ?>">
              <figure class="c-featured-cr3ators__thumbnail">
                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
              </figure>
              <h2 class="c-featured-cr3ators__list-item-title"><?php the_title(); ?></h2>
              <p class="c-featured-cr3ators__list-item-desc"><?php echo get_the_excerpt(); ?></p>
              </a>
            </li>
        <?php endwhile; ?>
      </ul>

        <?php wp_reset_postdata(); ?>

      <?php endif; ?>


    </div>
  </section>


</div>

<?php get_footer(); ?>
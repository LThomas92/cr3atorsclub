<?php get_header(); ?>

<div class="content">
    <div class="c-about-page">
      <div class="container-margins">
        <h2 class="c-about-page__title">Our <span>Story</span></h2>
        <div class="c-about-page__our-story">
          <div class="c-about-page__our-story-content">
              <?php echo get_field('our_story_content'); ?>
          </div>
          <div class="c-about-page__our-story-images">
          <?php if( have_rows('our_story_images') ): ?>
          
          <ul class="c-about-page__our-story-images-list">
          <?php while( have_rows('our_story_images') ) : the_row(); ?>

          <?php $image = get_sub_field('image'); ?>
          <li class="c-about-page__our-story-images-list-item">
            <figure>
              <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
            </figure>
          </li>

      <?php endwhile; ?>
      </ul>

  <?php else :
      // Do something...
  endif;
  ?>
          </div>
      </div>

    <h2 class="c-about-page__meet-the-team-title">Meet <span>the Team</span></h2>

    <?php if( have_rows('team_members') ): ?>

    <ul class="c-about-page__team-members">
    <?php while( have_rows('team_members') ) : the_row();

        $image = get_sub_field('image');
        $title = get_sub_field('title');
        $name = get_sub_field('name');
        ?>
      <li class="c-about-page__team-member">
        <figure>
          <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
        </figure>
        <h4 class="c-about-page__team-member-name"><?php echo $name; ?></h4>
        <p class="c-about-page__team-member-title"><?php echo $title; ?></p>
      </li>
    
      <?php endwhile; ?>
    </ul>

<?php // No value.
else :
    // Do something...
endif; ?>

    </div>
  </div>
</div>

<?php get_footer(); ?>
<?php get_header(); 
    $podcastHeader = get_field('podcast_thumbnail');
    $podcastAudio = get_field('podcast_audio');
    $podcastGuest = get_field('podcast_guest');
    $podcastAbout = get_field('podcast_about');
    $podcastTranscript = get_field('podcast_transcript');
    $podcastCode = get_field('podcast_code');
?>

<div class="content">
    <div class="c-podcast">
    <div class="container-margins">
        <div style="background-image: url('<?php echo $podcastHeader['url']; ?>')" class="c-podcast__player">
            <div class="c-podcast__audio">
                <audio class="audio-player" controls>
                <source src="<?php echo $podcastAudio; ?>" type="audio/mpeg">
                Your browser does not support the audio tag.
                </audio> 
            </div>
        </div>

        <div class="c-podcast__author-title">
                <p class="c-podcast__guest"><?php echo $podcastGuest; ?></p>
                <h1 class="c-podcast__title">"<?php the_title(); ?>"</h1>
            </div>
        <ul class="c-podcast__about">
            <li>About This Podcast</li>
            <li>Transcript</li>
        </ul>
        <div class="c-podcast__about-podcast">
            <?php echo $podcastAbout; ?>
        </div>
        <div class="c-podcast__transcript">
            <?php echo $podcastTranscript; ?>
        </div>
        <div class="c-podcast__podcast-meta">
            <div class="c-podcast__listening-opts"><span>Also listen on: 
                <a target="_blank" href="">
                <img src="<?php echo get_template_directory_uri(); ?>/img/apple-podcast.png"/>
                </a>
                <a target="_blank" href="">
                <img src="<?php echo get_template_directory_uri(); ?>/img/spotify.png"/>
                </a>
        </span>
        </div>
        <a target="_blank" href="<?php echo $podcastVideoLink; ?>" class="c-podcast__podcast-video">Watch here: <img src="<?php echo get_template_directory_uri(); ?>/img/logo-yt.png"/></a>
        </div>

        <div class="c-podcast__share-podcast-info">
            <p>Share Podcast</p>
        </div>

    </div>
    </div> <!-- c-podcast -->
</div> <!-- content -->

<?php get_footer(); ?>
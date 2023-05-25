<?php get_header(); 
    $podcastHeader = get_field('podcast_thumbnail');
    $podcastAudio = get_field('podcast_player');
?>

<div class="content">
    <div class="c-podcast">
        <div style="background-image: url('<?php echo $podcastHeader['url']; ?>')" class="c-podcast__player">
            <div class="c-podcast__audio"><?php echo $podcastAudio; ?></div>
        </div>
    </div> <!-- c-podcast -->
</div> <!-- content -->

<?php get_footer(); ?>
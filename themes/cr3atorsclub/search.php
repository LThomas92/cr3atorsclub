<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package cr3atorsclub
 */

get_header();
?>

<main id="primary" class="site-main content search-results">
	<div class="container-margins">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title">
					<span>Search Results for: </span><?php echo get_search_query(); ?>
				</h1>
			</header><!-- .page-header -->

			<ul class="search-results__list">
				<?php while ( have_posts() ) : the_post(); ?>
					<li class="search-results__list-item">
						<a href="<?php the_permalink(); ?>">
							<?php $post_type = get_post_type(); ?>
							<?php if ( $post_type === 'cr3ators' ) : ?>
								<img src="<?php echo get_template_directory_uri(); ?>/img/user.svg" alt="">
							<?php elseif ( $post_type === 'podcasts' ) : ?>
								<img src="<?php echo get_template_directory_uri(); ?>/img/podcast.svg" alt="">
							<?php elseif ( $post_type === 'product' ) : ?>
								<img src="<?php echo get_template_directory_uri(); ?>/img/product.svg" alt="">
							<?php else : ?>
								<img src="<?php echo get_template_directory_uri(); ?>/img/page.svg" alt="">
							<?php endif; ?>
							<div class="search-results__content">
								<h4 class="search-results__title"><?php echo the_title(); ?></h4>
								<p class="search-results__desc"><?php echo wp_trim_words( get_the_content(), 20 ); ?></p>
							</div>
						</a>
					</li>
				<?php endwhile; ?>
			</ul>

		<?php endif; ?>

	</div>
</main><!-- #main -->

<?php get_footer(); ?>

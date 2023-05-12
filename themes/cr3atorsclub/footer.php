<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cr3atorsclub
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="site-footer__newsletter">
			<div class="site-footer__newsletter-section">
			<h4 class="site-footer__newsletter-title">Sign Up for Our Newsletter</h4>
			<p class="site-footer__newsletter-copy">Stay up to date with news, annoucements & products</p>
			</div>
			<button class="site-footer__newsletter-cta">Sign Up</button>
		</div>

		<div class="site-info">
		<img title="Cr3ators Club Logo" class="site-header__logo" src="<?php echo get_template_directory_uri(); ?>/img/cc-logo.png" alt="Cr3ators Club Logo"/>
		<nav>
		<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-2',
					'menu_id'        => 'footer-menu',
				)
			);
			?>
		</nav>
		</div><!-- .site-info -->

		<div class="site-footer__copyright">
			<p><?php echo get_field('copyright', 'option'); ?></p>

			<?php if( have_rows('social_media_icons', 'option') ): ?>

			<ul class="site-footer__sm-icons">
   			<?php while( have_rows('social_media_icons', 'option') ) : the_row(); ?>
			<?php $icon = get_sub_field('icon'); 
				  $link = get_sub_field('link');
			?>
        		<li class="site-footer__sm-icon">
					<a target="_blank" href="<?php echo $link; ?>">
						<img src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>">
					</a>
				</li>

		 <?php endwhile; ?> 
	</ul>
<?php 
else :
    // Do something...
endif; ?>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

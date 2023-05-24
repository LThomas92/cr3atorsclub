<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cr3atorsclub
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'cr3atorsclub' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
		<a href="<?php echo get_site_url(); ?>">
		<img title="Cr3ators Club Logo" class="site-header__logo" src="<?php echo get_template_directory_uri(); ?>/img/cc-logo.png" alt="Cr3ators Club Logo"/>
		</a>
		</div><!-- .site-branding -->


		<div class="site-header__nav">
		<nav id="site-navigation" class="main-navigation">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</nav><!-- #site-navigation -->

			<ul class="site-header__meta-info">
				<li class="site-header__login">
				<a href="<?php echo site_url() . '/login' ?>">Login</a>
				</li>
				<li class="site-header__cart">
				<a href="<?php echo site_url() . '/cart' ?> ">
				<?php echo file_get_contents( get_stylesheet_directory_uri() . '/img/cart.svg' ); ?>
				<span class="cart_items_num"><?php echo sprintf ( _n( '%d ', '%d ', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() );?></span>
				</a>
				</li>
				<li class="site-header__search">
				<?php echo file_get_contents( get_stylesheet_directory_uri() . '/img/search.svg' ); ?>
				</li>
			</ul>
		</div>

	</header><!-- #masthead -->

	<div class="overlay-menu">
<img class="close-icon" src="<?php echo get_template_directory_uri(); ?>/img/close.svg" alt="Close Icon"/>
	<div class="container-margins">
<div class="header-search-form">
    <form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
  <label>
      <input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search for something...', 'placeholder' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
  </label>
  <button type="submit" name="submit" value="submit"></button>
</form>
    </div> <!-- header search form -->
    </div> <!-- container margins -->
</div> <!-- overlay menu -->

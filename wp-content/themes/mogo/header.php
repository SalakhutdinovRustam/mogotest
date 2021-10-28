<?php

/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 * @package Beetroot
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>


	<header id="masthead" class="site-header navbar-static-top">


		<div id="site-header-menu" class="container-fluid ttm-stickable-header bg-menu site-header-menu">
			<div id="site-navigation" class="container site-navigation">
				<div class="row justify-content-between">


					<div class="site-branding col-3 col-sm-3 col-md-3 col-lg-2">
						<?php
						$logo = get_field('header_logo', 'option');


						?>
						<a class="home-link" href="<?php echo esc_url(home_url('/')); ?>" title="MoGo" rel="home">
							<img id="logo-img" src="<?php echo $logo; ?>" alt="<?php esc_url(bloginfo('name')); ?>">
						</a>


					</div><!-- site-branding end -->


					<?php
					wp_nav_menu(array(
						'theme_location'    => 'primary',
						'container'       => 'nav',
						'container_id'    => 'menu main-nav',
						'container_class' => 'menu has-submenu col-12 col-lg-8 d-none d-sm-none d-md-none d-lg-block',
						'menu_id'         => false,
						'items_wrap'      => '<ul class="dropdown sub-menu">%3$s</ul>',
						'menu_class'      => 'dropdown first navbar-nav',
						'depth'           => 4,
						'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
						/*'walker'          => new wp_bootstrap_navwalker()*/
					));
					?>

					<div class="col-xl-2 col-lg-2 col-3">
						<?php
						$cart = get_field('header_cart', 'option');
						$search = get_field('header_search', 'option');

						?>

						<div class="header__right">
							<ul class="header__right__widget">
								<li><a href="#"><span class="icon_search search-switch"><?php echo $search; ?></span></a></li>
								<li><a href="#"><span class="icon_bag_alt"><?php echo $cart; ?></span></a></li>
							</ul>
						</div>
					</div>


					<div class="ttm-menu-toggle col-2 col-sm-1 col-md-1 d-lg-none">
						<input type="checkbox" id="menu-toggle-form" />
						<label for="menu-toggle-form" class="ttm-menu-toggle-block">
							<span class="toggle-block toggle-blocks-1"></span>
							<span class="toggle-block toggle-blocks-2"></span>
							<span class="toggle-block toggle-blocks-3"></span>
						</label>
					</div>
				</div>

			</div>
		</div>
		</div>

	</header>


	<div id="content" class="site-content">
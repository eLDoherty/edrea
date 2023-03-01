<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="edrea-page" class="site-edrea">
	<header id="masthead" class="edrea-header">
		<div class="container">
			<div class="edrea-header__wrapper">
				<div class="site-branding">
					<?php the_custom_logo(); ?>
					<p class="site-description"><?php echo get_bloginfo( 'description', 'display' ); ?></p>
				</div>

				<nav id="site-navigation" class="main-navigation">
					<?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-1',
								'menu_id'        => 'primary-menu',
							)
						);
					?>
				</nav>

				<div class="site-search">
					<?php echo get_search_form(); ?>
				</div>
			</div>
		</div>
	</header>

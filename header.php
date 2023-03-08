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
					<?php  if( get_custom_logo() ) {
						the_custom_logo();
						} elseif ( is_front_page() && is_home() ) { ?>
							<h1 class="site-title">
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
							</h1>
							<?php $description = get_bloginfo( 'description', 'display' );
						} else { ?>
							<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
							<?php
							$description = get_bloginfo( 'description', 'display' );
						} 
					?>
				</div>

				<nav id="site-navigation" class="main-navigation">
					<?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-1',
								'menu_id'        => 'primary-menu',
								'walker'		=> new Edrea_Nav_Walker,
							)
						);
					?>
				</nav>
				<div class="edrea-mobile-navigation">
					<div class="mobile-search">
						<?php echo get_search_form(); ?>
					</div>
					<div class="close-mobile-menu">
						<img src="<?php echo esc_url( get_template_directory_uri() . '/public/assets/icons/close.svg' ); ?>" alt="Close button">
					</div>
					<nav id="mobile-navigation" class="edrea-mobile-navigation__holder">
						<?php
							wp_nav_menu(
								array(
									'theme_location' => 'menu-1',
									'menu_id'        => 'primary-menu',
									'walker'		=> new Edrea_Nav_Walker,
								)
							);
						?>
					</nav>
				</div>
				<div class="edrea-mobile-button">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/public/assets/icons/mobile.svg' ); ?>" alt="<?php echo get_bloginfo( 'name' ) . ' Mobile Icon'; ?>">
				</div>
				<div class="site-search">
					<?php echo get_search_form(); ?>
				</div>
			</div>
		</div>
	</header>

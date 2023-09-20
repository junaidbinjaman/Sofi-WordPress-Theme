<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Sofi
 */

?>
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

<!-- PRELOADER -->
<div id="preloader">
	<div class="loader_line"></div>
</div>
<!-- /PRELOADER -->
	
<!-- WRAPPER ALL -->
<div class="sofi_all_wrap" data-magic-cursor="show" data-color="brown"> 

	<!-- MAGIC CURSOR VALUES: "", hide -->
	<!-- COLOR VALUES: blue, green, brown, pink, orange, black, white, purple, sky, cadetBlue, crimson, olive, red -->
	
	<!-- SETTINGS -->
	<?php
	$sofi_cursor_customizer = get_option( 'sofi_options' )['sofi_cursor_customizer'];
	if ( $sofi_cursor_customizer ) :
		?>
	<div class="sofi_settings">
		<div class="icon">
			<img class="svg" src="<?php echo esc_url( get_template_directory_uri() ) . '/assets'; ?>/img/svg/setting.svg" alt="" />
			<a class="link" href="#"></a>
		</div>
		<div class="wrapper">
			<span class="title">Magic Cursor</span>
			<ul class="cursor">
				<li><a class="showme show" href="#"></a></li>
				<li><a class="hide" href="#"><img class="svg" src="<?php echo esc_url( get_template_directory_uri() ) . '/assets'; ?>/img/svg/arrow.svg" alt="" /></a></li>
			</ul>
		</div>
	</div>
	<?php endif; ?>
	<!-- /SETTINGS -->

	<!-- MODALBOX -->
	<div class="sofi_modalbox">
		<div class="box_inner">
			<div class="close">
				<a href="#"><img class="svg" src="<?php echo esc_url( get_template_directory_uri() ) . '/assets'; ?>/img/svg/cancel.svg" alt="" /></a>
			</div>
			<div class="description_wrap"></div>
		</div>
	</div>
	<!-- /MODALBOX -->
	
	<!-- TOPBAR -->
	<div class="sofi_topbar">
		<div class="topbar_inner">
			<div class="logo">
			<?php
			$is_logo_enable = get_option( 'sofi_options' )['sofi_site_logo'];
			if ( $is_logo_enable ) :
				the_custom_logo();
			endif;
			?>
			</div>
			<div class="menu">
				<div class="list">
					<?php
					wp_nav_menu(
						array(
							'theme_location'  => 'menu-1',
							'container'       => 'ul',
							'container-class' => 'anchor_nav',
							'before'          => '<li>',
							'after'           => '</li>',
						)
					);
					?>
				</div>
				<div class="trigger">
					<div class="hamburger hamburger--slider">
						<div class="hamburger-box">
							<div class="hamburger-inner"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /TOPBAR -->
	
	<!-- MOBILE MENU -->
	<div class="sofi_mobile_menu">
		<div class="mobile_menu_inner">
			<div class="mobile_in">
				<div class="logo">
				<?php
				if ( $is_logo_enable ) :
					the_custom_logo();
			endif;
				?>
				</div>
				<div class="trigger">
					<div class="hamburger hamburger--slider">
						<div class="hamburger-box">
							<div class="hamburger-inner"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="dropdown">
			<div class="dropdown_inner">
			<?php
				wp_nav_menu(
					array(
						'theme_location'  => 'menu-1',
						'container'       => 'ul',
						'container-class' => 'anchor_nav',
						'before'          => '<li>',
						'after'           => '</li>',
					)
				);
				?>
			</div>
		</div>
	</div>
	<!-- /MOBILE MENU -->

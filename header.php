<!DOCTYPE html> 
<html class="no-js" <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php echo esc_url( get_bloginfo( 'pingback_url' ) ); ?>">
	<?php endif; ?>
	
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php if ( get_theme_mod( 'theme-toggle', 'on' ) == 'on' ): ?>
	<script>
		document.body.classList.add(localStorage.getItem('theme') || 'light');
	</script>
<?php endif; ?>

<?php if ( function_exists( 'wp_body_open' ) ) { wp_body_open(); } ?>

<a class="skip-link screen-reader-text" href="#page"><?php _e( 'Skip to content', 'dashwall' ); ?></a>

<div class="page-wrapper">

	<header class="page-header nav-menu-dropdown-left">
	
		<?php echo dashwall_site_title(); ?>
		
		<?php if ( display_header_text() == true ): ?>
			<p class="site-description"><?php bloginfo( 'description' ); ?></p>
		<?php endif; ?>
		
		<?php if ( has_nav_menu('header') ): ?>
			<div id="wrap-nav-header" class="wrap-nav">
				<?php \Dashwall\Nav::nav_menu(array('theme_location'=>'header','menu_id' => 'nav-header','fallback_cb'=> false)); ?>
			</div>
		<?php endif; ?>
		
		<?php if ( has_nav_menu('mobile') ): ?>
			<div id="wrap-nav-mobile" class="wrap-nav">
				<?php \Dashwall\Nav::nav_menu(array('theme_location'=>'mobile','menu_id' => 'nav-mobile','fallback_cb'=> false)); ?>
			</div>
		<?php endif; ?>

	</header>
	
	<div class="page-sidebar">
		
		<?php if ( !is_single() ): ?>
			<?php dashwall_social_links() ; ?>
		<?php else: ?>
			<?php do_action( 'alx_ext_sharrre' ); ?>
		<?php endif; ?>
			
		<?php if ( get_theme_mod( 'theme-toggle', 'on' ) == 'on' ): ?>
			<button id="theme-toggle">
				<i class="fas fa-sun"></i>
				<i class="fas fa-moon"></i>
				<span id="theme-toggle-btn"></span>
			</button>
		<?php endif; ?>

	</div>

	<div class="page-inner" id="page">

		<?php if ( get_header_image() ) : ?>
			<div class="site-header">
				<a href="<?php echo esc_url( home_url('/') ); ?>" rel="home">
					<img class="site-image" src="<?php header_image(); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
				</a>
			</div>
		<?php endif; ?>
		
		<?php if ( is_single() ): ?>
			<?php get_template_part('inc/header-single'); ?>
		<?php endif; ?>
		
		<div class="page-inner-container">
			<div class="page-row">
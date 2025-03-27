<?php 
	$sidebar = dashwall_sidebar_primary();
	$layout = dashwall_layout_class();
	if ( $layout != 'col-1c'):
?>

<div class="page-col-sidebar<?php if ( !is_home() ): ?>-center<?php endif; ?>">

	<div class="sidebar-content">
	
		<?php if ( is_home() ): ?>
			<?php get_template_part('inc/profile'); ?>
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'post-nav', 'sidebar' ) == 'sidebar' ) { get_template_part('inc/post-nav'); } ?>
		
		<?php if ( !is_home() && !is_search() ): ?>
			<?php if ( get_theme_mod( 'sidebar-search', 'on' ) =='on' ) { get_template_part('inc/sidebar-search'); } ?>
		<?php endif; ?>

		<?php dynamic_sidebar($sidebar); ?>
	</div>
</div>

<?php endif; ?>
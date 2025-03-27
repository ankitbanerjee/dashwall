<?php get_header(); ?>

<div class="page-col-featured">
	<?php get_template_part('inc/featured'); ?>
	<?php get_template_part('inc/highlights'); ?>
	<?php get_template_part('inc/recent-comments'); ?>
</div>

<div class="page-col">
	
	<?php if ( get_theme_mod( 'card-search', 'on' ) =='on' ): ?>
		<div class="page-card page-card-latest stickywrap">
			<h3 class="stickywrap-heading"><?php esc_html_e('Latest','dashwall'); ?></h3>
			<?php get_search_form(); ?>
		</div>
	<?php endif; ?>

	<?php if ( have_posts() ) : ?>
		
		<div class="page-grid">
			<?php while ( have_posts() ): the_post(); ?>
				<?php get_template_part('content'); ?>
			<?php endwhile; ?>
		</div>
		
	<?php endif; ?>

	<?php get_template_part('inc/pagination'); ?>

</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
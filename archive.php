<?php get_header(); ?>

<div class="page-col-center">
	
	<?php get_template_part('inc/page-title'); ?>

	<?php if ( have_posts() ) : ?>
		
		<div class="page-grid-center">
			<?php while ( have_posts() ): the_post(); ?>
				<?php get_template_part('content'); ?>
			<?php endwhile; ?>
		</div>
		
	<?php endif; ?>

	<?php get_template_part('inc/pagination'); ?>

</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
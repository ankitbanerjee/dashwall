<?php $related = dashwall_related_posts(); ?>

<?php if ( $related->have_posts() ): ?>

<div class="page-card stickywrap">
	<h3 class="stickywrap-heading">
		<?php esc_html_e('You may also like','dashwall'); ?>
	</h3>
</div>	

<div class="related-posts">
	
	<?php while ( $related->have_posts() ) : $related->the_post(); ?>
		<?php get_template_part('content'); ?>
	<?php endwhile; ?>
	<?php wp_reset_postdata(); ?>

</div><!--/.related-posts-->

<?php endif; ?>

<?php wp_reset_postdata(); ?>

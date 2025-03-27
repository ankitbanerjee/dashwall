<?php
// Query highlight entries
$highlight = new WP_Query(
	array(
		'no_found_rows'				=> false,
		'update_post_meta_cache'	=> false,
		'update_post_term_cache'	=> false,
		'ignore_sticky_posts'		=> 1,
		'posts_per_page'			=> absint( get_theme_mod('highlight-posts-count','6') ),
		'cat'						=> absint( get_theme_mod('highlight-category','') )
	)
);
?>

<?php if ( ( get_theme_mod('highlight-posts-count','6') !='0') && $highlight->have_posts() ): ?>
	<div class="page-card page-card-highlights stickywrap">
		
		<h3 class="stickywrap-heading"><?php esc_html_e('Highlights','dashwall'); ?></h3>
		
		<div class="stickywrap-inner">
			<?php while ( $highlight->have_posts() ): $highlight->the_post(); ?>
				<?php get_template_part('content-highlights'); ?>
			<?php endwhile; ?>
		</div>	
		
	</div>
<?php endif; ?>
	
<?php wp_reset_postdata(); ?>

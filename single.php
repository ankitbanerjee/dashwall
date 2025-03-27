<?php get_header(); ?>

<div class="page-col-center">

	<div class="page-card page-card-single stickywrap">
		
		<div class="stickywrap-inner">

			<?php while ( have_posts() ): the_post(); ?>
			
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<div class="entry themeform">
						<?php the_content(); ?>
						<?php wp_link_pages(array('before'=>'<div class="post-pages">'.esc_html__('Pages:','dashwall'),'after'=>'</div>')); ?>
						<div class="clear"></div>
					</div>
					
				</article>
				
				<div class="entry-footer group">

					<?php the_tags('<p class="post-tags"><span>'.esc_html__('Tags:','dashwall').'</span> ','','</p>'); ?>
					
					<div class="clear"></div>
					
					<?php if ( ( get_theme_mod( 'author-bio', 'on' ) == 'on' ) && get_the_author_meta( 'description' ) ): ?>
						<div class="author-bio">
							<div class="bio-avatar"><?php echo get_avatar(get_the_author_meta('user_email'),'128'); ?></div>
							<p class="bio-name"><?php the_author_meta('display_name'); ?></p>
							<p class="bio-desc"><?php the_author_meta('description'); ?></p>
							<div class="clear"></div>
						</div>
					<?php endif; ?>
					
					<?php do_action( 'alx_ext_sharrre_footer' ); ?>
					
					<div class="entry-comments themeform">
						<?php comments_template(); ?>
					</div>

				</div><!--/.entry-footer-->

			<?php endwhile; ?>

		</div>
		
	</div>
	
	<?php if ( get_theme_mod( 'post-nav', 'sidebar' ) == 'content' ) { get_template_part('inc/post-nav'); } ?>
	
	<?php if ( get_theme_mod( 'related-posts', 'categories' ) != 'disable' ) { get_template_part('inc/related-posts'); } ?>

</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
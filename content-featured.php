<div class="featured-card">
	
	<?php if ( comments_open() && ( get_theme_mod( 'comment-count', 'on' ) =='on' ) ): ?>
		<?php $number = get_comments_number( $post->ID ); if ( $number > 0 ) { ?>
			<a class="comments-bubble" href="<?php comments_link(); ?>"><i class="fas fa-comment"></i><span><?php comments_number( '0', '1', '%' ); ?></span></a>
		<?php } ?>
	<?php endif; ?>
	
	<div class="featured-card-thumb" style="background-image:url('<?php the_post_thumbnail_url('dashwall-large'); ?>');"></div>
	
	<div class="featured-card-container">
	
		<div class="featured-card-content">

			<div class="featured-card-category"><?php esc_html_e('in','dashwall'); ?> <?php the_category(' / '); ?></div>

			<h2 class="featured-large-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
			
			<div class="featured-card-meta">
				<a href="<?php echo get_author_posts_url(get_the_author_meta( 'ID' )); ?>" class="featured-card-avatar"><?php echo get_avatar(get_the_author_meta('user_email'),'36'); ?></a>
				<a href="<?php echo get_author_posts_url(get_the_author_meta( 'ID' )); ?>" class="featured-card-author"><span><?php esc_html_e('by','dashwall'); ?></span> <?php the_author(); ?></a>
				<span class="featured-card-divider">&middot;</span>
				<span class="feautred-card-date"><?php the_time( get_option('date_format') ); ?></span>
			</div>
		
		</div>

	</div>

</div>
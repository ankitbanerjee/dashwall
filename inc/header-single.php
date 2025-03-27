<div class="page-inner-container page-inner-container-header-single">
	<div class="page-card header-single">
		
		<?php if ( comments_open() && ( get_theme_mod( 'comment-count', 'on' ) =='on' ) ): ?>
			<?php $number = get_comments_number( $post->ID ); if ( $number > 0 ) { ?>
				<a class="comments-bubble" href="<?php comments_link(); ?>"><i class="fas fa-comment"></i><span><?php comments_number( '0', '1', '%' ); ?></span></a>
			<?php } ?>
		<?php endif; ?>
		
		<div class="header-single-thumb" style="background-image:url('<?php the_post_thumbnail_url('dashwall-huge'); ?>');"></div>
		
		<div class="header-single-container">
		
			<div class="header-single-content">
			
				<div class="header-single-category"><?php esc_html_e('in','dashwall'); ?> <?php the_category(' / '); ?></div>

				<h1 class="header-single-title"><?php the_title(); ?></h1>
				
				<div class="header-single-meta">
					<a href="<?php echo get_author_posts_url(get_the_author_meta( 'ID' )); ?>" class="header-single-avatar"><?php echo get_avatar(get_the_author_meta('user_email'),'36'); ?></a>
					<a href="<?php echo get_author_posts_url(get_the_author_meta( 'ID' )); ?>" class="header-single-author"><span><?php esc_html_e('by','dashwall'); ?></span> <?php the_author(); ?></a>
					<span class="header-single-divider">&middot;</span>
					<span class="feautred-card-date"><?php the_time( get_option('date_format') ); ?></span>
				</div>
			
			</div>

		</div>

	</div>
</div>
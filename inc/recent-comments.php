<?php if ( get_theme_mod( 'card-comments', 'on' ) =='on' ): ?>
	<div class="page-card page-card-comments stickywrap">
		
		<h3 class="stickywrap-heading"><?php esc_html_e('Recent Comments','dashwall'); ?></h3>
		
		<div class="stickywrap-inner">
			
			<?php $comments = get_comments(array('number'=>3,'status'=>'approve','post_status'=>'publish')); ?>
			
			<?php foreach ($comments as $comment): ?>
			<a class="comments-card" href="<?php echo esc_url(get_comment_link($comment->comment_ID)); ?>">
				<div class="comments-card-inner group">
				
					<div class="comments-card-left">
					
						<div class="comments-card-thumb">
							<?php echo get_avatar($comment->comment_author_email,$size='60'); ?>
						</div>
					
					</div>
					
					<div class="comments-card-right">
					<?php $str=explode(' ',get_comment_excerpt($comment->comment_ID)); $comment_excerpt=implode(' ',array_slice($str,0,11)); if(count($str) > 11 && substr($comment_excerpt,-1)!='.') $comment_excerpt.='...' ?>
					
						<h3 class="comments-card-author">
							<?php echo esc_html( $comment->comment_author ); ?>:
						</h3>
						
						<div class="comments-card-excerpt"><?php echo esc_html( $comment_excerpt ); ?></div>
					
					</div>
					
				</div>
			</a>
			<?php endforeach; ?>
			
		</div>	
		
	</div>
<?php endif; ?>

<?php wp_reset_postdata(); ?>

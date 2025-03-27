<?php if ( is_single() ): ?>
	
	<div class="page-card page-card-post-nav stickywrap">
		
		<h3 class="stickywrap-heading"><?php esc_html_e('Browse','dashwall'); ?></h3>
		
		<div class="stickywrap-inner">
			<ul class="post-nav">
				<li class="next"><?php next_post_link('%link', '<i class="fas fa-chevron-right"></i><strong>'.esc_html__('Next', 'dashwall').'</strong> <span>%title</span>'); ?></li>
				<li class="previous"><?php previous_post_link('%link', '<i class="fas fa-chevron-left"></i><strong>'.esc_html__('Previous', 'dashwall').'</strong> <span>%title</span>'); ?></li>
			</ul>
		</div>	
		
	</div>

<?php endif; ?>
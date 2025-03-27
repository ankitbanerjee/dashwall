<a class="highlights-card" href="<?php the_permalink(); ?>">
	<div class="highlights-card-inner group">
	
		<div class="highlights-card-left">
		
			<div class="highlights-card-thumb">
				<?php if ( has_post_thumbnail() ): ?>
					<?php the_post_thumbnail('dashwall-small'); ?>
				<?php else: ?>
					<i class="fas fa-image"></i>
				<?php endif; ?>
			</div>
		
		</div>
		
		<div class="highlights-card-right">
		
			<h3 class="highlights-card-title">
				<?php the_title(); ?>
			</h3>
			
			<div class="highlights-card-date"><?php the_time( get_option('date_format') ); ?></div>
		
		</div>
		
	</div>
</a>
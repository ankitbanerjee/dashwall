<?php if ( get_theme_mod('profile-image') || get_theme_mod('profile-name') || get_theme_mod('profile-description') ): ?>
<div class="page-card page-card-profile stickywrap">
	
	<h3 class="stickywrap-heading"><?php esc_html_e('Profile','dashwall'); ?></h3>
	
	<div class="stickywrap-inner">
	
		<div class="profile-card-inner">

			<?php if ( get_theme_mod('profile-image') ): ?>
				<div class="profile-card-thumb">
					<img src="<?php echo esc_html( get_theme_mod('profile-image') ); ?>" alt="" />
				</div>
			<?php endif; ?>

			<?php if ( get_theme_mod('profile-name') ): ?>
				<h2 class="profile-card-title">
					<?php echo esc_html( get_theme_mod('profile-name') ); ?>
				</h2>
			<?php endif; ?>
			
			<?php if ( get_theme_mod('profile-description') ): ?>
				<div class="profile-card-desc">
					<?php echo wp_kses_post( get_theme_mod('profile-description') ); ?>
				</div>
			<?php endif; ?>
			
		</div>

	</div>
	
</div>
<?php endif; ?>
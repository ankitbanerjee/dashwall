				</div><!--/.page-row-->
			</div><!--/.page-inner-container-->
			
			<div class="page-inner-container-footer">
				<footer class="page-card" id="footer">
				
					<div class="wrapper-inner">
				
						<?php if ( get_theme_mod( 'footer-ads', 'off' ) == 'on' ): ?>
						<div id="footer-ads">
							<?php dynamic_sidebar( 'footer-ads' ); ?>
						</div><!--/#footer-ads-->
						<?php endif; ?>

						//Addition of Footer Menu
						<?php if ( has_nav_menu('footer') ): ?>
   						 <div id="wrap-nav-footer" class="wrap-nav">
     						   <?php wp_nav_menu(array('theme_location' => 'footer', 'menu_id' => 'nav-footer', 'fallback_cb' => false)); ?>
  						  </div>
						<?php endif; ?>
							
						<?php // footer widgets
							$total = 4;
							if ( get_theme_mod( 'footer-widgets','0' ) != '' ) {
								
								$total = get_theme_mod( 'footer-widgets' );
								if( $total == 1) $class = 'one-full';
								if( $total == 2) $class = 'one-half';
								if( $total == 3) $class = 'one-third';
								if( $total == 4) $class = 'one-fourth';
								}

								if ( ( is_active_sidebar( 'footer-1' ) ||
									   is_active_sidebar( 'footer-2' ) ||
									   is_active_sidebar( 'footer-3' ) ||
									   is_active_sidebar( 'footer-4' ) ) && $total > 0 ) 
						{ ?>		
						<div id="footer-widgets">
								
							<div class="pad group">
								<?php $i = 0; while ( $i < $total ) { $i++; ?>
									<?php if ( is_active_sidebar( 'footer-' . $i ) ) { ?>
								
								<div class="footer-widget-<?php echo esc_attr( $i ); ?> grid <?php echo esc_attr( $class ); ?> <?php if ( $i == $total ) { echo 'last'; } ?>">
									<?php dynamic_sidebar( 'footer-' . $i ); ?>
								</div>
								
									<?php } ?>
								<?php } ?>
							</div><!--/.pad-->

						</div><!--/#footer-widgets-->	
						<?php } ?>
						
						<div id="footer-bottom">

							<div class="pad group">
								
								<div class="grid one-full">
									
									<?php if ( get_theme_mod('footer-logo') ): ?>
										<img id="footer-logo" src="<?php echo esc_url( get_theme_mod('footer-logo') ); ?>" alt="<?php echo esc_attr( get_bloginfo('name')); ?>">
									<?php endif; ?>
									
									<div id="copyright">
										<?php if ( get_theme_mod( 'copyright' ) ): ?>
											<p><?php echo esc_html( get_theme_mod( 'copyright' ) ); ?></p>
										<?php else: ?>
											<p><?php bloginfo(); ?> &copy; <?php echo esc_html( date_i18n( esc_html__( 'Y', 'dashwall' ) ) ); ?>. <?php esc_html_e( 'All Rights Reserved.', 'dashwall' ); ?></p>
										<?php endif; ?>
									</div><!--/#copyright-->
									
									<?php if ( get_theme_mod( 'credit', 'on' ) == 'on' ): ?>
									<div id="credit">
										<p><?php esc_html_e('Powered by','dashwall'); ?> <a href="<?php esc_url( _e( 'https://wordpress.org', 'dashwall' ) ); ?>" rel="nofollow">WordPress</a>. <?php esc_html_e('Theme by','dashwall'); ?> <a href="https://agnarson.com" rel="nofollow">Alx</a>.</p>
									</div><!--/#credit-->
									<?php endif; ?>
									
									<?php if ( get_theme_mod( 'footer-social', 'on' ) == 'on' ): ?>
										<?php dashwall_social_links() ; ?>
									<?php endif; ?>
									
								</div>
								
							</div><!--/.pad-->

						</div><!--/#footer-bottom-->
					
					</div>

				</footer><!--/#footer-->
				
			</div><!--/.page-inner-container-footer-->
			
		</div><!--/.page-inner-->
	</div><!--/.page-wrapper-->
	
	<a id="back-to-top" href="#"><i class="fas fa-angle-up"></i></a>
	
	<div class="canvas-bottom"></div>
	<div class="canvas-wrapper">
		<div class="canvas-inner"></div>
	</div>
	
<?php wp_footer(); ?>
</body>
</html>

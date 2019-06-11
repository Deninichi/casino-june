
		</div><!-- .main.container -->

		<footer>
			<div class="container">
				<div class="row">
					<div class="col-12 col-md-2 mb-4 mb-md-0">
						<?php dynamic_sidebar( 'footer-sidebar-1' ); ?>
					</div>
					<div class="col-12 col-md-2 mb-4 mb-md-0">
						<?php dynamic_sidebar( 'footer-sidebar-2' ); ?>
					</div>
					<div class="col-12 col-md-2 mb-4 mb-md-0">
						<?php dynamic_sidebar( 'footer-sidebar-3' ); ?>
					</div>
					<div class="col-12 col-md-2 mb-4 mb-md-0">
						<?php dynamic_sidebar( 'footer-sidebar-4' ); ?>
					</div>
					<div class="col-12 col-md-2 mb-4 mb-md-0">
						<?php dynamic_sidebar( 'footer-sidebar-5' ); ?>
					</div>
					<div class="col-12 col-md-2">
						<?php dynamic_sidebar( 'footer-sidebar-6' ); ?>
					</div>
				</div>

				

				<div class="copyright row">
					<div class="logos col-12 col-md-6 text-center text-md-left mb-5 mb-md-0">
						<img src="/wp-content/themes/casino-june/dist/images/footer-logos.png" alt="">
					</div>
					<div class="copyright-text col-12 col-md-6 text-center text-md-right"><p><?php the_field( 'bear_footer_copyright', 'option' ); ?></p></div>
				</div>
			</div>
		</footer>
		
  		<?php wp_footer(); ?>
	</body>
</html>
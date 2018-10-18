<?php do_action( 'cpotheme_after_main' ); ?>
			
			<section id="subfooter" class="subfooter">
				<div class="container">
					<?php do_action( 'cpotheme_subfooter' ); ?>
				</div>
			</section>

			<?php do_action( 'cpotheme_before_footer' ); ?>
			<footer id="footer" class="footer">
				<div class="container">
					<?php do_action( 'cpotheme_footer' ); ?>
				</div>
			</footer>
			<?php do_action( 'cpotheme_after_footer' ); ?>
			
			<div class="clear"></div>
		</div><!-- wrapper -->
		<?php do_action( 'cpotheme_after_wrapper' ); ?>
	</div><!-- outer -->
	<?php wp_footer(); ?>
</body>
</html>

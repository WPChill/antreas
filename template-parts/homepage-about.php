<?php $colums = 3; ?>
<div id="about" class="section about">
	<div class="container">
		<?php cpotheme_section_heading( 'about' ); ?>

		<div class="row">
			<?php for ( $i = 1; $i <= $colums; $i++ ) : ?>
				<div class="column col<?php echo esc_attr( $colums ); ?>">
					<?php echo do_shortcode( cpotheme_get_option( 'about_content_column_' . $i ) ); ?>
				</div>	
			<?php endfor; ?>
		</div>	
	</div>
</div>

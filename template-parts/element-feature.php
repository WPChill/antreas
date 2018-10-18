<div class="feature">
	<div class="feature-image primary-color">
		<?php cpotheme_icon( get_post_meta( get_the_ID(), 'feature_icon', true ), 'feature-icon' ); ?>
		<?php the_post_thumbnail( 'portfolio' ); ?>
	</div>
	<h5 class="feature-title">
		<?php the_title(); ?>
	</h5>
	<div class="feature-content">
		<?php the_content(); ?>
		<?php cpotheme_edit(); ?>
	</div>
</div>

<?php
$service_icon_type = get_post_meta( get_the_ID(), 'service_icon_type', true );
$service_icon = get_post_meta( get_the_ID(), 'service_icon', true );
$service_image = get_post_meta( get_the_ID(), 'service_image', true );
?>

<div class="service">
	<?php if ( $service_icon_type !== 'image' ) { ?>
		<a href="<?php the_permalink(); ?>">
			<?php cpotheme_icon( $service_icon, 'primary-color service-icon' ); ?>
		</a>
	<?php } ?>
	<div class="service-body">
		<?php if ( $service_icon_type === 'image' && $service_image !== '' ) { ?>
			<a href="<?php the_permalink(); ?>">
				<img class="service-image" src="<?php echo $service_image; ?>">
			</a>
		<?php } ?>

		<h4 class="service-title">
			<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		</h4>
	
		<div class="service-content">
			<?php the_excerpt(); ?>
		</div>
		<?php cpotheme_edit(); ?>
	</div>
</div>

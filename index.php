<?php get_header(); ?>

<?php if ( cpotheme_show_posts() ) : ?>
	<div id="main" class="main section">
		<div class="container">	
			<?php cpotheme_section_heading( 'blog' ); ?>	
			<section id="content" class="content">
				<?php do_action( 'cpotheme_before_content' ); ?>
				<?php cpotheme_grid( null, 'element', 'blog', 2, array( 'class' => 'column-narrow' ) ); ?>
				<?php cpotheme_numbered_pagination(); ?>
				<?php do_action( 'cpotheme_after_content' ); ?>
			</section>
			<?php get_sidebar(); ?>
			<div class="clear"></div>
		</div>
	</div>
<?php endif; ?>

<?php get_footer(); ?>

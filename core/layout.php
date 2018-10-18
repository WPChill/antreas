<?php
//Generate dynamic CSS styling
add_action( 'wp_head', 'cpotheme_styling_css', 19 );
function cpotheme_styling_css() {
	$type_size     = cpotheme_get_option( 'type_size' );
	$type_headings = apply_filters( 'cpotheme_font_headings', cpotheme_get_option( 'type_headings' ) );
	$type_nav      = apply_filters( 'cpotheme_font_menu', cpotheme_get_option( 'type_nav' ) );
	$type_body     = apply_filters( 'cpotheme_font_body', cpotheme_get_option( 'type_body' ) );

	$portfolio_background = cpotheme_get_option( 'home_portfolio_background' );

	$defaults = cpotheme_metadata_customizer();
	?>

	<style type="text/css">
		body {
			<?php if ( $type_size != '' ) : ?>
				font-size: <?php echo $type_size; ?>em;
			<?php endif; ?>

			<?php if ( $type_body != '' ) : ?>
				font-family: '<?php echo cpotheme_metadata_fonts_name( $type_body ); ?>';
				font-weight: <?php echo cpotheme_metadata_fonts_weight( $type_body ); ?>;
			<?php endif; ?>
		}

		<?php if ( $type_body ) : ?>
			.button, .button:link, .button:visited, input[type=submit], .tp-caption {
				font-family: '<?php echo cpotheme_metadata_fonts_name( $type_body ); ?>';
				font-weight: <?php echo cpotheme_metadata_fonts_weight( $type_body ); ?>;
			}
		<?php endif; ?> 


			h1, h2, h3, h4, h5, h6, .heading, .dark .heading, .header .title

			{
				<?php if ( $type_headings ) : ?>
					font-family: '<?php echo cpotheme_metadata_fonts_name( $type_headings ); ?>';
					font-weight: <?php echo cpotheme_metadata_fonts_weight( $type_headings ); ?>;
				<?php endif; ?>

			}
				
 		.menu-main li a {
			<?php if ( $type_nav ) : ?>
				font-family:'<?php echo cpotheme_metadata_fonts_name( $type_nav ); ?>';
				font-weight:<?php echo cpotheme_metadata_fonts_weight( $type_nav ); ?>;
			<?php endif; ?>
		} 

		.menu-mobile li a {
			<?php if ( $type_nav ) : ?>
				font-family:'<?php echo cpotheme_metadata_fonts_name( $type_nav ); ?>';
				font-weight:<?php echo cpotheme_metadata_fonts_weight( $type_nav ); ?>;
			<?php endif; ?>
		} 

	</style>
<?php
}


//Enqueue Google fonts
add_action( 'wp_head', 'cpotheme_styling_fonts', 20 );
function cpotheme_styling_fonts() {
	cpotheme_fonts( apply_filters( 'cpotheme_font_headings', cpotheme_get_option( 'type_headings' ) ) );
	cpotheme_fonts( apply_filters( 'cpotheme_font_menu', cpotheme_get_option( 'type_nav' ) ) );
	cpotheme_fonts( apply_filters( 'cpotheme_font_body', cpotheme_get_option( 'type_body' ) ), cpotheme_get_option( 'type_body_variants' ) );
}


// Registers all widget areas
add_action( 'widgets_init', 'cpotheme_init_sidebar' );
function cpotheme_init_sidebar() {

	register_sidebar(
		array(
			'name'          => __( 'Default Widgets', 'antreas' ),
			'id'            => 'primary-widgets',
			'description'   => __( 'Sidebar shown in all standard pages by default.', 'antreas' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<div class="widget-title heading">',
			'after_title'   => '</div>',
		)
	);

	register_sidebar(
		array(
			'name'          => __( 'Secondary Widgets', 'antreas' ),
			'id'            => 'secondary-widgets',
			'description'   => __( 'Shown in pages with more than one sidebar.', 'antreas' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<div class="widget-title heading">',
			'after_title'   => '</div>',
		)
	);

	$footer_columns = 3;
	for ( $count = 1; $count <= $footer_columns; $count++ ) {
		register_sidebar(
			array(
				'id'            => 'footer-widgets-' . $count,
				'name'          => __( 'Footer Widgets', 'antreas' ) . ' ' . $count,
				'description'   => __( 'Shown in the footer area.', 'antreas' ),
				'before_widget' => '<div id="%1$s" class="widget %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<div class="widget-title heading">',
				'after_title'   => '</div>',
			)
		);
	}
}


//Registers all menu areas
add_action( 'widgets_init', 'cpotheme_init_menu' );
function cpotheme_init_menu() {
	register_nav_menus( array( 'top_menu' => __( 'Top Menu', 'antreas' ) ) );
	register_nav_menus( array( 'main_menu' => __( 'Main Menu', 'antreas' ) ) );
	register_nav_menus( array( 'footer_menu' => __( 'Footer Menu', 'antreas' ) ) );
	register_nav_menus( array( 'mobile_menu' => __( 'Mobile Menu', 'antreas' ) ) );
}

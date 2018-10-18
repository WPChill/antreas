( function( $ ) {

	var headerHeight = $('#header').innerHeight();
	
	wp.customize.bind('preview-ready', function () {

	 	wp.customize.preview.bind( 'section-highlight', function( data ) {
			var selectors = {
				'cpotheme_layout_slider' : '#slider',
				'cpotheme_layout_features' : '#features',
				'cpotheme_layout_about' : '#about',
				'cpotheme_layout_portfolio' : '#portfolio',
				'cpotheme_layout_products' : '#products',
				'cpotheme_layout_tagline' : '#tagline',
				'cpotheme_layout_services' : '#services',
				'cpotheme_layout_team' : '#team',
				'cpotheme_layout_testimonials' : '#testimonials',
				'cpotheme_layout_clients' : '#clients',
				'cpotheme_layout_posts' : '#main',
				'cpotheme_layout_contact' : '#contact',
				'cpotheme_layout_shortcode' : '#shortcode'
			};

			// Only on the front page.
			if ( ! $( selectors[ data.section ] ).length ) {
				return;
			}

			// When the section is expanded, show and scroll to the content placeholders, exposing the edit links.
			if ( true === data.expanded && $( selectors[ data.section ] ).length > 0 ) {
				var offset = $(window).scrollTop() === 0 ? -headerHeight*2 : -headerHeight;
				
				$.scrollTo( $( selectors[ data.section ] ), {
					offset: offset,
					duration: 600,
				});
			}
		}); 

	});

} )( jQuery );
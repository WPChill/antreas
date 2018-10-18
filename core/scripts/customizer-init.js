( function( api ) {
	var sections = [ 
		'cpotheme_layout_slider', 
		'cpotheme_layout_features', 
		'cpotheme_layout_about', 
		'cpotheme_layout_portfolio',
		'cpotheme_layout_products',  
		'cpotheme_layout_tagline', 
		'cpotheme_layout_services', 
		'cpotheme_layout_team', 
		'cpotheme_layout_testimonials', 
		'cpotheme_layout_clients', 
		'cpotheme_layout_contact', 
		'cpotheme_layout_shortcode', 
		'cpotheme_layout_posts' 
	];

    // Detect when the front page sections section is expanded (or closed) so we can adjust the preview accordingly.
    jQuery.each( sections, function ( index, section ){
        api.section( section, function( section ) {
            section.expanded.bind( function( isExpanding ) {
				
                // Value of isExpanding will = true if you're entering the section, false if you're leaving it.
                api.previewer.send( 'section-highlight', { expanded: isExpanding, section: section.id });
            } );
        } );
	});

	//custom control class for the contact section in the customizer
	api.CPOCustomizeContactControl = api.Control.extend( {

		ready: function() {			
			var control = this,
				$pluginSelect =  control.container.children('select'),
				$wpformsContainer = control.container.find('.cpotheme_contact_control__wpforms'),
				$cf7Container = control.container.find('.cpotheme_contact_control__cf7forms');
				
			if ( $pluginSelect.length && control.settings.plugin_select.get() === 'wpforms') {
				$cf7Container.hide();
			}

			if ( $pluginSelect.length && control.settings.plugin_select.get() === 'cf7') {
				$wpformsContainer.hide();
			}
			
			$pluginSelect.change(function() {
				var val = $( this ).val();
	
				if ( val == 'wpforms' ) {
					$wpformsContainer.show().find('option:eq(0)').prop('selected', true);
					$cf7Container.hide();
				}
				else {
					$wpformsContainer.hide();
					$cf7Container.show().find('option:eq(0)').prop('selected', true);
				}
			} ); 
			
			$wpformsContainer.find('select').change(function() {
				var val = $( this ).val();
				if ( isNaN( val ) ) {
					return;
				}
				control.settings.plugin_select( 'wpforms' ); 
				control.settings.form_id( val );
			});

			$cf7Container.find('select').change(function() {
				var val = $( this ).val();

				if ( isNaN( val ) ) {
					return;
				}
				control.settings.plugin_select( 'cf7' ); 
				control.settings.form_id( val ); 
			}); 

		}

	} );

	//tinymce custom control class in the customizer
	api.CPOCustomizeTinymceControl = api.Control.extend( {

		ready: function() {			
			var control = this;

			wp.editor.initialize( control.id , {
				mediaButtons: true,
				tinymce: {
					wpautop: false,
					toolbar1: control.params.toolbar1,
					toolbar2: control.params.toolbar2,
				},
				quicktags: true
			});

			$( document ).on( 'tinymce-editor-init' , function( event, editor ) {
				editor.on( 'Change Paste ExecCommand NodeChange' , function( e ) {
					$( '#'+editor.id ).trigger( 'change' );
					tinyMCE.triggerSave();
				});
			});

		}
	});

	$.extend( api.controlConstructor, {
		'cpo_contact_control': api.CPOCustomizeContactControl,
		'cpo_tinymce_editor': api.CPOCustomizeTinymceControl,
    }); 
 
})( wp.customize );
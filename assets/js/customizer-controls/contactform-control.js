( function( api ) {

	api.AntreasContactFormControl = api.Control.extend( {

		ready: function() {
			var control = this,
				$pluginSelect =  control.container.children('select'),
				$wpformsContainer = control.container.find('.cpotheme_contact_control__wpforms'),
				$cf7Container = control.container.find('.cpotheme_contact_control__cf7forms'),
				$kaliformsContainer = control.container.find('.cpotheme_contact_control__kali-forms');
			
			if ( $pluginSelect.length && control.settings.plugin_select.get() === 'wpforms') {
				$cf7Container.hide();
				$kaliformsContainer.hide();
			}

			if ( $pluginSelect.length && control.settings.plugin_select.get() === 'cf7') {
				$wpformsContainer.hide();
				$kaliformsContainer.hide();
			}
			
			if ( $pluginSelect.length && control.settings.plugin_select.get() === 'kali-forms'){
				$cf7Container.hide();
				$wpformsContainer.hide();
			}

			$pluginSelect.change(function() {
				var val = $( this ).val();

				switch($val) {
					case 'wpforms':
						$wpformsContainer.show().find('option:eq(0)').prop('selected', true);
						$cf7Container.hide();
						$kaliformsContainer.hide();
						break;
					case 'cf7':
						$wpformsContainer.hide();
						$kaliformsContainer.hide();
						$cf7Container.show().find('option:eq(0)').prop('selected', true);
						break;
					case 'kali-forms':
						$wpformsContainer.hide();
						$cf7Container.hide();
						$kaliformsContainer.show().find('option:eq(0)').prop('selected', true);
						break;
				}
			} );
			$kaliformsContainer.find('select').change(function() {
				var val = $( this ).val();
				if ( isNaN( val ) ) {
					return;
				}
				control.settings.plugin_select( 'kali-forms' );
				control.settings.form_id( val );
			});
			
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

	$.extend( api.controlConstructor, {
		'antreas-contactform-control': api.AntreasContactFormControl,
    });

})( wp.customize );

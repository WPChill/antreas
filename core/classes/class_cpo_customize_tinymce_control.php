<?php
if ( ! class_exists( 'WP_Customize_Control' ) ) {
	return null;
}

class CPO_Customize_Tinymce_Control extends WP_Customize_Control {

	/**
	 * The type of customize control being rendered.
	 *
	 * @since  1.0.0
	 * @access public
	 * @var    string
	 */
	public $type = 'cpo_tinymce_editor';

	public function enqueue() {
		wp_enqueue_editor();
	}

	public function to_json() {
		parent::to_json();
		$this->json['toolbar1'] = isset( $this->input_attrs['toolbar1'] ) ? esc_attr( $this->input_attrs['toolbar1'] ) : 'bold italic bullist alignleft aligncenter alignright link';
		$this->json['toolbar2'] = isset( $this->input_attrs['toolbar2'] ) ? esc_attr( $this->input_attrs['toolbar2'] ) : '';
	}

	public function render_content() {
	?>
		<span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>

		<?php if ( ! empty( $this->description ) ) { ?>
			<span class="customize-control-description"><?php echo esc_html( $this->description ); ?></span>
		<?php } ?>

		<textarea id="<?php echo esc_attr( $this->id ); ?>" <?php $this->link(); ?>>
			<?php echo esc_attr( $this->value() ); ?>
		</textarea>
	<?php
	}
}

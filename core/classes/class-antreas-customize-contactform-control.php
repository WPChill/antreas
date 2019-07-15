<?php
if ( ! class_exists( 'WP_Customize_Control' ) ) {
	return null;
}

class Antreas_Customize_ContactForm_Control extends WP_Customize_Control {

	public function enqueue() {
		wp_enqueue_script( 'antreas-contactform-control', ANTREAS_ASSETS_JS . 'customizer-controls/contactform-control.js', array( 'jquery', 'customize-controls' ), ANTREAS_VERSION );
	}

	public function is_kaliforms_active() {
		return defined('KALIFORMS_VERSION');
	}
	
	public function is_cf7_active() {
		if ( class_exists( 'WPCF7' ) ) {
			return true;
		}
		return false;
	}

	public function is_wpforms_active() {
		if ( class_exists( 'WPForms' ) ) {
			return true;
		}
		return false;
	}
	
	public function get_kaliforms() {
		$contact_forms = array();

		$args = array(
			'post_type'      => 'kaliforms_forms',
			'post_status'    => 'publish',
			'posts_per_page' => -1,
		);
		$kali_forms = new WP_Query( $args );
		if ( $kali_forms->have_posts() ) {
			foreach ( $kali_forms->posts as $kali_form ) {
				$contact_forms[ $kali_form->ID ] = $kali_form->post_title;
			}
		}
		return $contact_forms;
	}

	public function get_cf7_forms() {
		$contact_forms = array();
		return $contact_forms;
	}

	public function get_wpforms() {
		$contact_forms = array();
		return $contact_forms;
	}

	public function render_content() {

		$plugin_select = antreas_get_option( 'plugin_select' );
		$form_id = antreas_get_option( 'form_id' );
		$cfplugins = array(
			'kaliforms' => array(
				'installed' => $this->is_kaliforms_active(),
				'label' => 'Kali Forms',
				'slug' => 'kali-forms',
				'backendUrl' => 'post-new.php?post_type=kaliforms_forms',
				'getForms' => 'get_kaliforms',
			),
			'wpforms' => array(
				'installed' => $this->is_wpforms_active(),
				'label' => 'Wp forms',
				'slug' => 'wpforms',
				'backendUrl' => 'page=wpcf7-new',
				'getForms' => 'get_wpforms',
			),
			'cf7' => array(
				'installed' => $this->is_cf7_active(),
				'label' => 'Contact form 7',
				'slug' => 'cf7',
				'backendUrl' => 'page=wpforms-builde',
				'getForms' => 'get_cf7_forms'
			),
		);
		
		$count = 0;
		foreach($cfplugins as $cfplugin){
			if($cfplugin['installed']){
				$count += 1;
			}
		}
		?>

		<?php if($count === 0){ ?>
			<p><?php _e('There are no contact form plugins activated. Please activate KaliForms, WPForms or Contact Form 7', 'antreas'); ?></p>
		<?php } ?>

		<?php if($count === 1) { ?>
		<?php 
		$stuff = array();
		foreach($cfplugins as $cfplugin){
			if($cfplugin['installed']){
				$stuff = $cfplugin
			}
		};
					
		$funcName = $stuff['getForms'];
		$forms = $this->$funcName();
		?>
			<div class="cpotheme_contact_control__<?php echo $stuff['slug']; ?>">
				<?php if ( ! empty( $forms ) ) { ?>
					<span class="customize-control-title"><?php _e('Select form', 'antreas'); ?></span>
					<select>
						<option>...</option>
						<?php foreach ( $forms as $id => $form_title ) { ?>
							<option value="<?php echo $id; ?>" <?php echo $form_id == $id ? 'selected' : ''; ?>><?php echo $form_title; ?></option>
						<?php } ?>
					</select>
				<?php } else { ?>
					<?php printf( __( '<p>%s <a href="' . admin_url( 'admin.php?'. $stuff['backendUrl'] .' ) . '">%s</a></p>', 'antreas' ), 'please add a', 'new form' );  ?>
				<?php } ?>
			</div>
		<?php } ?>

		<?php if($count > 1){ ?>
		<span class="customize-control-title">
			<?php _e('Select contact form plugin', 'antreas'); ?>	
		</span>
		<select>
			<?php foreach($cfplugins as $cfplugin) { ?>
			<option value="<?php echo esc_attr($cfplugin['slug']); ?>" <?php echo $plugin_select === $cfplugin['slug'] ? 'selected' : '' ?>>
				<?php echo esc_html($cfplugin['label'); ?>
			</option>
			<?php } ?>
		</select>
		<?php } ?>

		<?php
	}

}

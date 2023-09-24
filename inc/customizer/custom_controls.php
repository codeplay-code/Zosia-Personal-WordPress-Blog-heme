<?php
 	
if ( class_exists( 'WP_Customize_Control' ) ) {

	/* Custom Separator */

	if ( ! class_exists( 'Tfm_Separator_Custom_Control' )) {
	 
		class Tfm_Separator_Custom_Control extends WP_Customize_Control {
			public $type = 'separator';
			public function render_content(){
				?>
				<p><hr class="tfm-customize-control-seperator"></p>
				<?php
			}
		}

	}

	/* Custom Info */

	if ( ! class_exists( 'Tfm_Info_Custom_Control' )) {

		class Tfm_Info_Custom_Control extends WP_Customize_Control{
			public $type = 'info';
			public function render_content(){
				?>
				<label class="customize-control-title tfm-custom-control-title"><?php echo esc_html( $this->label ); ?></label>
				<p><?php echo wp_kses_post($this->description); ?></p>
				<?php
			}
		}

	}


}
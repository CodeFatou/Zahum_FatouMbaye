<?php
/**
 * Customize for Customizer heading, extend the WP customizer
 *
 * @package 	Customizer_Library
 * @author		Devin Price, The Theme Foundry
 */

if ( ! class_exists( 'WP_Customize_Control' ) ) {
	return null;
}

class Customizer_Library_Heading extends WP_Customize_Control {

	/**
	 * Render the control's content.
	 *
	 * Allows the content to be overriden without having to rewrite the wrapper.
	 *
	 * @since   1.0.0
	 * @return  void
	 */
	public function render_content() { ?>
		<h4 class="overlay-customizer-heading">
        	<?php echo esc_html( $this->label ); ?>
		</h4>
	<?php
	}

}

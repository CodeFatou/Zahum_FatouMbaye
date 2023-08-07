<?php
function avadanta_firm_sections_settings( $wp_customize ) {
    $wp_customize->remove_setting( 'avadanta_menubar_bg_color' );
     $wp_customize->remove_setting( 'avadanta_menu_item_color' );
      $wp_customize->remove_setting( 'avadanta_menu_item_hover_color' );
       $wp_customize->remove_setting( 'avadanta_submenu_item_hover_color' );
       $wp_customize->remove_section( 'avadanta_site_settings' );
        $wp_customize->remove_control('blogdescription');

        // Excerpt Length
    $wp_customize->add_setting ( 'avadanta_excerpt_length', array(
        'default'           => __( '20', 'avadanta-firm' ),
        'sanitize_callback' => 'absint',
    ) );

    $wp_customize->add_control ( 'avadanta_excerpt_length', array(
        'label'    => __( 'Post Excerpt Length', 'avadanta-firm' ),
        'description' => __( 'Change Excerpt Length From Here', 'avadanta-firm' ),
        'section'  => 'avadanta_post_settings',
        'priority' => 2,
        'type'     => 'number',
    ) ); 

            $wp_customize->add_setting('avadanta_theme_color_scheme',array(
        'default' => esc_html__('#000','avadanta-firm'),
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    
    $wp_customize->add_control(
        new WP_Customize_Color_Control($wp_customize,'avadanta_theme_color_scheme',array(
            'label' => esc_html__('Theme Color','avadanta-firm'),           
            'description' => esc_html__('Change Theme Color','avadanta-firm'),
            'section' => 'colors',
            'settings' => 'avadanta_theme_color_scheme'
        ))
    );
 

}
add_action( 'customize_register', 'avadanta_firm_sections_settings', 30);
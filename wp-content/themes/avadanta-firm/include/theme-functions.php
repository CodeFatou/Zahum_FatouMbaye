<?php 
//Avadanta firm css js enqueue

load_theme_textdomain('avadanta-firm');

  function avadant_firm_custom_header_setup()
    {
        add_theme_support('custom-header', apply_filters('avadanta_custom_header_args', array(
            'default-image'          => get_stylesheet_directory_uri() . '/assets/images/header-bg.jpg',
            'default-text-color' => 'fff',
            'width'              => 1000,
            'height'             => 250,
            'flex-height'        => true,
            'wp-head-callback'   => 'avadanta_firm_header_style',
        )));
    }

    add_action( 'after_setup_theme', 'avadant_firm_custom_header_setup' );


if ( !function_exists('avadanta_firm_header_style') ) :
    /**
     * Add Header And background Images
     */
    function avadanta_firm_header_style()
    {
        $header_text_color = get_header_textcolor();

        ?>
        <style type="text/css">
            <?php
                // When Text Is Hidden
                if (  display_header_text() ) :
            ?>
            .header-bg-image
           {
            background-image:url('<?php header_image(); ?>') !important;
           }
           
            .avadanta-title a,
            .avadanta-desc
            {
                color: #<?php echo esc_attr( $header_text_color ); ?> !important;
            }

            <?php endif; ?>
        </style>
        <?php
    }
endif;


if (!function_exists('avadanta_custom_excerpt_length')) :
    function avadanta_custom_excerpt_length($length)
    {
        if (is_admin()) {
            return $length;
        }

        $avadanta_firm_excerpt_length = get_theme_mod('avadanta_excerpt_length','20');
        if (!empty($avadanta_firm_excerpt_length)) {
            return $avadanta_firm_excerpt_length;
        }
        return 20;
    }
endif;
add_filter('excerpt_length', 'avadanta_custom_excerpt_length');
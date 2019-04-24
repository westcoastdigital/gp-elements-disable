<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

add_action('admin_menu', 'wcd_add_admin_menu');
add_action('admin_init', 'wcd_settings_init');

function wcd_define_title()
{
    $title = __('GP Background Disable', 'generatepress');
    return $title;
}

function wcd_add_admin_menu()
{

    add_submenu_page('themes.php', wcd_define_title(), wcd_define_title(), 'manage_options', 'wcd_define_title()', 'wcd_options_page');
}


function wcd_settings_init()
{

    register_setting('gpDisableBackground', 'wcd_settings');

    add_settings_section(
        'wcd_gpDisableBackground_section',
        __('', 'generatepress'),
        'wcd_settings_section_callback',
        'gpDisableBackground'
    );

    add_settings_field(
        'wcd_checkbox_body_bg',
        __('Disable Body Background', 'generatepress'),
        'wcd_checkbox_body_bg_render',
        'gpDisableBackground',
        'wcd_gpDisableBackground_section'
    );

    add_settings_field(
        'wcd_checkbox_header_bg',
        __('Disable Header Background', 'generatepress'),
        'wcd_checkbox_header_bg_render',
        'gpDisableBackground',
        'wcd_gpDisableBackground_section'
    );

    add_settings_field(
        'wcd_checkbox_nav_bg',
        __('Disable Primary Navigation Background', 'generatepress'),
        'wcd_checkbox_nav_bg_render',
        'gpDisableBackground',
        'wcd_gpDisableBackground_section'
    );

    add_settings_field(
        'wcd_checkbox_subnav_bg',
        __('Disable Primary Sub-Navigation Background', 'generatepress'),
        'wcd_checkbox_subnav_bg_render',
        'gpDisableBackground',
        'wcd_gpDisableBackground_section'
    );

    add_settings_field(
        'wcd_checkbox_secondnav_bg',
        __('Disable Secondary Navigation Background', 'generatepress'),
        'wcd_checkbox_secondnav_bg_render',
        'gpDisableBackground',
        'wcd_gpDisableBackground_section'
    );

    add_settings_field(
        'wcd_checkbox_second_subnav_bg',
        __('Disable Secondary Sub-Navigation Background', 'generatepress'),
        'wcd_checkbox_second_subnav_bg_render',
        'gpDisableBackground',
        'wcd_gpDisableBackground_section'
    );

    add_settings_field(
        'wcd_checkbox_content_bg',
        __('Disable Content Background', 'generatepress'),
        'wcd_checkbox_content_bg_render',
        'gpDisableBackground',
        'wcd_gpDisableBackground_section'
    );

    add_settings_field(
        'wcd_checkbox_sidebar_bg',
        __('Disable Sidebar Background', 'generatepress'),
        'wcd_checkbox_sidebar_bg_render',
        'gpDisableBackground',
        'wcd_gpDisableBackground_section'
    );

    add_settings_field(
        'wcd_checkbox_footer_bg',
        __('Disable Footer Background', 'generatepress'),
        'wcd_checkbox_footer_bg_render',
        'gpDisableBackground',
        'wcd_gpDisableBackground_section'
    );
}


function wcd_checkbox_body_bg_render()
{

    $options = get_option('wcd_settings');
    ?>
    <input type='checkbox' name='wcd_settings[wcd_checkbox_body_bg]' <?php checked($options['wcd_checkbox_body_bg'], 1); ?> value='1'>
<?php

}


function wcd_checkbox_header_bg_render()
{

    $options = get_option('wcd_settings');
    ?>
    <input type='checkbox' name='wcd_settings[wcd_checkbox_header_bg]' <?php checked($options['wcd_checkbox_header_bg'], 1); ?> value='1'>
<?php

}


function wcd_checkbox_nav_bg_render()
{

    $options = get_option('wcd_settings');
    ?>
    <input type='checkbox' name='wcd_settings[wcd_checkbox_nav_bg]' <?php checked($options['wcd_checkbox_nav_bg'], 1); ?> value='1'>
<?php

}


function wcd_checkbox_subnav_bg_render()
{

    $options = get_option('wcd_settings');
    ?>
    <input type='checkbox' name='wcd_settings[wcd_checkbox_subnav_bg]' <?php checked($options['wcd_checkbox_subnav_bg'], 1); ?> value='1'>
<?php

}


function wcd_checkbox_secondnav_bg_render()
{

    $options = get_option('wcd_settings');
    ?>
    <input type='checkbox' name='wcd_settings[wcd_checkbox_secondnav_bg]' <?php checked($options['wcd_checkbox_secondnav_bg'], 1); ?> value='1'>
<?php

}


function wcd_checkbox_second_subnav_bg_render()
{

    $options = get_option('wcd_settings');
    ?>
    <input type='checkbox' name='wcd_settings[wcd_checkbox_second_subnav_bg]' <?php checked($options['wcd_checkbox_second_subnav_bg'], 1); ?> value='1'>
<?php

}


function wcd_checkbox_content_bg_render()
{

    $options = get_option('wcd_settings');
    ?>
    <input type='checkbox' name='wcd_settings[wcd_checkbox_content_bg]' <?php checked($options['wcd_checkbox_content_bg'], 1); ?> value='1'>
<?php

}


function wcd_checkbox_sidebar_bg_render()
{

    $options = get_option('wcd_settings');
    ?>
    <input type='checkbox' name='wcd_settings[wcd_checkbox_sidebar_bg]' <?php checked($options['wcd_checkbox_sidebar_bg'], 1); ?> value='1'>
<?php

}


function wcd_checkbox_footer_bg_render()
{

    $options = get_option('wcd_settings');
    ?>
    <input type='checkbox' name='wcd_settings[wcd_checkbox_footer_bg]' <?php checked($options['wcd_checkbox_footer_bg'], 1); ?> value='1'>
<?php

}


function wcd_settings_section_callback()
{

    echo __('Individually disable background elements actiated in GeneratePress Premium Background Setting', 'generatepress');
}


function wcd_options_page()
{

    ?>
    <form action='options.php' method='post'>

        <h2><?php echo wcd_define_title() ?></h2>

        <?php
        settings_fields('gpDisableBackground');
        do_settings_sections('gpDisableBackground');
        submit_button();
        ?>

    </form>
<?php

}

function wcd_gp_disable_backgrounds($wp_customize)
{
    $options = get_option( 'wcd_settings' );
    if( $options['wcd_checkbox_body_bg'] ) {
        $wp_customize->remove_section('generate_backgrounds_body');
    }
    if( $options['wcd_checkbox_header_bg'] ) { 
        $wp_customize->remove_section('generate_backgrounds_header');
    }
    if( $options['wcd_checkbox_nav_bg'] ) { 
        $wp_customize->remove_section('generate_backgrounds_navigation');
    }
    if( $options['wcd_checkbox_subnav_bg'] ) { 
        $wp_customize->remove_section('generate_backgrounds_subnavigation');
    }
    if( $options['wcd_checkbox_secondnav_bg'] ) { 
        $wp_customize->remove_section('secondary_bg_images_section');
    }
    if( $options['wcd_checkbox_second_subnav_bg'] ) { 
        $wp_customize->remove_section('secondary_subnav_bg_images_section');
    }
    if( $options['wcd_checkbox_content_bg'] ) { 
        $wp_customize->remove_section('generate_backgrounds_content');
    }
    if( $options['wcd_checkbox_sidebar_bg'] ) { 
        $wp_customize->remove_section('generate_backgrounds_sidebars');
    }
    if( $options['wcd_checkbox_footer_bg'] ) { 
        $wp_customize->remove_section('generate_backgrounds_footer');
    }
    
}
add_action('customize_register', 'wcd_gp_disable_backgrounds', 9999);
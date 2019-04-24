<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

add_action( 'admin_menu', 'wcd_gp_disable_sidebar_admin_menu' );
add_action( 'admin_init', 'wcd_gp_disable_sidebar_init' );


function wcd_gp_disable_sidebar_admin_menu(  ) { 

	add_submenu_page( 'themes.php', 'GP Sidebar Disable', 'GP Sidebar Disable', 'manage_options', 'gp_sidebar_disable', 'wcd_gp_disable_sidebar_options_page' );

}


function wcd_gp_disable_sidebar_init(  ) { 

	register_setting( 'gpDisableSiebar', 'wcd_settings' );

	add_settings_section(
		'wcd_gpDisableSiebar_section', 
		__( '', 'generatepress' ), 
		'wcd_gp_disable_sidebar_section_callback', 
		'gpDisableSiebar'
	);

	add_settings_field( 
		'wcd_disable_sidebar', 
		__( 'Disable Right Sidebar', 'generatepress' ), 
		'wcd_disable_sidebar_render', 
		'gpDisableSiebar', 
		'wcd_gpDisableSiebar_section' 
	);

	add_settings_field( 
		'wcd_disable_left_sidebar', 
		__( 'Disable Left Sidebar', 'generatepress' ), 
		'wcd_disable_left_sidebar_render', 
		'gpDisableSiebar', 
		'wcd_gpDisableSiebar_section' 
	);

	add_settings_field( 
		'wcd_disable_header_sidebar', 
		__( 'Disable Header Sidebar', 'generatepress' ), 
		'wcd_disable_header_sidebar_render', 
		'gpDisableSiebar', 
		'wcd_gpDisableSiebar_section' 
	);

	add_settings_field( 
		'wcd_disable_footer_one_sidebar', 
		__( 'Disable Footer 1 Sidebar', 'generatepress' ), 
		'wcd_disable_footer_one_sidebar_render', 
		'gpDisableSiebar', 
		'wcd_gpDisableSiebar_section' 
	);

	add_settings_field( 
		'wcd_disable_footer_two_sidebar', 
		__( 'Disable Footer 2 Sidebar', 'generatepress' ), 
		'wcd_disable_footer_two_sidebar_render', 
		'gpDisableSiebar', 
		'wcd_gpDisableSiebar_section' 
	);

	add_settings_field( 
		'wcd_disable_footer_three_sidebar', 
		__( 'Disable Footer 3 Sidebar', 'generatepress' ), 
		'wcd_disable_footer_three_sidebar_render', 
		'gpDisableSiebar', 
		'wcd_gpDisableSiebar_section' 
	);

	add_settings_field( 
		'wcd_disable_footer_four_sidebar', 
		__( 'Disable Footer 4 Sidebar', 'generatepress' ), 
		'wcd_disable_footer_four_sidebar_render', 
		'gpDisableSiebar', 
		'wcd_gpDisableSiebar_section' 
	);

	add_settings_field( 
		'wcd_disable_footer_five_sidebar', 
		__( 'Disable Footer 5 Sidebar', 'generatepress' ), 
		'wcd_disable_footer_five_sidebar_render', 
		'gpDisableSiebar', 
		'wcd_gpDisableSiebar_section' 
	);

	add_settings_field( 
		'wcd_disable_footer_bar_sidebar', 
		__( 'Disable Footer Bar Sidebar', 'generatepress' ), 
		'wcd_disable_footer_bar_sidebar_render', 
		'gpDisableSiebar', 
		'wcd_gpDisableSiebar_section' 
	);

	add_settings_field( 
		'wcd_disable_top_bar_sidebar', 
		__( 'Disable Top Bar Sidebar', 'generatepress' ), 
		'wcd_disable_top_bar_sidebar_render', 
		'gpDisableSiebar', 
		'wcd_gpDisableSiebar_section' 
	);

	add_settings_field( 
		'wcd_disable_slideout_sidebar', 
		__( 'Disable Slideout Navigation Sidebar', 'generatepress' ), 
		'wcd_disable_slideout_sidebar_render', 
		'gpDisableSiebar', 
		'wcd_gpDisableSiebar_section' 
	);


}


function wcd_disable_sidebar_render(  ) { 

	$options = get_option( 'wcd_settings' );
	?>
	<input type='checkbox' name='wcd_settings[wcd_disable_sidebar]' <?php checked( $options['wcd_disable_sidebar'], 1 ); ?> value='1'>
	<?php

}


function wcd_disable_left_sidebar_render(  ) { 

	$options = get_option( 'wcd_settings' );
	?>
	<input type='checkbox' name='wcd_settings[wcd_disable_left_sidebar]' <?php checked( $options['wcd_disable_left_sidebar'], 1 ); ?> value='1'>
	<?php

}


function wcd_disable_header_sidebar_render(  ) { 

	$options = get_option( 'wcd_settings' );
	?>
	<input type='checkbox' name='wcd_settings[wcd_disable_header_sidebar]' <?php checked( $options['wcd_disable_header_sidebar'], 1 ); ?> value='1'>
	<?php

}


function wcd_disable_footer_one_sidebar_render(  ) { 

	$options = get_option( 'wcd_settings' );
	?>
	<input type='checkbox' name='wcd_settings[wcd_disable_footer_one_sidebar]' <?php checked( $options['wcd_disable_footer_one_sidebar'], 1 ); ?> value='1'>
	<?php

}


function wcd_disable_footer_two_sidebar_render(  ) { 

	$options = get_option( 'wcd_settings' );
	?>
	<input type='checkbox' name='wcd_settings[wcd_disable_footer_two_sidebar]' <?php checked( $options['wcd_disable_footer_two_sidebar'], 1 ); ?> value='1'>
	<?php

}


function wcd_disable_footer_three_sidebar_render(  ) { 

	$options = get_option( 'wcd_settings' );
	?>
	<input type='checkbox' name='wcd_settings[wcd_disable_footer_three_sidebar]' <?php checked( $options['wcd_disable_footer_three_sidebar'], 1 ); ?> value='1'>
	<?php

}


function wcd_disable_footer_four_sidebar_render(  ) { 

	$options = get_option( 'wcd_settings' );
	?>
	<input type='checkbox' name='wcd_settings[wcd_disable_footer_four_sidebar]' <?php checked( $options['wcd_disable_footer_four_sidebar'], 1 ); ?> value='1'>
	<?php

}


function wcd_disable_footer_five_sidebar_render(  ) { 

	$options = get_option( 'wcd_settings' );
	?>
	<input type='checkbox' name='wcd_settings[wcd_disable_footer_five_sidebar]' <?php checked( $options['wcd_disable_footer_five_sidebar'], 1 ); ?> value='1'>
	<?php

}


function wcd_disable_footer_bar_sidebar_render(  ) { 

	$options = get_option( 'wcd_settings' );
	?>
	<input type='checkbox' name='wcd_settings[wcd_disable_footer_bar_sidebar]' <?php checked( $options['wcd_disable_footer_bar_sidebar'], 1 ); ?> value='1'>
	<?php

}


function wcd_disable_top_bar_sidebar_render(  ) { 

	$options = get_option( 'wcd_settings' );
	?>
	<input type='checkbox' name='wcd_settings[wcd_disable_top_bar_sidebar]' <?php checked( $options['wcd_disable_top_bar_sidebar'], 1 ); ?> value='1'>
	<?php

}


function wcd_disable_slideout_sidebar_render(  ) { 

	$options = get_option( 'wcd_settings' );
	?>
	<input type='checkbox' name='wcd_settings[wcd_disable_slideout_sidebar]' <?php checked( $options['wcd_disable_slideout_sidebar'], 1 ); ?> value='1'>
	<?php

}


function wcd_gp_disable_sidebar_section_callback(  ) { 

	echo __( 'This section description', 'generatepress' );

}


function wcd_gp_disable_sidebar_options_page(  ) { 

	?>
	<form action='options.php' method='post'>

		<h2>GP Sidebar Disable</h2>

		<?php
		settings_fields( 'gpDisableSiebar' );
		do_settings_sections( 'gpDisableSiebar' );
		submit_button();
		?>

	</form>
	<?php

}

function wcd_gp_disable_sidebars(){
    $options = get_option( 'wcd_settings' );
    if( $options['wcd_disable_sidebar'] ) {
        unregister_sidebar( 'sidebar-1' );	// right
    }
    if( $options['wcd_disable_left_sidebar'] ) {
        unregister_sidebar( 'sidebar-2' );	// left
    }
    if( $options['wcd_disable_header_sidebar'] ) {
        unregister_sidebar( 'header' );	// header
    }
    if( $options['wcd_disable_footer_one_sidebar'] ) {
        unregister_sidebar( 'footer-1' );	// footer 1
    }
    if( $options['wcd_disable_footer_two_sidebar'] ) {
        unregister_sidebar( 'footer-2' );	// footer 2
    }
    if( $options['wcd_disable_footer_three_sidebar'] ) {
        unregister_sidebar( 'footer-3' );	// footer 3
    }
    if( $options['wcd_disable_footer_four_sidebar'] ) {
        unregister_sidebar( 'footer-4' );	// footer 4
    }
    if( $options['wcd_disable_footer_five_sidebar'] ) {
        unregister_sidebar( 'footer-5' );	// footer 5
    }
    if( $options['wcd_disable_footer_bar_sidebar'] ) {
        unregister_sidebar( 'footer-bar' );	// footer bar
    }
    if( $options['wcd_disable_top_bar_sidebar'] ) {
        unregister_sidebar( 'top-bar' );	// top bar
    }
    if( $options['wcd_disable_slideout_sidebar'] ) {
        unregister_sidebar( 'slide-out-widget' );	// slideout navigation
    }
}
add_action( 'widgets_init', 'wcd_gp_disable_sidebars', 9999 );

?>
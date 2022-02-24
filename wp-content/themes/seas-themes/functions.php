<?php
/* ================================
 * Enqueue Scripts And Style
 * ================================ */
define("WP_DEV_MODE", true);
define("THEME_URI", get_theme_file_uri());

function seas_theme_scripts()
{
  /* ========== STYLESHEET ========== */
  // <!-- for slick slider  -->
  // <link rel="stylesheet" type="text/css" href="./slick-1.8.1/slick/slick.css" />
  // <link rel="stylesheet" type="text/css" href="./slick-1.8.1/slick/slick-theme.css" />

  // <!-- for fontawesome icon  -->
  // <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />

  // SLICK CSS
  wp_enqueue_style('slick-css', THEME_URI . '/assets/slick-1.8.1/slick/slick.css', array(), microtime());

  // SLICK THEME CSS
  wp_enqueue_style('slick-themes-css', THEME_URI . '/assets/slick-1.8.1/slick/slick-theme.css', array(), microtime());

  // FONT AWESOME
  wp_enqueue_style('fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css', array(), microtime());

  // MAIN THEME STYLES
  wp_enqueue_style('main-themes-styles', THEME_URI . '/assets/css/styles.css', array(), microtime());
  /* ========== STYLESHEET - END ========== */

  /* ========== SCRIPTS ========== */
  // jQuery
  wp_deregister_script('jquery');
  wp_enqueue_script('jquery', THEME_URI . '/assets/js/jquery-3.3.1.min.js');

  // Slick
  wp_enqueue_script('slick-js', THEME_URI . '/assets/js/slick.min.js', array('jquery'), '1.0', true);

  // Main Script
  if (WP_DEV_MODE) {
    wp_enqueue_script('main-script', THEME_URI . '/assets/js/scripts-bundled.js', array('jquery'), microtime(), true);
  } else {
    wp_enqueue_script('main-script', THEME_URI . '/assets/js/dist/scripts-bundled-min.js', array('jquery'), false, true);
  }

  // // Special Variables Support JS
  // wp_localize_script('main-script', 'BCM_Variables', array(
  //   'root_url' => get_site_url(),
  //   'assets_url' => get_theme_file_uri() . '/assets/',
  //   'ajax_url' => admin_url('admin-ajax.php'),
  //   'show_auto_contact_form' => get_theme_mod('show_auto_contact_form', true),
  //   'auto_contact_form_timeout' => get_theme_mod('auto_contact_form_timeout', 7)
  // ));
  /* ========== SCRIPTS - END ========== */
}
add_action('wp_enqueue_scripts', 'seas_theme_scripts');

function suki_remove_dynamic_css() {
	remove_all_filters( 'suki/frontend/dynamic_css' );
	remove_all_filters( 'suki/frontend/woocommerce/dynamic_css' );

	remove_all_filters( 'suki/frontend/pro_dynamic_css' );
	remove_all_filters( 'suki/frontend/woocommerce/pro_dynamic_css' );
}
add_action( 'wp_enqueue_scripts', 'suki_remove_dynamic_css', 0 );


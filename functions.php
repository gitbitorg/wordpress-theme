<?php
function fabric_scripts() {
  wp_enqueue_style( 'fabric', get_template_directory_uri() . '/css/fabric.min.css', array(), '1.4.0' );
  wp_enqueue_style( 'fabric-components', get_template_directory_uri() . '/css/fabric.components.min.css', array(), '1.4.0' );
  wp_enqueue_style( 'styles', get_template_directory_uri() . '/css/styles.css' );
  wp_enqueue_script( 'fabric-js', get_template_directory_uri() . '/js/fabric.min.js', array( ), '1.4.0', true );
}

add_action( 'wp_enqueue_scripts', 'fabric_scripts' );

add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 825, 510, true );

function register_my_menus() {
  register_nav_menus(
    array(
      'nav-menu' => __( 'Navigation Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );

function custom_settings_add_menu() {
  add_menu_page( 'Custom Settings', 'Custom Settings', 'manage_options', 'custom-settings', 'custom_settings_page', null, 99 );
}
add_action( 'admin_menu', 'custom_settings_add_menu' );

function custom_settings_page() { ?>
  <div class="wrap">
    <h1>Custom Settings</h1>
    <form method="post" action="options.php">
       <?php
           settings_fields( 'section' );
           do_settings_sections( 'theme-options' );
           submit_button();
       ?>
    </form>
  </div>
<?php }

function setting_facebook() { ?>
  <input type="text" name="facebook" id="facebook" value="<?php echo get_option('facebook'); ?>" />
<?php }

function setting_linkedin() { ?>
  <input type="text" name="linkedin" id="linkedin" value="<?php echo get_option('linkedin'); ?>" />
<?php }

function setting_twitter() { ?>
  <input type="text" name="twitter" id="twitter" value="<?php echo get_option( 'twitter' ); ?>" />
<?php }

function setting_googleplus() { ?>
  <input type="text" name="googleplus" id="googleplus" value="<?php echo get_option('googleplus'); ?>" />
<?php }

function setting_github() { ?>
  <input type="text" name="github" id="github" value="<?php echo get_option('github'); ?>" />
<?php }

function custom_settings_page_setup() {
  add_settings_section( 'section', 'All Settings', null, 'theme-options' );

  add_settings_field( 'facebook', 'Facebook URL', 'setting_facebook', 'theme-options', 'section' );
  add_settings_field( 'linkedin', 'LinkedIn URL', 'setting_linkedin', 'theme-options', 'section' );
  add_settings_field( 'twitter', 'Twitter URL', 'setting_twitter', 'theme-options', 'section' );
  add_settings_field( 'googleplus', 'Google+ URL', 'setting_googleplus', 'theme-options', 'section' );
  add_settings_field( 'github', 'GitHub URL', 'setting_github', 'theme-options', 'section' );

  register_setting('section', 'facebook');
  register_setting('section', 'linkedin');
  register_setting('section', 'twitter');
  register_setting('section', 'googleplus');
  register_setting('section', 'github');
}
add_action( 'admin_init', 'custom_settings_page_setup' );
?>

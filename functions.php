<?php
function fabric_scripts() {
  wp_enqueue_style( 'fabric', get_template_directory_uri() . '/css/fabric.min.css', array(), '1.4.0' );
  wp_enqueue_style( 'fabric-components', get_template_directory_uri() . '/css/fabric.components.min.css', array(), '1.4.0' );
  wp_enqueue_style( 'style', get_stylesheet_uri() );
  wp_enqueue_script( 'fabric-js', get_template_directory_uri() . '/js/fabric.min.js', array( ), '1.4.0', true );
}

add_action( 'wp_enqueue_scripts', 'fabric_scripts' );

add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 500, 300, true );

if ( ! isset ( $content_width) ) { $content_width = 800; }

add_theme_support( 'post-formats',  array ( 'aside', 'status' ) );

function themename_custom_post_formats_setup() {
    add_post_type_support( 'page', 'post-formats' );
}
add_action( 'init', 'themename_custom_post_formats_setup' );


function register_my_menus() {
  register_nav_menus(
    array(
      'nav-menu' => __( 'Navigation Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );

add_theme_support( 'customize-selective-refresh-widgets' );

add_theme_support( 'html5', array(
  'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
) );

function gitbit_widgets_init() {

	register_sidebar( array(
		'name'          => 'Right sidebar',
		'id'            => 'right_sidebar',
		'before_widget' => '<section class="ms-Grid-col ms-u-sm12 ms-u-md6 ms-u-lg4 ms-u-xl12"><div class="widget">',
		'after_widget'  => '</div></section>',
		'before_title'  => '<h2 class="ms-font-xl">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'gitbit_widgets_init' );

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

function customize_post() {
	add_meta_box(
		'your_fields_meta_box', // $id
		'GitBit', // $title
		'show_your_fields_meta_box', // $callback
		'post', // $screen
		'normal', // $context
		'high' // $priority
	);
}

add_action( 'add_meta_boxes', 'customize_post' );

function customize_page() {
	add_meta_box(
		'your_fields_meta_box', // $id
		'GitBit', // $title
		'show_your_fields_meta_box', // $callback
		'page', // $screen
		'normal', // $context
		'high' // $priority
	);
}

add_action( 'add_meta_boxes', 'customize_page' );

function show_your_fields_meta_box() {
	global $post;
		$meta = get_post_meta( $post->ID, 'gitbit', true ); ?>

	<input type="hidden" name="your_meta_box_nonce" value="<?php echo wp_create_nonce( basename(__FILE__) ); ?>">

  <p>
  	<label for="gitbit[backgroundcolor]">background color</label>
  	<br>
  	<input type="text" name="gitbit[backgroundcolor]" id="gitbit[backgroundcolor]" class="regular-text" value="<?php echo $meta['backgroundcolor']; ?>">
  </p>
<?php }



function save_your_fields_meta( $post_id ) {
	// verify nonce
	if ( !wp_verify_nonce( $_POST['your_meta_box_nonce'], basename(__FILE__) ) ) {
		return $post_id;
	}
	// check autosave
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return $post_id;
	}
	// check permissions
	if ( 'page' === $_POST['post_type'] ) {
		if ( !current_user_can( 'edit_page', $post_id ) ) {
			return $post_id;
		} elseif ( !current_user_can( 'edit_post', $post_id ) ) {
			return $post_id;
		}
	}

	$old = get_post_meta( $post_id, 'gitbit', true );
	$new = $_POST['gitbit'];

	if ( $new && $new !== $old ) {
		update_post_meta( $post_id, 'gitbit', $new );
	} elseif ( '' === $new && $old ) {
		delete_post_meta( $post_id, 'gitbit', $old );
	}
}
add_action( 'save_post', 'save_your_fields_meta' );

?>

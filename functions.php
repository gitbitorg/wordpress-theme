<?php
function fabric_scripts() {
	wp_enqueue_style( 'fabric', get_template_directory_uri() . '/css/fabric.min.css', array(), '1.4.0' );
	wp_enqueue_style( 'fabric-components', get_template_directory_uri() . '/css/fabric.components.min.css', array(), '1.4.0' );
	wp_enqueue_style( 'style', get_stylesheet_uri() );
	wp_enqueue_script( 'fabric-js', get_template_directory_uri() . '/js/fabric.min.js', array( ), '1.4.0', true );

  	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

add_action( 'wp_enqueue_scripts', 'fabric_scripts' );

add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 500, 300, true );

if ( ! isset ( $content_width) ) { $content_width = 800; }

add_theme_support( 'post-formats',  array ( 'aside', 'status', 'quote' ) );

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

  register_sidebar( array(
    'name'          => 'Footer sidebar',
    'id'            => 'footer_sidebar',
    'before_widget' => '<section class="ms-Grid-col ms-u-sm12 ms-u-md6 ms-u-lg3"><div class="footer-widget ms-font-l">',
    'after_widget'  => '</div></section>',
    'before_title'  => '<h3 class="footer-widget-title">',
    'after_title'   => '</h3>',
  ) );

}
add_action( 'widgets_init', 'gitbit_widgets_init' );

function customize_post() {
	add_meta_box(
		'fabric_meta_box', // $id
		'GitBit', // $title
		'show_fabric_meta_box', // $callback
		'post', // $screen
		'normal', // $context
		'high' // $priority
	);
}

add_action( 'add_meta_boxes', 'customize_post' );

function customize_page() {
	add_meta_box(
		'fabric_meta_box', // $id
		'GitBit', // $title
		'show_fabric_meta_box', // $callback
		'page', // $screen
		'normal', // $context
		'high' // $priority
	);
}

add_action( 'add_meta_boxes', 'customize_page' );

function show_fabric_meta_box() {
	global $post;
	$meta = get_post_meta( $post->ID, 'gitbit', true );
	$backgroundcolor = "";
	if  (!empty( $meta )) {
		$backgroundcolor = esc_attr($meta['backgroundcolor']);
	} ?>

	<input type="hidden" name="fabric_nonce" value="<?php echo wp_create_nonce( basename(__FILE__) ); ?>">

	<p>
		<label for="gitbit[backgroundcolor]">background color</label>
		<br>
		<input type="text" name="gitbit[backgroundcolor]" id="gitbit[backgroundcolor]" class="regular-text" value="<?php echo $backgroundcolor ?>">
	</p>
<?php }

function save_your_fields_meta( $post_id ) {
	if ( !isset( $_POST['fabric_nonce'] ) || !wp_verify_nonce( $_POST['fabric_nonce'], basename( __FILE__ ) ) )
		return $post_id;

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

// *** category customization ***

//add extra fields to category edit form callback function
function extra_category_fields( $tag ) {    //check for existing featured ID
    $t_id = $tag->term_id;
    $cat_meta = get_option( "category_$t_id");
?>
<tr class="form-field">
  <th scope="row" valign="top"><label for="subheading"><?php _e('Category subheading'); ?></label></th>
  <td>
    <input type="text" name="Cat_meta[subheading]" id="Cat_meta[subheading]" size="25" style="width:60%;" value="<?php echo $cat_meta['subheading'] ? $cat_meta['subheading'] : ''; ?>"><br />
    <span class="description"><?php _e('Subheading of category'); ?></span>
  </td>
</tr>
<tr class="form-field">
  <th scope="row" valign="top"><label for="cat_Image_url"><?php _e('Category Image Url'); ?></label></th>
  <td>
    <input type="text" name="Cat_meta[img]" id="Cat_meta[img]" size="3" style="width:60%;" value="<?php echo $cat_meta['img'] ? $cat_meta['img'] : ''; ?>"><br />
    <span class="description"><?php _e('Image for category: use full url with '); ?></span>
  </td>
</tr>
<tr class="form-field">
  <th scope="row" valign="top"><label for="testimony_title"><?php _e('Testimonies title'); ?></label></th>
  <td>
    <input type="text" name="Cat_meta[testimony_title]" id="Cat_meta[testimony_title]" size="25" style="width:60%;" value="<?php echo $cat_meta['testimony_title'] ? $cat_meta['testimony_title'] : ''; ?>"><br />
    <span class="description"><?php _e('Title shown above the testimonies'); ?></span>
  </td>
</tr>
<tr class="form-field">
  <th scope="row" valign="top"><label for="testimony1_url"><?php _e('Testimony 1 url'); ?></label></th>
  <td>
    <textarea name="Cat_meta[testimony1_url]" id="Cat_meta[testimony1_url]" style="width:60%;"><?php echo $cat_meta['testimony1_url'] ? $cat_meta['testimony1_url'] : ''; ?></textarea><br />
    <span class="description"><?php _e('url for testimony 1 link'); ?></span>
  </td>
</tr>
<tr class="form-field">
  <th scope="row" valign="top"><label for="testimony1_image"><?php _e('Testimony 1 image'); ?></label></th>
  <td>
    <textarea name="Cat_meta[testimony1_image]" id="Cat_meta[testimony1_image]" style="width:60%;"><?php echo $cat_meta['testimony1_image'] ? $cat_meta['testimony1_image'] : ''; ?></textarea><br />
    <span class="description"><?php _e('url pointing to testimony 1 image'); ?></span>
  </td>
</tr>

<tr class="form-field">
  <th scope="row" valign="top"><label for="testimony2_url"><?php _e('Testimony 2 url'); ?></label></th>
  <td>
    <textarea name="Cat_meta[testimony2_url]" id="Cat_meta[testimony2_url]" style="width:60%;"><?php echo $cat_meta['testimony2_url'] ? $cat_meta['testimony2_url'] : ''; ?></textarea><br />
    <span class="description"><?php _e('url for testimony 1 link'); ?></span>
  </td>
</tr>
<tr class="form-field">
  <th scope="row" valign="top"><label for="testimony2_image"><?php _e('Testimony 2 image'); ?></label></th>
  <td>
    <textarea name="Cat_meta[testimony2_image]" id="Cat_meta[testimony2_image]" style="width:60%;"><?php echo $cat_meta['testimony2_image'] ? $cat_meta['testimony2_image'] : ''; ?></textarea><br />
    <span class="description"><?php _e('url pointing to testimony 2 image'); ?></span>
  </td>
</tr>

<tr class="form-field">
  <th scope="row" valign="top"><label for="testimony3_url"><?php _e('Testimony 3 url'); ?></label></th>
  <td>
    <textarea name="Cat_meta[testimony3_url]" id="Cat_meta[testimony3_url]" style="width:60%;"><?php echo $cat_meta['testimony3_url'] ? $cat_meta['testimony3_url'] : ''; ?></textarea><br />
    <span class="description"><?php _e('url for testimony 3 link'); ?></span>
  </td>
</tr>
<tr class="form-field">
  <th scope="row" valign="top"><label for="testimony3_image"><?php _e('Testimony 3 image'); ?></label></th>
  <td>
    <textarea name="Cat_meta[testimony3_image]" id="Cat_meta[testimony3_image]" style="width:60%;"><?php echo $cat_meta['testimony3_image'] ? $cat_meta['testimony3_image'] : ''; ?></textarea><br />
    <span class="description"><?php _e('url pointing to testimony 3 image'); ?></span>
  </td>
</tr>
<?php
}

//add extra fields to category edit form hook
add_action ( 'edit_category_form_fields', 'extra_category_fields');


// save extra category extra fields callback function
function save_extra_category_fileds( $term_id ) {
    if ( isset( $_POST['Cat_meta'] ) ) {
        $t_id = $term_id;
        $cat_meta = get_option( "category_$t_id");
        $cat_keys = array_keys($_POST['Cat_meta']);
            foreach ($cat_keys as $key){
            if (isset($_POST['Cat_meta'][$key])){
                $cat_meta[$key] = $_POST['Cat_meta'][$key];
            }
        }
        //save the option array
        update_option( "category_$t_id", $cat_meta );
    }
}

// save extra category extra fields hook
add_action ( 'edited_category', 'save_extra_category_fileds');

// *** END OF CATEGORY SECTION ***



function analytics_footer() {
    get_template_part( 'template-parts/meta/google-analytics' );
}
add_action( 'wp_footer', 'analytics_footer' );

function create_post_type() {
	register_post_type( 'gitbit_product',
		array(
			'labels' => array(
				'name' => __( 'Products' ),
				'singular_name' => __( 'Product' )
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'product'),
			'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'revisions', 'page-attributes')
		)
	);

	register_taxonomy('gitbit_product_topic', 'gitbit_product', array(
		'labels' => array(
			'name' => 'Topic',
			'add_new_item' => 'Add New Topic',
			'new_item_name' => "New Topic Type"
		),
		'show_ui' => true,
		'show_tagcloud' => false,
		'hierarchical' => true,
		'public' => false
	));

	register_taxonomy('gitbit_product_feature', 'gitbit_product', array(
		'labels' => array(
			'name' => 'Features',
			'add_new_item' => 'Add New Feature',
			'new_item_name' => "New Feature Type"
		),
		'show_ui' => true,
		'show_tagcloud' => false,
		'hierarchical' => true
	));

	register_taxonomy('gitbit_product_integration', 'gitbit_product', array(
		'labels' => array(
			'name' => 'Integrations',
			'add_new_item' => 'Add New Integration',
			'new_item_name' => "New Integration Type"
		),
		'show_ui' => true,
		'show_tagcloud' => false,
		'hierarchical' => true,
		'rewrite' => array( 'slug' => 'products/integrations' )
	));

	register_taxonomy('gitbit_product_devices', 'gitbit_product', array(
		'labels' => array(
			'name' => 'Device support',
			'add_new_item' => 'Add New Device',
			'new_item_name' => "New Device Type"
		),
		'show_ui' => true,
		'show_tagcloud' => false,
		'hierarchical' => true,
		'rewrite' => array( 'slug' => 'products/devices' )
	));

	register_taxonomy('gitbit_product_services', 'gitbit_product', array(
		'labels' => array(
			'name' => 'Services',
			'add_new_item' => 'Add New Service',
			'new_item_name' => "New Service Type"
		),
		'show_ui' => true,
		'show_tagcloud' => false,
		'hierarchical' => true
	));

	register_taxonomy('gitbit_product_practices', 'gitbit_product', array(
		'labels' => array(
			'name' => 'Practice Area',
			'add_new_item' => 'Add New Practice Area',
			'new_item_name' => "New Practice Area Type"
		),
		'show_ui' => true,
		'show_tagcloud' => false,
		'hierarchical' => true
	));
}
add_action( 'init', 'create_post_type' );

function customize_gitbit_product() {
	add_meta_box(
		'gitbit_product_meta_box', // $id
		'GitBit Product Details', // $title
		'show_gitbit_product_meta_box', // $callback
		'gitbit_product', // $screen
		'normal', // $context
		'high' // $priority
	);
}

add_action( 'add_meta_boxes', 'customize_gitbit_product' );

function show_gitbit_product_meta_box() {
	global $post;
	$meta = get_post_meta( $post->ID, 'gitbit_product', true );
	$slideshare = "";
	$video = "";
	$quote1 = "";
	$quote2 = "";
	if  (!empty( $meta )) { 
		$slideshare = esc_attr($meta['slideshare']);
		$video = esc_attr($meta['video']);
		$quote1 = esc_attr($meta['quote1']);
		$quote2 = esc_attr($meta['quote2']);
	}
	?>

	<input type="hidden" name="gitbit_product_nonce" value="<?php echo wp_create_nonce( basename(__FILE__) ); ?>">

	<p>
		<label for="gitbit_product[slideshare]">SlideShare URL</label><br>
		<input type="text" name="gitbit_product[slideshare]" id="gitbit_product[slideshare]" class="regular-text" value="<?php echo $slideshare ?>">
	</p>
	<p>
		<label for="gitbit_product[video]">Video URL</label><br>
		<input type="text" name="gitbit_product[video]" id="gitbit_product[video]" class="regular-text" value="<?php echo $video ?>">
	</p>
	<p>
		<label for="gitbit_product[quote1]">Quote 1</label><br>
		<input type="text" name="gitbit_product[quote1]" id="gitbit_product[quote1]" class="regular-text" value="<?php echo $quote1 ?>">
	</p>
	<p>
		<label for="gitbit_product[quote2]">Quote 2</label><br>
		<input type="text" name="gitbit_product[quote2]" id="gitbit_product[quote2]" class="regular-text" value="<?php echo $quote2 ?>">
	</p>
<?php }

function save_gitbit_product_fields_meta( $post_id ) {
	if ( !isset( $_POST['gitbit_product_nonce'] ) || !wp_verify_nonce( $_POST['gitbit_product_nonce'], basename( __FILE__ ) ) )
		return $post_id;

	// check autosave
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return $post_id;
	}
	// check permissions
	if ( 'gitbit_product' === $_POST['post_type'] ) {
		if ( !current_user_can( 'edit_post', $post_id ) ) {
			return $post_id;
		}
	}

	$old = get_post_meta( $post_id, 'gitbit_product', true );
	$new = $_POST['gitbit_product'];

	if ( $new && $new !== $old ) {
		update_post_meta( $post_id, 'gitbit_product', $new );
	} elseif ( '' === $new && $old ) {
		delete_post_meta( $post_id, 'gitbit_product', $old );
	}
}
add_action( 'save_post', 'save_gitbit_product_fields_meta' );

?>

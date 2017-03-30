<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage Office_ui
 * @since Office UI 1.0
 */

?>

<!doctype html>

<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<title><?php wp_title(); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<link href="<?php bloginfo('template_directory'); ?>/css/fabric.min.css" rel="stylesheet" />
	<link href="<?php bloginfo('template_directory'); ?>/css/fabric.components.min.css" rel="stylesheet" />

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div class='site'>
		<main id="main" class="site-main" role="main">

		</main>
	</div>
	<script src="<?php bloginfo('template_directory'); ?>/js/fabric.min.js"></script>
	<?php wp_footer(); ?> 
</body>
</html>

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
 * @package Fabric
 * @since Office UI 1.0
 */

?>

<!doctype html>

<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name='viewport' content='width=device-width, initial-scale=1'/>

	<link rel='apple-touch-icon' sizes='57x57' href='<?php bloginfo('template_directory'); ?>/assets/apple-icon-57x57.png'/>
	<link rel='apple-touch-icon' sizes='60x60' href='<?php bloginfo('template_directory'); ?>/assets/apple-icon-60x60.png'/>
	<link rel='apple-touch-icon' sizes='72x72' href='<?php bloginfo('template_directory'); ?>/assets/apple-icon-72x72.png'/>
	<link rel='apple-touch-icon' sizes='76x76' href='<?php bloginfo('template_directory'); ?>/assets/apple-icon-76x76.png'/>
	<link rel='apple-touch-icon' sizes='114x114' href='<?php bloginfo('template_directory'); ?>/assets/apple-icon-114x114.png'/>
	<link rel='apple-touch-icon' sizes='120x120' href='<?php bloginfo('template_directory'); ?>/assets/apple-icon-120x120.png'/>
	<link rel='apple-touch-icon' sizes='144x144' href='<?php bloginfo('template_directory'); ?>/assets/apple-icon-144x144.png'/>
	<link rel='apple-touch-icon' sizes='152x152' href='<?php bloginfo('template_directory'); ?>/assets/apple-icon-152x152.png'/>
	<link rel='apple-touch-icon' sizes='180x180' href='<?php bloginfo('template_directory'); ?>/assets/apple-icon-180x180.png'/>
	<link rel='icon' type='image/png' sizes='192x192' href='<?php bloginfo('template_directory'); ?>/assets/android-icon-192x192.png'/>
	<link rel='icon' type='image/png' sizes='32x32' href='<?php bloginfo('template_directory'); ?>/assets/favicon-32x32.png'/>
	<link rel='icon' type='image/png' sizes='96x96' href='<?php bloginfo('template_directory'); ?>/assets/favicon-96x96.png'/>
	<link rel='icon' type='image/png' sizes='16x16' href='<?php bloginfo('template_directory'); ?>/assets/favicon-16x16.png'/>
	<link rel='manifest' href='<?php bloginfo('template_directory'); ?>/assets/manifest.json'/>
	<meta name='msapplication-TileColor' content='#ffffff'/>
	<meta name='msapplication-TileImage' content='<?php bloginfo('template_directory'); ?>/assets/ms-icon-144x144.png'/>
	<meta name='theme-color' content='#ffffff'/>

	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<title><?php wp_title(); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<link href="<?php bloginfo('template_directory'); ?>/css/fabric.min.css" rel="stylesheet" />
	<link href="<?php bloginfo('template_directory'); ?>/css/fabric.components.min.css" rel="stylesheet" />
	<link href="<?php bloginfo('template_directory'); ?>/css/styles.css" rel="stylesheet" />

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div class='site'>
		<?php get_header(); ?>
		<button>h</button>
		<main id="main" class="site-main" role="main">
			<?php get_template_part( 'content', get_post_format() ); ?>
		</main>
	</div>
	<script src="<?php bloginfo('template_directory'); ?>/js/fabric.min.js"></script>
	<?php wp_footer(); ?>
</body>
</html>

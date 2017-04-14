<?php while ( have_posts() ) : the_post(); ?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <?php get_template_part( 'template-parts/head/site-head' ); ?>
  <?php get_template_part( 'template-parts/post/meta' ); ?>
</head>
<body id="body" <?php body_class(); ?>>
	<div class='site'>
    <?php get_header(); ?>

	<?php if ( has_post_format('quote') ) { ?>
		<?php get_template_part( 'template-parts/post/content-quote' ); ?>
	<?php } else { ?>
		<div class='app-wrapper'>
		  <div class='ms-Grid'>
			<div class='ms-Grid-row'>
			  <?php $class_sidebar = is_active_sidebar('right_sidebar') ? "ms-u-sm12 ms-u-xl9" : "ms-u-sm12"; ?>
			  <main class='ms-Grid-col <?php echo $class_sidebar ?> <?php echo get_post_format() ?>'>
				<?php get_template_part( 'template-parts/post/content', get_post_format() ); ?>
			  </main>
			  <?php if ( is_active_sidebar( 'right_sidebar' ) ) : ?>
				<nav class='sidebar ms-Grid-col ms-u-sm12 ms-u-xl3'>
				  <?php get_sidebar(); ?>
				</nav>
			  <?php endif; ?>
			</div>
			<div class='ms-Grid-row'>
			  <aside class='ms-Grid-col ms-u-sm12 <?php echo get_post_format() ?>'>
				<?php if ( comments_open() || get_comments_number() ) : comments_template(); endif; ?>
			  </aside>
			</div>
		  </div>
		</div>
	<?php } ?>

    <?php get_footer(); ?>
  </div>
</body>
</html>
<?php endwhile; ?>

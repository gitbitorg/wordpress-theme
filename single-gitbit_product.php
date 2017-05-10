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

		<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<main>
				<?php the_content(); ?>
			</main>
		</div>

		<?php get_footer(); ?>
		<?php get_template_part( 'template-parts/post/meta-product' ); ?>
	</div>
</body>
</html>
<?php endwhile; ?>
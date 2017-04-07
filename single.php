<?php while ( have_posts() ) : the_post(); ?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <?php get_template_part( 'template-parts/head/site-head' ); ?>
</head>
<body id="body" <?php body_class(); ?>>
	<div class='site'>
    <?php get_header(); ?>

    <main>
      <?php get_template_part( 'template-parts/post/meta' ); ?>
      <?php get_template_part( 'template-parts/post/content', get_post_format() ); ?>

      <?php if ( comments_open() || get_comments_number() ) : comments_template(); endif; ?>
    </main>

    <?php get_footer(); ?>
  </div>
</body>
</html>
<?php endwhile; ?>

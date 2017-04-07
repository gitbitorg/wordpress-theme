<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <?php get_template_part( 'template-parts/head/site-head' ); ?>
  <?php get_template_part( 'template-parts/head/og-page', get_post_format() ); ?>
</head>
<body id="body" <?php body_class(); ?>>
  <div class='site'>
    <?php get_header(); ?>

    <main>
      <?php get_template_part( 'template-parts/post/meta' ); ?>
      <?php get_template_part( 'template-parts/post/content', get_post_format() ); ?>
    </main>

    <?php get_footer(); ?>
  </div>
</body>
</html>
<?php endwhile; endif; ?>

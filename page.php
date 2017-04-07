<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <?php get_template_part( 'template-parts/head/site-head.php' ); ?>
</head>
<body id="body" <?php body_class(); ?>>
  <div class='site'>
    <?php get_header(); ?>

    <main>
      <?php
        if ( have_posts() ) : while ( have_posts() ) : the_post();
          get_template_part( 'template-parts/post/meta' );
          get_template_part( 'template-parts/post/content', get_post_format() );
        endwhile; endif;
      ?>
    </main>

    <?php get_footer(); ?>
  </div>
</body>
</html>

<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <?php get_template_part( 'template-parts/head/site-head' ); ?>
</head>
<body id="body" <?php body_class(); ?>>
	<div class='site'>
    <?php get_header(); ?>

    <main>
      <?php while ( have_posts() ) : the_post();
        get_template_part( 'template-parts/post/meta' );
        get_template_part( 'template-parts/post/content', get_post_format() );


        if ( comments_open() || get_comments_number() ) :
          comments_template();
        endif;

      endwhile; ?>
    </main>
    <?php get_footer(); ?>
  </div>
</body>
</html>

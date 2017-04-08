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

    <div class='app-wrapper'>
      <div class='ms-Grid'>
        <div class='ms-Grid-row'>
          <main class='ms-Grid-col ms-u-sm12 ms-u-xl9 <?php echo get_post_format() ?>'>
            <?php get_template_part( 'template-parts/post/content', get_post_format() ); ?>
          </main>
          <nav class='sidebar ms-Grid-col ms-u-sm12 ms-u-xl3'>
            <?php get_sidebar(); ?>
          </nav>
        </div>
        <div class='ms-Grid-row'>
          <aside class='ms-Grid-col ms-u-sm12 ms-u-xl9 <?php echo get_post_format() ?>'>
            <?php if ( comments_open() || get_comments_number() ) : comments_template(); endif; ?>
          </aside>
        </div>
      </div>
    </div>

    <?php get_footer(); ?>
  </div>
</body>
</html>
<?php endwhile; ?>

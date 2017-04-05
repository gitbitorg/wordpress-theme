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

<?php get_header(); ?>

<main>
  <?php while ( have_posts() ) : the_post();

  if ( has_post_format( 'aside' )) {
    get_template_part( 'content-paper', get_post_format() );
  } else {
    get_template_part( 'content-page', get_post_format() );
  }


    if ( comments_open() || get_comments_number() ) :
      comments_template();
    endif;

  endwhile; ?>
</main>

<?php get_footer(); ?>

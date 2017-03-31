<?php get_header(); ?>

<main>
  <?php
    if ( have_posts() ) : while ( have_posts() ) : the_post();

      get_template_part( 'content', get_post_format() );

    endwhile; endif;
  ?>

  <?php
  // Start the loop.
  while ( have_posts() ) : the_post();

    get_template_part( 'content', get_post_format() );

    if ( comments_open() || get_comments_number() ) :
      comments_template();
    endif;

    the_post_navigation( array(
      'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next', 'twentyfifteen' ) . '</span> ' .
        '<span class="screen-reader-text">' . __( 'Next post:', 'twentyfifteen' ) . '</span> ' .
        '<span class="post-title">%title</span>',
      'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'twentyfifteen' ) . '</span> ' .
        '<span class="screen-reader-text">' . __( 'Previous post:', 'twentyfifteen' ) . '</span> ' .
        '<span class="post-title">%title</span>',
    ) );

  // End the loop.
  endwhile;
  ?>
</main>

<?php get_footer(); ?>

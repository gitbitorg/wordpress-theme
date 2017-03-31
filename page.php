<?php get_header(); ?>

<main>
  <div>format: <?php echo get_post_format() ?>
  <?php
    if ( have_posts() ) : while ( have_posts() ) : the_post();

      get_template_part( 'content', get_post_format() );

    endwhile; endif;
  ?>
</main>

		</div>
  </div>
</div>

<?php get_footer(); ?>

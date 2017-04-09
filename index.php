<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <?php get_template_part( 'template-parts/head/site-head' ); ?>
</head>
<body id="body" <?php body_class(); ?>>
  <div class='site'>
    <?php get_header(); ?>

		<main>
			<div class='app-wrapper'>
				<div class='ms-Grid'>
					<div class='ms-Grid-row'>
						<?php
							if ( have_posts() ) : while ( have_posts() ) : the_post();
								get_template_part( 'template-parts/card/content', get_post_format() );
							endwhile; endif;
						?>
					</div>
				</div>
			</div>
		</main>
		<nav class='app-wrapper'>
      <div class='ms-Grid'>
  			<ul class="pager ms-Grid-row">
  				<li class="ms-Grid-col ms-u-sm6"><?php next_posts_link( 'Previous' ); ?></li>
  				<li class="ms-Grid-col ms-u-sm6 ms-u-textAlignRight"><?php previous_posts_link( 'Next' ); ?></li>
  			</ul>
      </div>
		</nav>
		<?php /* get_sidebar(); */ ?>

		<?php get_footer(); ?>
  </div>
</body>
</html>

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
					<div class="pager ms-Grid-row">
						<?php 
							$args = array( 'post_type' => 'gitbit_product' );
							$loop = new WP_Query( $args );
							while ( $loop->have_posts() ) : $loop->the_post();
								get_template_part( 'template-parts/card/content-product' );
							endwhile;
						?>
					</div>
				</div>
			</div>
		</main>

		<?php get_footer(); ?>
  </div>
</body>
</html>
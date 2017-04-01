<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package Fabric
 * @since Office UI 1.0
 */

?>


			<?php get_header(); ?>
			<main>
				<div class='app-wrapper'>
					<div class='ms-Grid'>
						<div class='ms-Grid-row'>
							<?php
								if ( have_posts() ) : while ( have_posts() ) : the_post();
									get_template_part( 'content', get_post_format() );
								endwhile; endif;
							?>
						</div>
					</div>
				</div>
			</main>
			<nav>
				<ul class="pager">
					<li><?php next_posts_link( 'Previous' ); ?></li>
					<li><?php previous_posts_link( 'Next' ); ?></li>
				</ul>
			</nav>
			<?php /* get_sidebar(); */ ?>

<?php get_footer(); ?>

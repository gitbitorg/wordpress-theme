<article class='content-container ms-Grid ms-font-xl <?php echo get_post_format() ?>' itemscope itemtype="http://schema.org/Article">
	<div class='content'>
		<?php get_template_part( 'template-parts/post/meta-header' ); ?>

		<div class='article-body ms-Grid-row'>
			<section class="ms-fontWeight-light ms-Grid-col ms-u-sm12">
				<?php the_content(); ?>
			</section>
		</div>
	</div>

	<?php get_template_part( 'template-parts/post/meta-about' ); ?>
</article>

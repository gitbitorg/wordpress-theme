<div class="ms-Grid ms-font-xl">
	<article class='content-container <?php echo get_post_format() ?>' itemscope itemtype="http://schema.org/Article">
		<div class='content'>
			<?php get_template_part( 'template-parts/post/meta-header' ); ?>

			<div class='article-body ms-Grid-row'>
				<section itemprop="articleBody" class="ms-fontWeight-light ms-Grid-col ms-u-sm12">
					<?php the_content(); ?>
				</section>
			</div>
		</div>

		<?php get_template_part( 'template-parts/post/meta-about' ); ?>
	</article>
</div>

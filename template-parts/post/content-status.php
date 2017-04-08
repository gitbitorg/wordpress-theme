<article class='ms-Grid ms-font-xl <?php echo get_post_format() ?>'>
	<div class='content'>
		<header class='ms-Grid-row'>
			<h1 class="article-title ms-font-su ms-Grid-col ms-u-sm12 ms-u-md8 ms-u-lg10"><?php the_title(); ?></h1>
			<span class="ms-fontWeight-light ms-Grid-col ms-u-sm12 ms-u-md8 ms-u-lg10"><?php the_date(); ?></span>
			<div class="ms-fontWeight-light ms-Grid-col ms-u-sm12">
				<?php the_post_thumbnail('featured-image'); ?>
			</div>
		</header>

		<div class='article-body ms-Grid-row'>
			<section class="ms-fontWeight-light ms-Grid-col ms-u-sm12">
				<?php the_content(); ?>
			</section>
		</div>
	</div>
</article>

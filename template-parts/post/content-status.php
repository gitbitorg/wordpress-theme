<div class='grey-background'>
	<div class='app-wrapper'>
		<article class='ms-Grid paper ms-font-xl'>
			<div class='content'>
				<header class='ms-Grid-row'>
					<h1 class="article-title ms-font-su ms-Grid-col ms-u-sm6 ms-u-md8 ms-u-lg10"><?php the_title(); ?></h1>
					<span class="ms-fontWeight-light ms-Grid-col ms-u-sm6 ms-u-md8 ms-u-lg10"><?php the_date(); ?></span>
					<?php the_post_thumbnail('featured-image'); ?>
				</header>

				<section class='article-body'>
					<?php the_content(); ?>
				</section>
			</div>
		</article>
	</div>
</div>

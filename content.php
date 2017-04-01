<div class='ms-Grid-col ms-u-sm12 ms-u-lg6 ms-u-xl4'>
	<div class='card card-horizontal'>
		<a href='<?php the_permalink(); ?>'>
			<div class='card-thumbnail'>
				<?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
			</div>
			<div class='card-contents'>
				<h2 class="ms-font-xxl"><?php the_title(); ?></h2>
				<div class='excerpt'><?php the_excerpt(); ?></div>
			</div>
		</a>
	</div>
</div>
<div class='ms-Grid-col ms-u-xl2 ms-u-hiddenXlDown'></div>

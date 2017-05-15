<div class="ms-Grid-row hero">
	<?php $product = get_post_meta($post->ID, 'gitbit_product', true); ?>
	<div class="ms-Grid-col ms-u-sm12 ms-u-xl5 ms-u-xlPush7 ms-u-xxl4 ms-u-xxlPush7 ms-u-textAlignCenter">
		<div class="ms-fontSize-sPlus ms-fontWeight-semilight">
			<?php 
				$topics = wp_get_object_terms($post->ID, 'gitbit_product_topic');
				if ( ! empty( $topics ) ) {
					if ( ! is_wp_error( $topics ) ) {
						foreach( $topics as $topic ) {
							echo $topic->name;
						}
					}
				}
			?>
		</div>
		<h2 class="ms-font-xxl no-margin"><a href='<?php the_permalink(); ?>'><?php the_title(); ?></a></h2>
		<div class="ms-fontWeight-semilight ms-font-l">
			<?php the_excerpt(); ?>
		</div>
	</div>
	<div class='ms-Grid-col ms-u-sm12 ms-u-xl7 ms-u-textAlignCenter ms-u-xxl6 ms-u-xxlPull3 ms-u-xlPull5'>
		<iframe src="<?php echo $product['video'] ?>?modestbranding=1&rel=0" style="max-width: 100%; max-height: 56.25vw;" width="560" height="315" frameborder="0" allowfullscreen="allowfullscreen"></iframe>
	</div>
</div>
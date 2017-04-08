<?php if ( is_active_sidebar( 'right_sidebar' ) ) : ?>
	<div id="primary-sidebar" class="primary-sidebar widget-area ms-Grid" role="complementary">
		<div class='ms-Grid-row'>
			<?php dynamic_sidebar( 'right_sidebar' ); ?>
		</div>
	</div>
<?php endif; ?>

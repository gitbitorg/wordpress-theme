<?php
/**
 * The template for displaying comments
 *
 * The area of the page that contains both current comments
 * and the comment form.
 */

if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area app-wrapper" itemprop="comment" itemscope itemtype="http://schema.org/Comment">
	<div class='ms-Grid paper'>
		<div class='content'>
			<div class='ms-Grid-row'>
				<h1 class="comments-title ms-Grid-col ms-u-xs12">Comments</h1>
			</div>

			<div class='ms-Grid-row'>
				<?php if ( have_comments() ) : ?>
					<ol class="comment-list ms-Grid-col ms-u-xs12">
						<?php
							wp_list_comments( array(
								'style'       => 'ol',
								'short_ping'  => true,
								'avatar_size' => 56,
							) );
						?>
					</ol>
				<?php endif; // have_comments() ?>
			</div>

			<?php comment_form(); ?>
		</div>
	</div>
</div><!-- .comments-area -->

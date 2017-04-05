<?php $meta = get_post_meta( $post->ID, 'gitbit', true ); ?>

<?php if ( $meta['backgroundcolor'] ) : ?>
<style>
  #body {
    background-color: <?php echo $meta['backgroundcolor']; ?>
  }
</style>
<?php endif; ?>

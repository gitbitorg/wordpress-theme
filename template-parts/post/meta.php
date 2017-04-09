<?php $meta = get_post_meta( $post->ID, 'gitbit', true ); ?>

<?php if ( isset($meta['backgroundcolor']) and !empty($meta['backgroundcolor']) ) { ?>
  <style>
    #body {
      background-color: <?php echo $meta['backgroundcolor']; ?>
    }
  </style>
<?php } elseif (get_post_format() == 'status') { ?>
  <style>
    #body {
      background-color: #f4f4f4;
    }
  </style>
<?php } ?>
